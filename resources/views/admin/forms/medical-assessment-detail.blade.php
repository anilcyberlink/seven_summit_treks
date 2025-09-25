@extends('admin.master')
@section('title','Medical Assessment Detail')
@section('breadcrumb')
<a href="{{ route('admin.medical') }}" class="btn btn-primary btn-sm">Back</a> 
@endsection
@section('content')

        <div class="col-md-12">
            <!-- Input Fields -->
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Detail</span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <strong>Full Name:</strong>
                            <p>{{ $medical->fullname }}</p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Birth Date:</strong>
                            <p>{{ $medical->bdate }}</p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Address:</strong>
                            <p>{{ $medical->address }}</p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Phone:</strong>
                            <p>{{ $medical->phone }}</p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Email:</strong>
                            <p>{{ $medical->email }}</p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Gender:</strong>
                            <p>
                                {{ $medical->gender }}
                                @if($medical->gender === 'other' && $medical->other_gender)
                                    ({{ $medical->other_gender }})
                                @endif
                            </p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Exercise:</strong>
                            <p>{{ $medical->exercise ? 'Yes' : 'No' }} 
                                @if($medical->frequency) ({{ $medical->frequency }}) @endif
                            </p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Smoke:</strong>
                            <p>{{ $medical->smoke ? 'Yes' : 'No' }}</p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Alcohol:</strong>
                            <p>{{ $medical->alcohol ? 'Yes' : 'No' }} 
                                @if($medical->drink) ({{ $medical->drink }}) @endif
                            </p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Medication:</strong>
                            <p>{{ $medical->medication ? 'Yes' : 'No' }} 
                                @if($medical->dose) ({{ $medical->dose }}) @endif
                            </p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Allergy:</strong>
                            <p>{{ $medical->allergy ? 'Yes' : 'No' }} 
                                @if($medical->kind) ({{ $medical->kind }}) @endif
                            </p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Reaction:</strong>
                            <p>{{ $medical->reaction ? 'Yes' : 'No' }} 
                                @if($medical->reaction_detail) ({{ $medical->reaction_detail }}) @endif
                            </p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Illness:</strong>
                            <p>{{ $medical->illness }}</p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Doctor:</strong>
                            <p>{{ $medical->doctor }}</p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Signature Date:</strong>
                            <p>{{ $medical->signature_date }}</p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Signature:</strong>
                            <!-- <p>{{ $medical->signature }}</p> -->
                            @if($medical->signature)
                                <img src="{{ $medical->signature }}" alt="Signature" style="border:1px solid #000; max-width:100%; height:auto;">
                            @else
                                <p>-</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <!-- Input Fields -->
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Diseases</span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        @php
                            $conditions = [
                                'Prescription Glasses' => $history->prescription,
                                'Contact Lenses' => $history->contact_lenses,
                                'Eye Problem' => $history->eye_problem,
                                'Hay Fever' => $history->hay_fever,
                                'Sinusitis' => $history->sinusitis,
                                'Nose/Throat Issues' => $history->nose_throat,
                                'Headache' => $history->headache,
                                'Migraine' => $history->migraine,
                                'Fainting' => $history->fainting,
                                'Convulsions' => $history->convulsions,
                                'Concussion' => $history->concussion,
                                'Sleepwalking' => $history->sleepwalking,
                                'Depression' => $history->depression,
                                'Mental Illness' => $history->mental_illness,
                                'Coughing Blood' => $history->coughing_blood,
                                'Chronic Cough' => $history->chronic_cough,
                                'Tuberculosis (TB)' => $history->tb,
                                'Pneumothorax' => $history->pneumothorax,
                                'Chest Colds' => $history->chest_colds,
                                'Asthma' => $history->asthma,
                                'Puffer Use' => $history->puffer,
                                'Other Chest Problem' => $history->other_chest,
                                'Operation' => $history->operation,
                                'Indigestion' => $history->indigestion,
                                'Vomiting Blood' => $history->vomiting_blood,
                                'Recurrent Vomiting' => $history->recurrent_vomiting,
                                'Jaundice' => $history->jaundice,
                                'Malaria' => $history->malaria,
                                'Weight Loss' => $history->weight_loss,
                                'AMS (Altitude Sickness)' => $history->ams,
                                'HAPE' => $history->hape,
                                'HACE' => $history->hace,
                                'Frostbite' => $history->frostbite,
                                'Heart Disease' => $history->heart_disease,
                                'Abnormal Blood Test' => $history->abnormal_blood_test,
                                'High Blood Pressure' => $history->high_blood_pressure,
                                'Rheumatic Fever' => $history->rheumatic_fever,
                                'Chest Discomfort' => $history->chest_discomfort,
                                'Shortness of Breath' => $history->shortness_breath,
                                'Bronchitis / Pneumonia' => $history->bronchitis_pneumonia,
                                'Pleurisy' => $history->pleurisy,
                                'Hernia' => $history->hernia,
                                'Joint Injury' => $history->joint_injury,
                                'Fractures' => $history->fractures,
                                'Paralysis' => $history->paralysis,
                                'Kidney/Bladder Problem' => $history->kidney_bladder,
                                'Chronic Disease' => $history->chronic_disease,
                                'Syphilis' => $history->syphilis,
                                'HIV' => $history->hiv,
                                'Hepatitis B/C' => $history->hepatitis_bc,
                                'Diabetes' => $history->diabetes,
                                'Blood Disease' => $history->blood_disease,
                                'Operations' => $history->operations,
                                'Hospitalized Before' => $history->hospital,
                                'Life Insurance Rejected' => $history->life_insurance_rejected,
                                'Job/License Refused' => $history->job_or_license_refused,
                                'Unable to Work' => $history->unable_to_work,
                                'Pregnant' => $history->pregnant,
                            ];
                        @endphp
                        
                        @foreach($conditions as $label => $value)
                            <div class="col-md-4 mb-3">
                                <strong>{{ $label }}:</strong> 
                                @if($value)
                                    <span class="badge bg-success">Yes</span>
                                @else
                                    <span class="badge bg-danger">No</span>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <!-- Input Fields -->
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Doctor Review</span>
                </div>
                <div class="panel-body">
                    <!-- Row 1 -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label><strong>Practitioner:</strong></label>
                            <p>{{ $doctor->practitioner ?? '-' }}</p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Participant:</strong></label>
                            <p>{{ $doctor->participant ?? '-' }}</p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Age:</strong></label>
                            <p>{{ $doctor->age ?? '-' }}</p>
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label><strong>Examine Date:</strong></label>
                            <p>{{ $doctor->examine_date ?? '-' }}</p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Current Condition:</strong></label>
                            <p>
                                @if($doctor->current)
                                    <span class="label label-success">Yes</span>
                                @else
                                    <span class="label label-danger">No</span>
                                @endif
                            </p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Height:</strong></label>
                            <p>{{ $doctor->height ?? '-' }}</p>
                        </div>
                    </div>

                    <!-- Row 3 -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label><strong>Weight:</strong></label>
                            <p>{{ $doctor->weight ?? '-' }}</p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Blood Pressure:</strong></label>
                            <p>{{ $doctor->pressure ?? '-' }}</p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Pulse:</strong></label>
                            <p>{{ $doctor->pulse ?? '-' }}</p>
                        </div>
                    </div>

                    <!-- Row 4 -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label><strong>Respiratory:</strong></label>
                            <p>{{ $doctor->respiratory ?? '-' }}</p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Physical:</strong></label>
                            <p>{{ $doctor->physical ?? '-' }}</p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Mental:</strong></label>
                            <p>{{ $doctor->mental ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label><strong>Impression:</strong></label>
                            <p>{{ $doctor->impression ?? '-' }}</p>
                        </div>
                    </div>

                    <h4 class="text-muted">Examiner Information</h4>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label><strong>Examiner:</strong></label>
                            <p>{{ $doctor->examiner ?? '-' }}</p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Title:</strong></label>
                            <p>{{ $doctor->title ?? '-' }}</p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Location:</strong></label>
                            <p>{{ $doctor->location ?? '-' }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label><strong>Contact:</strong></label>
                            <p>{{ $doctor->contact ?? '-' }}</p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Email:</strong></label>
                            <p>{{ $doctor->doc_email ?? '-' }}</p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Signature Date:</strong></label>
                            <p>{{ $doctor->doc_sign_date ?? '-' }}</p>
                        </div>
                        
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label><strong>Doctor Signature:</strong></label>
                            <!-- <p>{{ $doctor->doctor_signature ?? '-' }}</p> -->
                            @if($doctor->doctor_signature)
                                <img src="{{ $doctor->doctor_signature }}" alt="Signature" style="border:1px solid #000; max-width:100%; height:auto;">
                            @else
                                <p>-</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection