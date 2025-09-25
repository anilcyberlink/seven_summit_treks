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
                    <!--<img src="<?php echo e(asset('themes-assets/images/logo.svg')); ?>" style="width: 25%"/>-->
                    <h3><a href="https://sevensummittreks.com/" target="blank">Seven Summit Treks</a></h3>
                </div>
            </center>
            <h3>Medical Assessment Details:</h3>
            <table cellpadding="8" cellspacing="0" border="1" style="border-collapse: collapse; width:100%;">
                <tr bgcolor="#ddd">
                    <td><strong>Full Name</strong></td>
                    <td><?php echo e($medicalData->fullname); ?></td>
                </tr>
                <tr>
                    <td><strong>Date of Birth</strong></td>
                    <td><?php echo e($medicalData->bdate); ?></td>
                </tr>
                <tr>
                    <td><strong>Address</strong></td>
                    <td><?php echo e($medicalData->address); ?></td>
                </tr>
                <tr>
                    <td><strong>Phone</strong></td>
                    <td><?php echo e($medicalData->phone); ?></td>
                </tr>
                <tr>
                    <td><strong>Gender</strong></td>
                    <td>
                        <?php echo e(ucfirst($medicalData->gender)); ?>

                        <?php if($medicalData->gender === 'other' && $medicalData->other_gender): ?>
                            (<?php echo e($medicalData->other_gender); ?>)
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Exercise</strong></td>
                    <td>
                        <?php echo e($medicalData->exercise ? 'Yes' : 'No'); ?>

                        <?php if($medicalData->exercise && $medicalData->frequency): ?>
                            (<?php echo e($medicalData->frequency); ?>)
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Smoke</strong></td>
                    <td><?php echo e($medicalData->smoke ? 'Yes' : 'No'); ?></td>
                </tr>
                <tr>
                    <td><strong>Alcohol</strong></td>
                    <td>
                        <?php echo e($medicalData->alcohol ? 'Yes' : 'No'); ?>

                        <?php if($medicalData->alcohol && $medicalData->drink): ?>
                            (<?php echo e($medicalData->drink); ?>)
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Medication</strong></td>
                    <td>
                        <?php echo e($medicalData->medication ? 'Yes' : 'No'); ?>

                        <?php if($medicalData->medication && $medicalData->dose): ?>
                            (<?php echo e($medicalData->dose); ?>)
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Allergy</strong></td>
                    <td>
                        <?php echo e($medicalData->allergy ? 'Yes' : 'No'); ?>

                        <?php if($medicalData->allergy && $medicalData->kind): ?>
                            (<?php echo e($medicalData->kind); ?>)
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Reaction</strong></td>
                    <td>
                        <?php echo e($medicalData->reaction ? 'Yes' : 'No'); ?>

                        <?php if($medicalData->reaction && $medicalData->reaction_detail): ?>
                            (<?php echo e($medicalData->reaction_detail); ?>)
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Illness</strong></td>
                    <td><?php echo e($medicalData->illness); ?></td>
                </tr>
                <tr>
                    <td><strong>Doctor</strong></td>
                    <td><?php echo e($medicalData->doctor); ?></td>
                </tr>
                <tr>
                    <td><strong>Signature Date</strong></td>
                    <td><?php echo e($medicalData->signature_date); ?></td>
                </tr>
                <tr>
                    <td><strong>Signature</strong></td>
                    <td>
                        <?php if($medicalData->signature): ?>
                            <img src="<?php echo e($medicalData->signature); ?>" alt="Doctor Signature" style="max-width:200px; border:1px solid #000;">
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>
                </tr>
            </table> <br>

            <H3>Doctor Review</H3>
            <table cellpadding="8" cellspacing="0" border="1" style="border-collapse: collapse; width:100%;">
                <tr bgcolor="#ddd">
                    <td><strong>Practitioner</strong></td>
                    <td><?php echo e($doctorReview->practitioner); ?></td>
                </tr>
                <tr>
                    <td><strong>Participant</strong></td>
                    <td><?php echo e($doctorReview->participant); ?></td>
                </tr>
                <tr>
                    <td><strong>Age</strong></td>
                    <td><?php echo e($doctorReview->age); ?></td>
                </tr>
                <tr>
                    <td><strong>Examine Date</strong></td>
                    <td><?php echo e($doctorReview->examine_date); ?></td>
                </tr>
                <tr>
                    <td><strong>Height</strong></td>
                    <td><?php echo e($doctorReview->height); ?></td>
                </tr>
                <tr>
                    <td><strong>Weight</strong></td>
                    <td><?php echo e($doctorReview->weight); ?></td>
                </tr>
                <tr>
                    <td><strong>Blood Pressure</strong></td>
                    <td><?php echo e($doctorReview->pressure); ?></td>
                </tr>
                <tr>
                    <td><strong>Pulse</strong></td>
                    <td><?php echo e($doctorReview->pulse); ?></td>
                </tr>
                <tr>
                    <td><strong>Respiratory Rate</strong></td>
                    <td><?php echo e($doctorReview->respiratory); ?></td>
                </tr>
                <tr>
                    <td><strong>Physical Condition</strong></td>
                    <td><?php echo e($doctorReview->physical); ?></td>
                </tr>
                <tr>
                    <td><strong>Mental Condition</strong></td>
                    <td><?php echo e($doctorReview->mental); ?></td>
                </tr>
                <tr>
                    <td><strong>Currently Fit</strong></td>
                    <td><?php echo e($doctorReview->current ? 'Yes' : 'No'); ?></td>
                </tr>
                <tr>
                    <td><strong>Impression</strong></td>
                    <td><?php echo e($doctorReview->impression); ?></td>
                </tr>
                <tr>
                    <td><strong>Examiner</strong></td>
                    <td><?php echo e($doctorReview->examiner); ?></td>
                </tr>
                <tr>
                    <td><strong>Location</strong></td>
                    <td><?php echo e($doctorReview->location); ?></td>
                </tr>
                <tr>
                    <td><strong>Title</strong></td>
                    <td><?php echo e($doctorReview->title); ?></td>
                </tr>
                <tr>
                    <td><strong>Contact</strong></td>
                    <td><?php echo e($doctorReview->contact); ?></td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td><?php echo e($doctorReview->doc_email); ?></td>
                </tr>
                <tr>
                    <td><strong>Signature Date</strong></td>
                    <td><?php echo e($doctorReview->doc_sign_date); ?></td>
                </tr>
                <tr>
                    <td><strong>Doctor Signature</strong></td>
                    <td>
                        <?php if($doctorReview->doctor_signature): ?>
                            <img src="<?php echo e($doctorReview->doctor_signature); ?>" alt="Doctor Signature" style="max-width:200px; border:1px solid #000;">
                        <?php else: ?>
                            -
                        <?php endif; ?>
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
                    
                    <tr><td>Prescription Glasses</td><td><?php echo e($medicalHistory->prescription ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Contact Lenses</td><td><?php echo e($medicalHistory->contact_lenses ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Eye Problem</td><td><?php echo e($medicalHistory->eye_problem ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Headache</td><td><?php echo e($medicalHistory->headache ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Migraine</td><td><?php echo e($medicalHistory->migraine ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Fainting</td><td><?php echo e($medicalHistory->fainting ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Convulsions</td><td><?php echo e($medicalHistory->convulsions ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Concussion</td><td><?php echo e($medicalHistory->concussion ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Sleepwalking</td><td><?php echo e($medicalHistory->sleepwalking ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Depression</td><td><?php echo e($medicalHistory->depression ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Mental Illness</td><td><?php echo e($medicalHistory->mental_illness ? 'Yes' : 'No'); ?></td></tr>

                    
                    <tr><td>Coughing Blood</td><td><?php echo e($medicalHistory->coughing_blood ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Chronic Cough</td><td><?php echo e($medicalHistory->chronic_cough ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Tuberculosis (TB)</td><td><?php echo e($medicalHistory->tb ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Pneumothorax</td><td><?php echo e($medicalHistory->pneumothorax ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Asthma</td><td><?php echo e($medicalHistory->asthma ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Other Chest Issues</td><td><?php echo e($medicalHistory->other_chest ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Bronchitis / Pneumonia</td><td><?php echo e($medicalHistory->bronchitis_pneumonia ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Pleurisy</td><td><?php echo e($medicalHistory->pleurisy ? 'Yes' : 'No'); ?></td></tr>

                    
                    <tr><td>Heart Disease</td><td><?php echo e($medicalHistory->heart_disease ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>High Blood Pressure</td><td><?php echo e($medicalHistory->high_blood_pressure ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Chest Discomfort</td><td><?php echo e($medicalHistory->chest_discomfort ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Shortness of Breath</td><td><?php echo e($medicalHistory->shortness_breath ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Abnormal Blood Test</td><td><?php echo e($medicalHistory->abnormal_blood_test ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Rheumatic Fever</td><td><?php echo e($medicalHistory->rheumatic_fever ? 'Yes' : 'No'); ?></td></tr>

                    
                    <tr><td>Indigestion</td><td><?php echo e($medicalHistory->indigestion ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Vomiting Blood</td><td><?php echo e($medicalHistory->vomiting_blood ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Recurrent Vomiting</td><td><?php echo e($medicalHistory->recurrent_vomiting ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Jaundice</td><td><?php echo e($medicalHistory->jaundice ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Malaria</td><td><?php echo e($medicalHistory->malaria ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Kidney / Bladder Problems</td><td><?php echo e($medicalHistory->kidney_bladder ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Chronic Disease</td><td><?php echo e($medicalHistory->chronic_disease ? 'Yes' : 'No'); ?></td></tr>

                    
                    <tr><td>Hernia</td><td><?php echo e($medicalHistory->hernia ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Joint Injury</td><td><?php echo e($medicalHistory->joint_injury ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Fractures</td><td><?php echo e($medicalHistory->fractures ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Paralysis</td><td><?php echo e($medicalHistory->paralysis ? 'Yes' : 'No'); ?></td></tr>

                    
                    <tr><td>Syphilis</td><td><?php echo e($medicalHistory->syphilis ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>HIV</td><td><?php echo e($medicalHistory->hiv ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Hepatitis B/C</td><td><?php echo e($medicalHistory->hepatitis_bc ? 'Yes' : 'No'); ?></td></tr>

                    
                    <tr><td>Operations</td><td><?php echo e($medicalHistory->operations ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Hospitalization</td><td><?php echo e($medicalHistory->hospital ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Life Insurance Rejected</td><td><?php echo e($medicalHistory->life_insurance_rejected ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Job or License Refused</td><td><?php echo e($medicalHistory->job_or_license_refused ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Unable to Work</td><td><?php echo e($medicalHistory->unable_to_work ? 'Yes' : 'No'); ?></td></tr>
                    <tr><td>Pregnant</td><td><?php echo e($medicalHistory->pregnant === 1 ? 'Yes' : 'No'); ?></td></tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
<?php /**PATH D:\xampp\htdocs\seven_summit\resources\views/emails/admin-medical.blade.php ENDPATH**/ ?>