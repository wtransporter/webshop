<?php

namespace Tests\Unit;

use App\Cart;
use App\Order;
use Tests\TestCase;
use App\ArticleOrder;
use App\Notifications\OrderCreated;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class OrderTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function a_order_may_send_notification_to_admin()
    {
        Notification::fake();
        
        $user = $this->signIn($this->adminUser());

        $cart = new Cart(null, 1);

        $firstArticle = create('App\Article');

        $cart->add($firstArticle, $firstArticle->id);

        $order = create('App\Order', [
            'amount' => $cart->totalSum,
            'total_price' => $cart->totalPrice
        ]);

        $order->addItems($cart->items);
        
        Notification::assertSentTo($user, OrderCreated::class);
    }

    /** @test */
    function a_order_can_add_items()
    {
        // $this->withoutExceptionHandling();
        $cart = new Cart(null, 1);

        $firstArticle = create('App\Article');

        $cart->add($firstArticle, $firstArticle->id);

        $order = create('App\Order', [
            'amount' => $cart->totalSum,
            'total_price' => $cart->totalPrice
        ]);

        $order->addItems($cart->items);

        $this->assertCount(1, ArticleOrder::all());
        // $this->assertDatabaseHas('article_order', [
        //     'order_id' => $order->id,
        //     'article_id' => $firstArticle->id,
        // ]);
    }

}