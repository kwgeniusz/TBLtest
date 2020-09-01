<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

public $contact;

public function __construct($contact)
{
    $this->contact = $contact;

}
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->markdown('emails.welcome')
        ->from('tbl@technerds.com', 'TBL Technerds')
        ->subject('Welcome to TBL Technerds');
    }
}
