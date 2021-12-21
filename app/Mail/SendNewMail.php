<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class SendNewMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($messageData)
    {
        //
        $this->msg = $messageData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $msgVariable = $this->msg;

        return $this->subject($msgVariable["Issue"])->view('site.user.email');
    }
}
