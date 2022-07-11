<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function build()
    {
        return $this->subject('Новое письмо на сайте digitalcoffeedesign.com')->
        from(env('MAIL_USERNAME'))->markdown('emails.message_mail')
            ->with('data', [$this->request]);
    }
}
