<?php

namespace Tests\Unit;

use App\User;
use App\Article;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ArticleTest extends TestCase
{
    
    use RefreshDatabase, DatabaseMigrations;
    
    /** @test */
    public function authenticated_users_may_create_articles()
    {
        // $this->withoutExceptionHandling();
        $this->signIn($user = factory(User::class)->create(['head' => 1]));

        $article = factory(Article::class)->create();

        $this->assertDatabaseHas('articles', [
                'id' => $article->id,
                'title' => $article->title,
                'manufacturer' => $article->manufacturer
            ]);

        $this->assertEquals(1, Article::count());

    }
}
