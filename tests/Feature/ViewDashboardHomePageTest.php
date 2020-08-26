<?php

namespace Tests\Feature;

use App\Order;
use App\Article;
use Tests\TestCase;
use App\ArticleOrder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ViewDashboardHomePageTest extends TestCase
{
    use RefreshDatabase, DatabaseMigrations;

    /** @test */
    public function authenticated_users_may_see_orders()
    {
        // $this->withoutExceptionHandling();

        $this->signIn($this->adminUser());
        
        $order = factory(Order::class)->create();

        $article = factory(Article::class)->create();

        $this->get('/tp-admin/home')
            ->assertSee($order->user->name)
            ->assertSee($article->title);

    }

    /** @test */
    public function authenticated_users_may_see_single_order()
    {
        $this->signIn($this->adminUser());
        
        $order = factory(Order::class)->create();

        $article = factory(Article::class)->create();

        $orderItems = factory(ArticleOrder::class)->create([
            'order_id' => $order->id,
            'article_id' => $article->id
            ]);

        $this->assertEquals($article->title, $order->articles->first()->title);
        
        $this->get('/tp-admin/orders/'.$order->id)
            ->assertSee($order->articles->first()->title);

    }

}