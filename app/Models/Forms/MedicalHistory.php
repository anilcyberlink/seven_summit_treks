<?php

namespace App\Models\Forms;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalHistory extends Model
{
    use HasFactory;
    protected $table = 'medical_histories';
    protected $fillable = [
        'medical_assessment_id',
        'prescription',
        'contact_lenses',
        'eye_problem',
        'hay_fever',
        'sinusitis',
        'nose_throat',
        'headache',
        'migraine',
        'fainting',
        'convulsions',
        'concussion',
        'sleepwalking',
        'depression',
        'mental_illness',
        'coughing_blood',
        'chronic_cough',
        'tb',
        'pneumothorax',
        'chest_colds',
        'asthma',
        'puffer',
        'other_chest',
        'operation',
        'indigestion',
        'vomiting_blood',
        'recurrent_vomiting',
        'jaundice',
        'malaria',
        'weight_loss',
        'ams',
        'hape',
        'hace',
        'frostbite',
        'heart_disease',
        'abnormal_blood_test',
        'high_blood_pressure',
        'rheumatic_fever',
        'chest_discomfort',
        'shortness_breath',
        'bronchitis_pneumonia',
        'pleurisy',
        'hernia',
        'joint_injury',
        'fractures',
        'paralysis',
        'kidney_bladder',
        'chronic_disease',
        'syphilis',
        'hiv',
        'hepatitis_bc',
        'diabetes',
        'blood_disease',
        'operations',
        'hospital',
        'life_insurance_rejected',
        'job_or_license_refused',
        'unable_to_work',
        'pregnant'
    ];
    public function medicalAssessment()
    {
        return $this->belongsTo(MedicalAssessment::class, 'medical_assessment_id');
    }

}
