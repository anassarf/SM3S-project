<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailMarkdow2 extends Mailable
{
    use Queueable, SerializesModels;
    public $message2;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message2)
    {
        $this -> message2 = $message2;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this ->subject('Mail reçu')
                     ->markdown('emails.ContactMailMarkdow2');
    }
}
