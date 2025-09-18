
<?php $__env->startSection('title', ''); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <a href="<?php echo e(route('expedition.index')); ?>" class="btn btn-primary btn-sm">List</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form class="form-horizontal" role="form" action="<?php echo e(route('expedition.store')); ?>" method="post" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <div class="col-md-9">
            <!-- Input Fields -->
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Add Expedition </span>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label">Title </label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <input type="text" id="title" name="title" class="form-control" />
                                <input type="hidden" id="uri" name="uri" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label">Sub Title</label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <textarea type="text" id="" name="sub_title" class="form-control" placeholder=""></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label"> Content</label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <textarea type="text" id="content" name="content" class="form-control my-editor"> </textarea>
                            </div>
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label"> Banner</label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                 <input type="file" name="banner" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title"> Meta data </span>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <div class="bs-component">
                                <input type="text" name="meta_keyword" class="form-control" placeholder="Meta Keyword"
                                    value="<?php echo e(old('meta_keyword')); ?>" />
                            </div>
                        </div>
                    </div>
        
                    <div class="form-group">
                        <div class="col-lg-12">
                            <div class="bs-component">
                                <textarea class="form-control" id="textArea3" name="meta_description" rows="3"
                                    placeholder="Meta Description"><?php echo e(old('meta_description')); ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="admin-form">
                <div class="sid_bvijay mb10">
                    <div class="hd_show_con">
                        <div class="publice_edi">
                            Status:
                            <a href="avoid:javascript;" data-toggle="collapse" data-target="#publish_1">
                                Active
                            </a>
                        </div>
                    </div>
                    <footer>
                        <div id="publishing-action">
                            <input type="submit" class="btn btn-primary btn-lg" value="Publish" />
                        </div>
                        <div class="clearfix"></div>
                    </footer>
                    <div class="clearfix"></div>
                </div>
                <div class="sid_bvijay mb10">
                    <label class="field">
                        <input type="number" id="ordering" name="ordering" class="form-control"
                            value="<?php echo e($ordering); ?>" />
                    </label>
                </div>

                <div class="sid_bvijay mb10">
                    <h4> Thumbnail </h4>
                    <div class="hd_show_con">
                        <div id="xedit-demo">
                            <input type="file" name="thumbnail" />
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#title').on('keyup', function() {
                var title;
                title = $('#title').val();
                title = title.replace(/[^a-zA-Z0-9 ]+/g, "");
                title = title.replace(/\s+/g, "-");
                $('#uri').val(title);
            });
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sevensummittreks/public_html/resources/views/admin/expeditions/create.blade.php ENDPATH**/ ?>