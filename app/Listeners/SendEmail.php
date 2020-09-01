<?php

namespace App\Listeners;

use App\Events\UserHasContacted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;


class SendEmail
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
     * @param  UserHasContacted  $event
     * @return void
     */
    public function handle(UserHasContacted $event)
    {
            
             Mail::to($event->contact['email'])->queue(
           new WelcomeMail($event->contact)
       );
    }
}
