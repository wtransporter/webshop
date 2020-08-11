<?php

namespace Tests\Feature;

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


}
