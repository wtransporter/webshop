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
    public function authenticated_users_may_see_orders_on_dashboard()
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

    /** @test */
    public function authenticated_users_may_see_all_orders()
    {
        $this->withoutExceptionHandling();
        $this->signIn($this->adminUser());

        $order = factory(Order::class)->create();

        $this->get('/tp-admin/orders/')
            ->assertSee($order->user->name);
    }    

    /** @test */
    public function unauthenticated_users_may_not_see_single_order()
    {
        $this->signIn();

        $order = factory(Order::class)->create();

        $this->get('/tp-admin/orders/'.$order->id)
            ->assertRedirect('/login');
    }

    /** @test */
    public function guest_users_may_not_see_single_order()
    {
        $order = factory(Order::class)->create();

        $this->get('/tp-admin/orders/'.$order->id)
            ->assertRedirect('/login');
    }
}