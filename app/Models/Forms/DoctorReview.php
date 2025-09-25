<?php

namespace App\Models\Forms;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorReview extends Model
{
    use HasFactory;
    protected $table = 'medical_reviews';
    protected $fillable = [
        'medical_assessment_id',
        'practitioner',
        'participant',
        'age',
        'examine_date',
        'height',
        'weight',
        'pressure',
        'pulse',
        'respiratory',
        'physical',
        'mental',
        'current',
        'impression',
        'examiner',
        'location',
        'title',
        'contact',
        'doc_email',
        'doctor_signature',
        'doc_sign_date',
    ];
    public function medicalAssessment()
    {
        return $this->belongsTo(MedicalAssessment::class, 'medical_assessment_id');
    }

}
