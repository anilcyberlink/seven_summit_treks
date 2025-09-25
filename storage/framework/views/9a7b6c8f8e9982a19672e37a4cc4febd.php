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
            <h3>Insurance Details:</h3>
            <table cellpadding="8" cellspacing="0" border="1" style="border-collapse: collapse; width:100%;">
                <tr bgcolor="#ddd">
                    <td><strong>Full Name</strong></td>
                    <td><?php echo e($insurance->full_name); ?></td>
                </tr>
                <tr>
                    <td><strong>Country</strong></td>
                    <td><?php echo e($insurance->country); ?></td>
                </tr>
                <tr>
                    <td><strong>Gender</strong></td>
                    <td><?php echo e($insurance->gender); ?> <?php echo e($insurance->other_gender ? '(' . $insurance->other_gender . ')' : ''); ?></td>
                </tr>
                <tr>
                    <td><strong>Date of Birth</strong></td>
                    <td><?php echo e($insurance->date_of_birth); ?></td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td><?php echo e($insurance->email); ?></td>
                </tr>
                <tr>
                    <td><strong>Phone</strong></td>
                    <td><?php echo e($insurance->phone); ?></td>
                </tr>
                <tr>
                    <td><strong>Address</strong></td>
                    <td><?php echo e($insurance->address); ?></td>
                </tr>
                <tr>
                    <td><strong>Zip Code</strong></td>
                    <td><?php echo e($insurance->zip_code); ?></td>
                </tr>
            </table>
            <div style="display:flex; flex-wrap:wrap; gap:10px;">

                
                <?php if($insurance->second_passport): ?>
                    <?php
                        $ext = pathinfo($insurance->second_passport, PATHINFO_EXTENSION);
                    ?>

                    <?php if(in_array(strtolower($ext), ['jpg','jpeg','png'])): ?>
                        <a href="<?php echo e(asset('storage/insurance/passports/' . $insurance->second_passport)); ?>" target="_blank">
                            <img src="<?php echo e(asset('storage/insurance/passports/' . $insurance->second_passport)); ?>" 
                                alt="Second Passport" style="max-width:150px; border:1px solid #000; border-radius:4px;">
                        </a>
                    <?php elseif(strtolower($ext) === 'pdf'): ?>
                        <label for="">PDF: </label>
                        <a href="<?php echo e(asset('storage/insurance/passports/' . $insurance->second_passport)); ?>" target="_blank">
                            📄 <?php echo e($insurance->second_passport); ?>

                        </a> <br>
                    <?php endif; ?>
                <?php endif; ?>

                
                <?php if($insurance->passports && $insurance->passports->count()): ?>

                    
                    <div class="d-flex flex-wrap gap-3 mb-2">
                        <?php $__currentLoopData = $insurance->passports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $passport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $ext = strtolower(pathinfo($passport->file_name, PATHINFO_EXTENSION));
                            ?>

                            <?php if(in_array($ext, ['jpg','jpeg','png'])): ?>
                                <a href="<?php echo e(asset('storage/insurance/passports/' . $passport->file_name)); ?>" target="_blank">
                                    <img src="<?php echo e(asset('storage/insurance/passports/' . $passport->file_name)); ?>" 
                                        alt="Passport <?php echo e($loop->iteration); ?>" 
                                        style="max-width:150px; border:1px solid #000; border-radius:4px;">
                                </a>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    
                    <div class="mb-2">
                        <?php $__currentLoopData = $insurance->passports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $passport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $ext = strtolower(pathinfo($passport->file_name, PATHINFO_EXTENSION));
                            ?>

                            <?php if($ext === 'pdf'): ?>
                                <label for="">PDF: </label>
                                <a href="<?php echo e(asset('storage/insurance/passports/' . $passport->file_name)); ?>" target="_blank">
                                    📄 <?php echo e($passport->file_name); ?>

                                </a><br>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                <?php endif; ?>


            </div>
        </div>
    </body>
</html>
<?php /**PATH D:\xampp\htdocs\seven_summit\resources\views/emails/admin-insurance.blade.php ENDPATH**/ ?>