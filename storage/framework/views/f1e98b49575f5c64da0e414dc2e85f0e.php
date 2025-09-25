
<?php $__env->startSection('title','Accident Waiver Detail'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <a href="<?php echo e(route('admin.accident')); ?>" class="btn btn-primary btn-sm">Back</a> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <!-- Input Fields -->
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">Accident Waiver</span>
            </div>
            <div class="panel-body">
                <!-- Row 1 -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label><strong>Name:</strong></label>
                        <p><?php echo e($waiver->name ?? '-'); ?></p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Full Name:</strong></label>
                        <p><?php echo e($waiver->full_name ?? '-'); ?></p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Package:</strong></label>
                        <p><?php echo e($waiver->package ?? '-'); ?></p>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label><strong>Duration:</strong></label>
                        <p><?php echo e($waiver->duration ?? '-'); ?></p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Email:</strong></label>
                        <p><?php echo e($waiver->email ?? '-'); ?></p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Emergency Contact Name:</strong></label>
                        <p><?php echo e($waiver->ec_name ?? '-'); ?></p>
                    </div>
                </div>

                <!-- Row 3 -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label><strong>Emergency Contact Relation:</strong></label>
                        <p><?php echo e($waiver->ec_relation ?? '-'); ?></p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Emergency Contact Number:</strong></label>
                        <p><?php echo e($waiver->ec_number ?? '-'); ?></p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Emergency Contact Email:</strong></label>
                        <p><?php echo e($waiver->ec_email ?? '-'); ?></p>
                    </div>
                </div>

                <!-- Row 4 -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label><strong>Signature Date:</strong></label>
                        <p><?php echo e($waiver->sign_date ?? '-'); ?></p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Witness Name:</strong></label>
                        <p><?php echo e($waiver->witness_name ?? '-'); ?></p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Witness Date:</strong></label>
                        <p><?php echo e($waiver->witness_date ?? '-'); ?></p>
                    </div>
                </div>

                <!-- Row 5 -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label><strong> Signature:</strong></label>
                        <?php if($waiver->signature): ?>
                            <img src="<?php echo e($waiver->signature); ?>" alt="Signature" style="border:1px solid #000; max-width:100%; height:auto;">
                        <?php else: ?>
                            <p>-</p>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Witness Signature:</strong></label>
                        <?php if($waiver->witness_signature): ?>
                            <img src="<?php echo e($waiver->witness_signature); ?>" alt="Witness Signature" style="border:1px solid #000; max-width:100%; height:auto;">
                        <?php else: ?>
                            <p>-</p>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-4">
                        <!-- keep symmetry -->
                        <p>&nbsp;</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\seven_summit\resources\views/admin/forms/accident-waiver-detail.blade.php ENDPATH**/ ?>