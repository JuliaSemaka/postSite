<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FeedbackMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        return $this->view('view.name');

//        return $this->from('example@example.com')
//            ->view('mails.feedback', [
//                'data' => $this->data
//            ]);

        return $this->view('mails.feedback')
            ->from(['address' => $this->data['email']])
            ->with(['data' => $this->data])
            ->subject('Письмо с блога')
            ->attach(base_path('.env'));
    }
}
