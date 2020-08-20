<?php

namespace Tests\Feature;

use App\User;
use App\Article;
use App\Category;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ViewArticlesTest extends TestCase
{
    use RefreshDatabase, DatabaseMigrations;

    /** @test */
    public function users_can_see_articles_and_categories()
    {
        $article = factory(Article::class)->create();

        $category = factory(Category::class)->create();

        $this->get('/')
            ->assertSee($article->title)
            ->assertSee($category->title);
    }

    /** @test */
    public function users_can_see_single_article()
    {
        // $this->withoutExceptionHandling();
        $article = factory(Article::class)->create();

        $this->get('/articles/'.$article->slug)
            ->assertSee($article->title);
    }

    /** @test */
    public function authenticated_users_may_see_articles()
    {
        // $this->withoutExceptionHandling();
        $this->signIn($user = factory(User::class)->create(['head' => 1]));

        $article = factory(Article::class)->create();

        $this->get('/tp-admin/articles')
            ->assertSee($article->title);
    }

    /** @test */
    public function authenticated_users_may_create_articles()
    {
        // $this->withoutExceptionHandling();
        $this->signIn($user = factory(User::class)->create(['head' => 1]));

        $this->get('/tp-admin/articles/create')->assertStatus(200);

        $article = factory(Article::class)->make();

        $response = $this->post('/tp-admin/articles/', $article->toArray());
               
        $this->get($response->headers->get('Location'))->assertStatus(200);
    }

    /** @test */
    public function authenticated_users_may_delete_articles()
    {
        // $this->withoutExceptionHandling();
        
        $this->signIn($user = factory(User::class)->create(['head' => 1]));

        $article = factory(Article::class)->create();

        $this->delete('/tp-admin/articles/'. $article->slug);
        
        $this->assertDatabaseMissing('articles', ['id' => $article->id]);
    }

    /** @test */
    public function unauthenticated_users_may_not_create_articles()
    {
        
        // $this->withoutExceptionHandling();
        $this->signIn();
        
        $this->get('/tp-admin/articles/create')->assertRedirect('/login');
        
        $this->post('/tp-admin/articles/')->assertRedirect('/login');

    }

    /** @test */
    public function guest_users_may_not_create_articles()
    {
        
        $this->get('/tp-admin/articles/create')->assertRedirect('/login');
        
        $this->post('/tp-admin/articles/')->assertRedirect('/login');

    }

}
