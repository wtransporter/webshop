<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewArticlesTest extends TestCase
{
    /** @test */
    public function guests_can_see_articles()
    {
        $article = factory(Article::class);

        $this->get('/')->assertSee($article->title);
    }
}
