<?php

namespace App\Listeners;

use Mail;
use App\Events\MessageWasReceived;
use App\Mail\MessageReceived;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendAutoresponder
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
        Mail::to($message['email'])->queue(new MessageReceived($message));
    
    }
}
