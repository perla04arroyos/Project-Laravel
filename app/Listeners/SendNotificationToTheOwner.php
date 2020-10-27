<?php

namespace App\Listeners;

use Mail;
use App\Events\MessageWasReceived;
use App\Mail\MessageToTheOwner;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNotificationToTheOwner
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    /**
     * Handle the event.
     *
     * @param  MessageWasReceived  $event
     * @return void
     */
    public function handle(MessageWasReceived $event)
    {
        $message = $event->message;
        Mail::to('perla.pmar04@gmail.com')->queue(new MessageToTheOwner($message));
    }
}
