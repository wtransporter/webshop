<?php

namespace Tests\Feature;

use App\Order;
use App\Article;
use Tests\TestCase;
use App\ArticleOrder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManageCartTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authenticated_user_may_add_articles_to_cart()
    {
        $this->signIn();

        $article = factory(Article::class)->create();

        $response = $this->get('/tp-admin/cart/'.$article->id);

        $response->assertStatus(302);

    }

    /** @test */
    public function authenticated_users_may_see_cart_details()
    {
        // $this->withoutExceptionHandling();
        $this->signIn();

        $article = factory(Article::class)->create();

        $this->get('/tp-admin/cart/'.$article->id);

        $this->get('/tp-admin/cart')->assertSee($article->title);

    }

    /** @test */
    public function authenticated_users_may_delete_items_from_cart()
    {
        // $this->withoutExceptionHandling();
        $this->signIn();

        $article = factory(Article::class)->create();

        $this->get('/tp-admin/cart/'.$article->id);

        $this->get('/tp-admin/cart')->assertSee($article->title);

        $this->delete('/tp-admin/cart/'.$article->id)->assertStatus(302);
    }

    /** @test */
    public function authenticated_users_may_save_orders()
    {
        $user = $this->signIn();

        $article = factory(Article::class)->create();

        $order = factory(Order::class)->create(['user_id' => $user->id]);
        
        $articleOrder = factory(ArticleOrder::class)->create([
            'order_id' => $order->id,
            'article_id' => $article->id
        ]);

        $this->post('/tp-admin/cart');

        $this->assertDatabaseHas('orders', [
                'id' => $order->id,
                'user_id' => $user->id
            ]);
        
        $this->assertDatabaseHas('article_order', [
                'order_id' => $order->id,
                'article_id' => $article->id
            ]);

    }

}