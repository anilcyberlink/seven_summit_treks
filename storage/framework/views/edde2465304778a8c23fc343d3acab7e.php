
<?php $__env->startSection('title','Medical Assessment Detail'); ?>
<?php $__env->startSection('breadcrumb'); ?>
<a href="<?php echo e(route('admin.medical')); ?>" class="btn btn-primary btn-sm">Back</a> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

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
                            <p><?php echo e($medical->fullname); ?></p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Birth Date:</strong>
                            <p><?php echo e($medical->bdate); ?></p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Address:</strong>
                            <p><?php echo e($medical->address); ?></p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Phone:</strong>
                            <p><?php echo e($medical->phone); ?></p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Email:</strong>
                            <p><?php echo e($medical->email); ?></p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Gender:</strong>
                            <p>
                                <?php echo e($medical->gender); ?>

                                <?php if($medical->gender === 'other' && $medical->other_gender): ?>
                                    (<?php echo e($medical->other_gender); ?>)
                                <?php endif; ?>
                            </p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Exercise:</strong>
                            <p><?php echo e($medical->exercise ? 'Yes' : 'No'); ?> 
                                <?php if($medical->frequency): ?> (<?php echo e($medical->frequency); ?>) <?php endif; ?>
                            </p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Smoke:</strong>
                            <p><?php echo e($medical->smoke ? 'Yes' : 'No'); ?></p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Alcohol:</strong>
                            <p><?php echo e($medical->alcohol ? 'Yes' : 'No'); ?> 
                                <?php if($medical->drink): ?> (<?php echo e($medical->drink); ?>) <?php endif; ?>
                            </p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Medication:</strong>
                            <p><?php echo e($medical->medication ? 'Yes' : 'No'); ?> 
                                <?php if($medical->dose): ?> (<?php echo e($medical->dose); ?>) <?php endif; ?>
                            </p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Allergy:</strong>
                            <p><?php echo e($medical->allergy ? 'Yes' : 'No'); ?> 
                                <?php if($medical->kind): ?> (<?php echo e($medical->kind); ?>) <?php endif; ?>
                            </p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Reaction:</strong>
                            <p><?php echo e($medical->reaction ? 'Yes' : 'No'); ?> 
                                <?php if($medical->reaction_detail): ?> (<?php echo e($medical->reaction_detail); ?>) <?php endif; ?>
                            </p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Illness:</strong>
                            <p><?php echo e($medical->illness); ?></p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Doctor:</strong>
                            <p><?php echo e($medical->doctor); ?></p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Signature Date:</strong>
                            <p><?php echo e($medical->signature_date); ?></p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <strong>Signature:</strong>
                            <!-- <p><?php echo e($medical->signature); ?></p> -->
                            <?php if($medical->signature): ?>
                                <img src="<?php echo e($medical->signature); ?>" alt="Signature" style="border:1px solid #000; max-width:100%; height:auto;">
                            <?php else: ?>
                                <p>-</p>
                            <?php endif; ?>
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
                        <?php
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
                        ?>
                        
                        <?php $__currentLoopData = $conditions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4 mb-3">
                                <strong><?php echo e($label); ?>:</strong> 
                                <?php if($value): ?>
                                    <span class="badge bg-success">Yes</span>
                                <?php else: ?>
                                    <span class="badge bg-danger">No</span>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <p><?php echo e($doctor->practitioner ?? '-'); ?></p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Participant:</strong></label>
                            <p><?php echo e($doctor->participant ?? '-'); ?></p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Age:</strong></label>
                            <p><?php echo e($doctor->age ?? '-'); ?></p>
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label><strong>Examine Date:</strong></label>
                            <p><?php echo e($doctor->examine_date ?? '-'); ?></p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Current Condition:</strong></label>
                            <p>
                                <?php if($doctor->current): ?>
                                    <span class="label label-success">Yes</span>
                                <?php else: ?>
                                    <span class="label label-danger">No</span>
                                <?php endif; ?>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Height:</strong></label>
                            <p><?php echo e($doctor->height ?? '-'); ?></p>
                        </div>
                    </div>

                    <!-- Row 3 -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label><strong>Weight:</strong></label>
                            <p><?php echo e($doctor->weight ?? '-'); ?></p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Blood Pressure:</strong></label>
                            <p><?php echo e($doctor->pressure ?? '-'); ?></p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Pulse:</strong></label>
                            <p><?php echo e($doctor->pulse ?? '-'); ?></p>
                        </div>
                    </div>

                    <!-- Row 4 -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label><strong>Respiratory:</strong></label>
                            <p><?php echo e($doctor->respiratory ?? '-'); ?></p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Physical:</strong></label>
                            <p><?php echo e($doctor->physical ?? '-'); ?></p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Mental:</strong></label>
                            <p><?php echo e($doctor->mental ?? '-'); ?></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label><strong>Impression:</strong></label>
                            <p><?php echo e($doctor->impression ?? '-'); ?></p>
                        </div>
                    </div>

                    <h4 class="text-muted">Examiner Information</h4>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label><strong>Examiner:</strong></label>
                            <p><?php echo e($doctor->examiner ?? '-'); ?></p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Title:</strong></label>
                            <p><?php echo e($doctor->title ?? '-'); ?></p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Location:</strong></label>
                            <p><?php echo e($doctor->location ?? '-'); ?></p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label><strong>Contact:</strong></label>
                            <p><?php echo e($doctor->contact ?? '-'); ?></p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Email:</strong></label>
                            <p><?php echo e($doctor->doc_email ?? '-'); ?></p>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Signature Date:</strong></label>
                            <p><?php echo e($doctor->doc_sign_date ?? '-'); ?></p>
                        </div>
                        
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label><strong>Doctor Signature:</strong></label>
                            <!-- <p><?php echo e($doctor->doctor_signature ?? '-'); ?></p> -->
                            <?php if($doctor->doctor_signature): ?>
                                <img src="<?php echo e($doctor->doctor_signature); ?>" alt="Signature" style="border:1px solid #000; max-width:100%; height:auto;">
                            <?php else: ?>
                                <p>-</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\seven_summit\resources\views/admin/forms/medical-assessment-detail.blade.php ENDPATH**/ ?>