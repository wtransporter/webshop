<?php

namespace Tests\Feature;

use App\Order;
use App\Article;
use Tests\TestCase;
use App\ArticleOrder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ViewHistoryOrdersTest extends TestCase
{
    use RefreshDatabase, DatabaseMigrations;

    /** @test */
    public function authenticated_user_may_see_order_hostory()
    {
        
        // $this->withoutExceptionHandling();
        $john = $this->signIn();

        $orderBelongsToJohn = factory(Order::class)->create(['user_id' => $john->id]);

        $orderNotBelongsToJohn = factory(Order::class)->create();

        $this->get('/profiles/'.$john->id.'/history')
            ->assertSee($orderBelongsToJohn->user->name)
            ->assertDontSee($orderNotBelongsToJohn->user->name);

    }

    /** @test */
    public function unauthenticated_users_may_not_see_other_users_order_list()
    {
        
        // $this->withoutExceptionHandling();
        $john = $this->signIn();

        $orderBelongsToJohn = factory(Order::class)->create(['user_id' => $john->id]);

        $orderNotBelongsToJohn = factory(Order::class)->create();

        $this->get('/profiles/'.$orderNotBelongsToJohn->user_id.'/history')
            ->assertStatus(403);

    }

    /** @test */
    public function authenticated_users_may_see_single_order()
    {
        
        // $this->withoutExceptionHandling();
        $john = $this->signIn();

        $orderBelongsToJohn = factory(Order::class)->create(['user_id' => $john->id]);

        $article = factory(Article::class)->create();

        $orderDetailsBelongsToJohn = factory(ArticleOrder::class)->create([
                'order_id' => $orderBelongsToJohn->id,
                'article_id' => $article->id
            ]);

        $orderNotBelongsToJohn = factory(Order::class)->create();

        $this->get('/profiles/'.$john->id.'/history/'.$orderBelongsToJohn->id)
            ->assertSee($orderDetailsBelongsToJohn->article_id)
            ->assertSee($article->title);

    }

}