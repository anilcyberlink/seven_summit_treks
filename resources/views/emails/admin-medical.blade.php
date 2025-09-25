<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Seven Summit Treks</title>
        <style>
            table {
                border-collapse: collapse;
                width:100%;
            }
            table, th, td {
                border: 1px solid #ddd;
                padding:8px;
            }
        </style>
    </head>
    <body style="font-family: sans-serif">
        <div style="margin:0 auto; max-width:700px; width:100%;">
            <center>
                <div style="background:#FFF; padding:8px 0px; margin-bottom:5px;">
                    <!--<img src="{{ asset('themes-assets/images/logo.svg') }}" style="width: 25%"/>-->
                    <h3><a href="https://sevensummittreks.com/" target="blank">Seven Summit Treks</a></h3>
                </div>
            </center>
            <h3>Medical Assessment Details:</h3>
            <table cellpadding="8" cellspacing="0" border="1" style="border-collapse: collapse; width:100%;">
                <tr bgcolor="#ddd">
                    <td><strong>Full Name</strong></td>
                    <td>{{ $medicalData->fullname }}</td>
                </tr>
                <tr>
                    <td><strong>Date of Birth</strong></td>
                    <td>{{ $medicalData->bdate }}</td>
                </tr>
                <tr>
                    <td><strong>Address</strong></td>
                    <td>{{ $medicalData->address }}</td>
                </tr>
                <tr>
                    <td><strong>Phone</strong></td>
                    <td>{{ $medicalData->phone }}</td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td>{{ $medicalData->email }}</td>
                </tr>
                <tr>
                    <td><strong>Gender</strong></td>
                    <td>
                        {{ ucfirst($medicalData->gender) }}
                        @if($medicalData->gender === 'other' && $medicalData->other_gender)
                            ({{ $medicalData->other_gender }})
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><strong>Exercise</strong></td>
                    <td>
                        {{ $medicalData->exercise ? 'Yes' : 'No' }}
                        @if($medicalData->exercise && $medicalData->frequency)
                            ({{ $medicalData->frequency }})
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><strong>Smoke</strong></td>
                    <td>{{ $medicalData->smoke ? 'Yes' : 'No' }}</td>
                </tr>
                <tr>
                    <td><strong>Alcohol</strong></td>
                    <td>
                        {{ $medicalData->alcohol ? 'Yes' : 'No' }}
                        @if($medicalData->alcohol && $medicalData->drink)
                            ({{ $medicalData->drink }})
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><strong>Medication</strong></td>
                    <td>
                        {{ $medicalData->medication ? 'Yes' : 'No' }}
                        @if($medicalData->medication && $medicalData->dose)
                            ({{ $medicalData->dose }})
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><strong>Allergy</strong></td>
                    <td>
                        {{ $medicalData->allergy ? 'Yes' : 'No' }}
                        @if($medicalData->allergy && $medicalData->kind)
                            ({{ $medicalData->kind }})
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><strong>Reaction</strong></td>
                    <td>
                        {{ $medicalData->reaction ? 'Yes' : 'No' }}
                        @if($medicalData->reaction && $medicalData->reaction_detail)
                            ({{ $medicalData->reaction_detail }})
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><strong>Illness</strong></td>
                    <td>{{ $medicalData->illness }}</td>
                </tr>
                <tr>
                    <td><strong>Doctor</strong></td>
                    <td>{{ $medicalData->doctor }}</td>
                </tr>
                <tr>
                    <td><strong>Signature Date</strong></td>
                    <td>{{ $medicalData->signature_date }}</td>
                </tr>
                <tr>
                    <td><strong>Signature</strong></td>
                    <td>
                        @if($medicalData->signature)
                            <img src="{{ $medicalData->signature }}" alt="Doctor Signature" style="max-width:200px; border:1px solid #000;">
                        @else
                            -
                        @endif
                    </td>
                </tr>
            </table> <br>

            <H3>Doctor Review</H3>
            <table cellpadding="8" cellspacing="0" border="1" style="border-collapse: collapse; width:100%;">
                <tr bgcolor="#ddd">
                    <td><strong>Practitioner</strong></td>
                    <td>{{ $doctorReview->practitioner }}</td>
                </tr>
                <tr>
                    <td><strong>Participant</strong></td>
                    <td>{{ $doctorReview->participant }}</td>
                </tr>
                <tr>
                    <td><strong>Age</strong></td>
                    <td>{{ $doctorReview->age }}</td>
                </tr>
                <tr>
                    <td><strong>Examine Date</strong></td>
                    <td>{{ $doctorReview->examine_date }}</td>
                </tr>
                <tr>
                    <td><strong>Height</strong></td>
                    <td>{{ $doctorReview->height }}</td>
                </tr>
                <tr>
                    <td><strong>Weight</strong></td>
                    <td>{{ $doctorReview->weight }}</td>
                </tr>
                <tr>
                    <td><strong>Blood Pressure</strong></td>
                    <td>{{ $doctorReview->pressure }}</td>
                </tr>
                <tr>
                    <td><strong>Pulse</strong></td>
                    <td>{{ $doctorReview->pulse }}</td>
                </tr>
                <tr>
                    <td><strong>Respiratory Rate</strong></td>
                    <td>{{ $doctorReview->respiratory }}</td>
                </tr>
                <tr>
                    <td><strong>Physical Condition</strong></td>
                    <td>{{ $doctorReview->physical }}</td>
                </tr>
                <tr>
                    <td><strong>Mental Condition</strong></td>
                    <td>{{ $doctorReview->mental }}</td>
                </tr>
                <tr>
                    <td><strong>Currently Fit</strong></td>
                    <td>{{ $doctorReview->current ? 'Yes' : 'No' }}</td>
                </tr>
                <tr>
                    <td><strong>Impression</strong></td>
                    <td>{{ $doctorReview->impression }}</td>
                </tr>
                <tr>
                    <td><strong>Examiner</strong></td>
                    <td>{{ $doctorReview->examiner }}</td>
                </tr>
                <tr>
                    <td><strong>Location</strong></td>
                    <td>{{ $doctorReview->location }}</td>
                </tr>
                <tr>
                    <td><strong>Title</strong></td>
                    <td>{{ $doctorReview->title }}</td>
                </tr>
                <tr>
                    <td><strong>Contact</strong></td>
                    <td>{{ $doctorReview->contact }}</td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td>{{ $doctorReview->doc_email }}</td>
                </tr>
                <tr>
                    <td><strong>Signature Date</strong></td>
                    <td>{{ $doctorReview->doc_sign_date }}</td>
                </tr>
                <tr>
                    <td><strong>Doctor Signature</strong></td>
                    <td>
                        @if($doctorReview->doctor_signature)
                            <img src="{{ $doctorReview->doctor_signature }}" alt="Doctor Signature" style="max-width:200px; border:1px solid #000;">
                        @else
                            -
                        @endif
                    </td>
                </tr>
            </table>

            <h3 style="margin-top:20px;">Medical History</h3>

            <table border="1" cellpadding="6" cellspacing="0" width="100%" style="border-collapse:collapse; font-size:14px;">
                <thead>
                    <tr style="background:#f5f5f5; text-align:left;">
                        <th style="width:60%;">Condition</th>
                        <th style="width:40%;">Status</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Eyes & Neurological --}}
                    <tr><td>Prescription Glasses</td><td>{{ $medicalHistory->prescription ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Contact Lenses</td><td>{{ $medicalHistory->contact_lenses ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Eye Problem</td><td>{{ $medicalHistory->eye_problem ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Headache</td><td>{{ $medicalHistory->headache ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Migraine</td><td>{{ $medicalHistory->migraine ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Fainting</td><td>{{ $medicalHistory->fainting ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Convulsions</td><td>{{ $medicalHistory->convulsions ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Concussion</td><td>{{ $medicalHistory->concussion ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Sleepwalking</td><td>{{ $medicalHistory->sleepwalking ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Depression</td><td>{{ $medicalHistory->depression ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Mental Illness</td><td>{{ $medicalHistory->mental_illness ? 'Yes' : 'No' }}</td></tr>

                    {{-- Chest & Lungs --}}
                    <tr><td>Coughing Blood</td><td>{{ $medicalHistory->coughing_blood ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Chronic Cough</td><td>{{ $medicalHistory->chronic_cough ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Tuberculosis (TB)</td><td>{{ $medicalHistory->tb ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Pneumothorax</td><td>{{ $medicalHistory->pneumothorax ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Asthma</td><td>{{ $medicalHistory->asthma ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Other Chest Issues</td><td>{{ $medicalHistory->other_chest ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Bronchitis / Pneumonia</td><td>{{ $medicalHistory->bronchitis_pneumonia ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Pleurisy</td><td>{{ $medicalHistory->pleurisy ? 'Yes' : 'No' }}</td></tr>

                    {{-- Heart & Circulation --}}
                    <tr><td>Heart Disease</td><td>{{ $medicalHistory->heart_disease ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>High Blood Pressure</td><td>{{ $medicalHistory->high_blood_pressure ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Chest Discomfort</td><td>{{ $medicalHistory->chest_discomfort ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Shortness of Breath</td><td>{{ $medicalHistory->shortness_breath ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Abnormal Blood Test</td><td>{{ $medicalHistory->abnormal_blood_test ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Rheumatic Fever</td><td>{{ $medicalHistory->rheumatic_fever ? 'Yes' : 'No' }}</td></tr>

                    {{-- General / Digestive --}}
                    <tr><td>Indigestion</td><td>{{ $medicalHistory->indigestion ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Vomiting Blood</td><td>{{ $medicalHistory->vomiting_blood ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Recurrent Vomiting</td><td>{{ $medicalHistory->recurrent_vomiting ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Jaundice</td><td>{{ $medicalHistory->jaundice ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Malaria</td><td>{{ $medicalHistory->malaria ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Kidney / Bladder Problems</td><td>{{ $medicalHistory->kidney_bladder ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Chronic Disease</td><td>{{ $medicalHistory->chronic_disease ? 'Yes' : 'No' }}</td></tr>

                    {{-- Musculoskeletal --}}
                    <tr><td>Hernia</td><td>{{ $medicalHistory->hernia ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Joint Injury</td><td>{{ $medicalHistory->joint_injury ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Fractures</td><td>{{ $medicalHistory->fractures ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Paralysis</td><td>{{ $medicalHistory->paralysis ? 'Yes' : 'No' }}</td></tr>

                    {{-- Infectious Diseases --}}
                    <tr><td>Syphilis</td><td>{{ $medicalHistory->syphilis ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>HIV</td><td>{{ $medicalHistory->hiv ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Hepatitis B/C</td><td>{{ $medicalHistory->hepatitis_bc ? 'Yes' : 'No' }}</td></tr>

                    {{-- Other --}}
                    <tr><td>Operations</td><td>{{ $medicalHistory->operations ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Hospitalization</td><td>{{ $medicalHistory->hospital ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Life Insurance Rejected</td><td>{{ $medicalHistory->life_insurance_rejected ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Job or License Refused</td><td>{{ $medicalHistory->job_or_license_refused ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Unable to Work</td><td>{{ $medicalHistory->unable_to_work ? 'Yes' : 'No' }}</td></tr>
                    <tr><td>Pregnant</td><td>{{ $medicalHistory->pregnant === 1 ? 'Yes' : 'No' }}</td></tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
