<?php

namespace App\Models\Forms;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalAssessment extends Model
{
    use HasFactory;
    protected $table = 'medical_assessments';

    protected $fillable = [
        'fullname',
        'bdate',
        'address', 
        'phone',
        'email',
        'gender',
        'other_gender',
        'exercise',
        'frequency',
        'smoke',
        'alcohol',
        'drink',
        'medication',
        'dose',
        'allergy',
        'kind',
        'reaction',
        'reaction_detail','illness', 'doctor', 'signature', 'signature_date'
    ];
    public function doctorReview()
    {
        return $this->hasOne(DoctorReview::class, 'medical_assessment_id');
    }
    public function medicalHistory()
    {
        return $this->hasOne(MedicalHistory::class, 'medical_assessment_id');
    }

}
