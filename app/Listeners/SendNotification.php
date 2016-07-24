<?php

namespace App\Listeners;

use App\Events\MessageSent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendNotification
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
     * @param  MessageSent  $event
     * @return void
     */
    public function handle(MessageSent $event)
    {
        $contact_message = $event->message;
        Mail::send('email.contact-message-notification' , ['contact_message' => $contact_message] , function($m) use ($contact_message)  {
            $m->from('eng.nazmulhossain@gmail.com' , 'My blog Application on Laravel');
            $m->to('admin@laravel-udemy.course.com' , 'Laravel Udemy Course Admin');
            $m->subject('New Contact Message From :' , $contact_message->email );
        });
    }
}
