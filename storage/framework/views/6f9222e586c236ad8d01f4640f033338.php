
<?php $__env->startSection('breadcrumb'); ?>
    <a href="<?php echo e(route('admin.tripdocs.index', Request::segment(2))); ?>" class="btn btn-primary btn-sm">List</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="alert" id="message" style="display: none"></div>

    <form class="form-horizontal" id="upload_image1" role="form"
        action="<?php echo e(route('admin.tripdocs.store', Request::segment(2))); ?>" method="post" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <div class="col-md-8">
            <!-- Input Fields -->
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Add Document</span>
                </div>
                <div class="panel-body">
                    <input type="hidden" name="trip_id" value="<?php echo e($trip); ?>">
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label"> Title </label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="text" name="title" id="title" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label"> Ordering </label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="number" name="ordering" id="ordering" value="<?php echo e($ordering); ?>"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label"> Document </label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="file" name="document" id="document" class="form-control" />
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label"> External Link </label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="text" name="external_link" id="external_link" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label"> </label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="submit" name="submit" value="Submit">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <aside class="col-lg-4 ">
 <!-- menu quick links -->

        <div class="admin-form">
          <div class="sid_bvijay mb10">
            <h4> Thumbnail </h4>
            <div class="hd_show_con">
              <div id="xedit-demo">
               <input type="file" name="thumbnail" />
             </div>
           </div>
         </div>
       </div>
 
</aside>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('libraries'); ?>
    <script type="text/javascript">
        $('document').ready(function() {

        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sevensummittreks/public_html/resources/views/admin/trip-docs/create.blade.php ENDPATH**/ ?>