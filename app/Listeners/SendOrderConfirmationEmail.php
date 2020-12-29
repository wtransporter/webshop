<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\OrderCreatedEmailNotification;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendOrderConfirmationEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderCreated  $event
     * @return void
     */
    public function handle(OrderCreated $event)
    {
        Mail::to($event->order->user->email)->send(new OrderCreatedEmailNotification($event->order));
    }
}
