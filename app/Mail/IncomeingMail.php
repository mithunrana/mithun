<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class IncomeingMail extends Mailable
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
    public $email;
    public function __construct($subject,$message,$name,$email)
    {
        $this->subject = $subject;
        $this->message = $message;
        $this->name = $name;
        $this->email = $email;
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
        $sender_email = $this->email;
        return $this->view('Admin.incomeingmail',compact('sendmessage','sendName','sender_email'))->subject($subject);
    }
}
