
<?php $__env->startSection('title','Create User'); ?>
<?php $__env->startSection('breadcrumb'); ?>
<a href="<?php echo e(route('subscriber.index')); ?>" class="btn btn-primary btn-sm">List</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
    <h1>Add User </h1>

 <form action="<?php echo e(route('subscriber.submit')); ?>" method="POST">
     <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" class="form-control" name="full_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
 <br/>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sevensummittreks/public_html/resources/views/admin/user-create.blade.php ENDPATH**/ ?>