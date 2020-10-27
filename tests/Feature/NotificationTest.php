<?php

namespace Tests\Feature;

use App\Order;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Notifications\DatabaseNotification;

class NotificationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function order_may_send_notification_to_admin()
    {
        // $this->withoutExceptionHandling();
        $admin = $this->signIn($this->adminUser());

        $user = $this->signIn();

        $order = factory(Order::class)->create(['user_id' => $user->id]);
        
        $this->assertCount(0, $admin->notifications);
        
        $order->notify();

        $this->assertCount(1, $admin->fresh()->notifications);
        
    }

    /** @test */
    public function authenticatrd_users_may_see_notifications()
    {
        $user = $this->signIn($this->adminUser());
        
        $notification = factory(DatabaseNotification::class)->create(['notifiable_id' => $user->id]);

        $this->assertCount(1, $this->getJson('/tp-admin/profiles/'.$user->id.'/notifications')->json());
    }


    // /** @test */
    // public function unauthenticatrd_users_may_not_see_notifications()
    // {
    //     $this->get('/tp-admin/profiles/notifications')->assertRedirect('/login');
    // }
    

    /** @test */
    public function authenticatrd_users_may_mark_notifications_as_read()
    {
        // $this->withoutExceptionHandling();
        $user = $this->signIn($this->adminUser());
        
        factory(DatabaseNotification::class)->create(['notifiable_id' => $user->id]);

        $this->assertCount(1, $user->unreadNotifications);

        $this->delete('/tp-admin/profiles/'.$user->id.'/notifications/'.$user->notifications()->first()->id);
        
        $this->assertCount(0, $user->fresh()->unreadNotifications);
    }

}