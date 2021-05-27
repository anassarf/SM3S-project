<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailMarkdown extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message = null)
    {
        $this-> message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
           
        $from_email = $this->message['email'];
        return $this->subject($this->message['choice']= null)
                    ->from($from_email)
                    ->markdown('emails.ContactMailMarkdown',array(

                                'name' => $this->message['name'],
                                'phone' => $this->message['phone_number'],
                                'content'=> $this->message['content'],

                    ));
                            
    }
}
