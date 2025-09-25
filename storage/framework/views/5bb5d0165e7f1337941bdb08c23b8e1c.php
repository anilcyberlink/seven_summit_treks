
<?php $__env->startSection('title','Insurance Detail'); ?>
<?php $__env->startSection('breadcrumb'); ?>
<a href="<?php echo e(route('admin.insurance')); ?>" class="btn btn-primary btn-sm">Back</a> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="col-md-12">
        <!-- Input Fields -->
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">Detail</span>
            </div>
            <div class="panel-body">
                <!-- Row 1 -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label><strong>Full Name:</strong></label>
                        <p><?php echo e($insurance->full_name ?? '-'); ?></p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Country:</strong></label>
                        <p><?php echo e($insurance->country ?? '-'); ?></p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Gender:</strong></label>
                        <p>
                            <?php if($insurance->gender === 'other'): ?>
                                <?php echo e($insurance->other_gender ?? 'Other'); ?>

                            <?php else: ?>
                                <?php echo e(ucfirst($insurance->gender) ?? '-'); ?>

                            <?php endif; ?>
                        </p>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label><strong>Date of Birth:</strong></label>
                        <p><?php echo e($insurance->date_of_birth ?? '-'); ?></p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Email:</strong></label>
                        <p><?php echo e($insurance->email ?? '-'); ?></p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Phone:</strong></label>
                        <p><?php echo e($insurance->phone ?? '-'); ?></p>
                    </div>
                </div>

                <!-- Row 3 -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label><strong>Address:</strong></label>
                        <p><?php echo e($insurance->address ?? '-'); ?></p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Zip Code:</strong></label>
                        <p><?php echo e($insurance->zip_code ?? '-'); ?></p>
                    </div>
                    <div class="col-md-4">
                        <!-- keep symmetry -->
                        <p>&nbsp;</p>
                    </div>
                </div>

                <!-- Secondary Passport -->
                <!-- <div class="row mb-3">
                    <div class="col-md-12">
                        <label><strong>Secondary Passport: </strong></label><br>
                        <?php if(!empty($insurance->second_passport)): ?>
                            <a href="<?php echo e(asset('storage/insurance/passports/' . $insurance->second_passport)); ?>" target="_blank">
                                <img src="<?php echo e(asset('storage/insurance/passports/' . $insurance->second_passport)); ?>" 
                                    alt="Secondary Passport" 
                                    class="img-thumbnail" 
                                    style="max-height: 150px;">
                            </a>
                        <?php else: ?>
                            <p>-</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label><strong>Uploaded Passports:</strong></label><br>
                        <?php if($passports && $passports->count() > 0): ?>
                            <div class="d-flex flex-wrap gap-3">
                                <?php $__currentLoopData = $passports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $passport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(asset('storage/insurance/passports/' . $passport->file_name)); ?>" target="_blank">
                                        <img src="<?php echo e(asset('storage/insurance/passports/' . $passport->file_name)); ?>" 
                                            alt="Passport Image" 
                                            class="img-thumbnail" 
                                            style="max-height: 150px;">
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php else: ?>
                            <p>-</p>
                        <?php endif; ?>
                    </div>
                </div> -->

                <!-- Secondary Passport -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label><strong>Secondary Passport: </strong></label><br>
                        <?php if(!empty($insurance->second_passport)): ?>
                            <?php
                                $ext = pathinfo($insurance->second_passport, PATHINFO_EXTENSION);
                            ?>

                            <?php if(in_array(strtolower($ext), ['jpg','jpeg','png'])): ?>
                                <a href="<?php echo e(asset('storage/insurance/passports/' . $insurance->second_passport)); ?>" target="_blank">
                                    <img src="<?php echo e(asset('storage/insurance/passports/' . $insurance->second_passport)); ?>" 
                                        alt="Secondary Passport" 
                                        class="img-thumbnail" 
                                        style="max-height: 150px;">
                                </a>
                            <?php elseif(strtolower($ext) === 'pdf'): ?>
                                <a href="<?php echo e(asset('storage/insurance/passports/' . $insurance->second_passport)); ?>" target="_blank">
                                    📄 <?php echo e($insurance->second_passport); ?>

                                </a>
                            <?php endif; ?>
                        <?php else: ?>
                            <p>-</p>
                        <?php endif; ?>
                    </div>
                </div>
                <br>

                <!-- Uploaded Passports -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label><strong>Uploaded Passports:</strong></label><br>
                        <?php if($passports && $passports->count() > 0): ?>
                            
                            <div class="d-flex flex-wrap gap-3 mb-2">
                                <?php $__currentLoopData = $passports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $passport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $ext = strtolower(pathinfo($passport->file_name, PATHINFO_EXTENSION));
                                    ?>

                                    <?php if(in_array($ext, ['jpg','jpeg','png'])): ?>
                                        <a href="<?php echo e(asset('storage/insurance/passports/' . $passport->file_name)); ?>" target="_blank">
                                            <img src="<?php echo e(asset('storage/insurance/passports/' . $passport->file_name)); ?>" 
                                                alt="Passport Image <?php echo e($loop->iteration); ?>" 
                                                class="img-thumbnail" 
                                                style="max-height: 150px;">
                                        </a>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                            
                            <div class="mb-2">
                                <?php $__currentLoopData = $passports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $passport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $ext = strtolower(pathinfo($passport->file_name, PATHINFO_EXTENSION));
                                    ?>

                                    <?php if($ext === 'pdf'): ?>
                                        <a href="<?php echo e(asset('storage/insurance/passports/' . $passport->file_name)); ?>" target="_blank">
                                            📄 <?php echo e($passport->file_name); ?>

                                        </a><br>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                        <?php else: ?>
                            <p>-</p>
                        <?php endif; ?>

                    </div>
                </div>

                
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\seven_summit\resources\views/admin/forms/insurance-detail.blade.php ENDPATH**/ ?>