<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InsuranceMail extends Mailable
{
    use Queueable, SerializesModels;

    public $insurance;
    /**
     * Create a new message instance.
     */
    public function __construct($insurance)
    {
        $this->insurance = $insurance;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $passports = $this->insurance->passports; 
        return $this->view('emails.admin-insurance', ['photos'=>$passports]);
    }
}
