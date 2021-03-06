<?php

namespace Tests\Feature;

use App\Cart;
use App\User;
use App\Order;
use App\Article;
use Tests\TestCase;
use App\ArticleOrder;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderCreatedEmailNotification;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManageOrdersTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function an_authenticated_user_can_submit_order()
    {

        $this->signIn();

        $cart = $this->newCart();

        $order = make(Order::class);

        $this->withSession(['cart' => $cart])
            ->post('/tp-admin/cart', $order->toArray())->assertStatus(302);

        $this->assertEquals(1, Order::count());
        $this->assertEquals(1, ArticleOrder::count());
    }

    protected function newCart()
    {
        $cart = new Cart(NULL, 1);
        $article = create(Article::class);
        $cart->add($article, $article->id);

        return $cart;
    }

    /** @test */
    public function confirmation_email_is_sent_to_a_user()
    {
        $this->signIn();
        
        Mail::fake();

        $cart = $this->newCart();

        $order = create(Order::class);
        
        $this->withSession(['cart' => $cart])
            ->post('/tp-admin/cart', $order->toArray())->assertStatus(302);

        Mail::assertSent(OrderCreatedEmailNotification::class);
    }
}
