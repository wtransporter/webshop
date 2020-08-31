<?php

namespace Tests\Unit;

use App\Order;
use Tests\TestCase;
use App\Notifications\OrderCreated;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class OrderTest extends TestCase
{
    use RefreshDatabase, DatabaseMigrations;

    /** @test */
    public function a_order_may_send_notification_to_admin()
    {
        Notification::fake();
        
        $this->signIn($this->adminUser());

        $order = factory(Order::class)->create();

        $order->notify();
        
        Notification::assertSentTo(auth()->user(), OrderCreated::class);
    }

}