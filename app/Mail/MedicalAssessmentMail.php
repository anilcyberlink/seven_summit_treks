<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MedicalAssessmentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $medical;
    public $doctorReview;
    public $medicalHistory;
    /**
     * Create a new message instance.
     */
    public function __construct($medical)
    {
        $this->medical = $medical;
        $this->doctorReview = $medical->doctorReview;
        $this->medicalHistory = $medical->medicalHistory;

    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.admin-medical', ['medicalData'=> $this->medical , 'doctorReview' => $this->doctorReview, 'medicalHistory' => $this->medicalHistory]);
    }
}
