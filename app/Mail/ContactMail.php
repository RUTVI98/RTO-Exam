<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    public function __construct($details)
    {
        $this->details = $details;

    }

    public function build()
    {
        return $this->from('contact@domain.com', 'Contact')
            ->subject('New Contact Form Submitted.')
            ->view('web.setting.contact')
            ->with('details', $this->details);
    }
}
