<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $subject;
    public $message;
    public $name;
    public function __construct($subject,$message,$name)
    {
        $this->subject = $subject;
        $this->message = $message;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = $this->subject;
        $sendmessage = $this->message;
        $sendName = $this->name;
        return $this->view('Admin.contact-sendmail',compact('sendmessage','sendName'))->subject($subject);
    }
}
