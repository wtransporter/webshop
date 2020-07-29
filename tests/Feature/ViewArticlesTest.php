<?php

namespace Tests\Feature;

use App\Article;
use App\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewArticlesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guests_can_see_articles_and_categories()
    {
        $article = factory(Article::class)->create();

        $category = factory(Category::class)->create();

        $this->get('/')
            ->assertSee($article->title)
            ->assertSee($category->title);
    }

}
