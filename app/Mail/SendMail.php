<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $contactMessage;
    public $contact;
    public function __construct($contactMessage,$contact)
    {
        $this->contactMessage = $contactMessage;
        $this->contact = $contact;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contact Message Community Mart')
            ->view('mail.contact',compact($this));
    }
}
