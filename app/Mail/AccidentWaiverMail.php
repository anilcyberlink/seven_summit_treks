<?php

namespace App\Mail;

use App\Models\Settings\SettingModel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AccidentWaiverMail extends Mailable
{
    use Queueable, SerializesModels;
    public $accident;
    /**
     * Create a new message instance.
     */
    public function __construct($accident)
    {
        $this->accident = $accident;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.admin-accidentwaiver', ['accidentData'=> $this->accident]);
    }
}
