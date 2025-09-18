
<?php $__env->startSection('title', ''); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <a href="<?php echo e(route('expedition.index')); ?>" class="btn btn-primary btn-sm">List</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <form class="form-horizontal" role="form" action="<?php echo e(route('expedition.update', $data->id)); ?>" method="post" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <?php echo method_field('PUT'); ?>
        <div class="col-md-9">
            <!-- Input Fields -->
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Edit Expedition </span>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-3 control-label"> Title </label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="text" id="title" name="title" class="form-control"
                                    value="<?php echo e($data->title); ?>" />
                                <input type="hidden" id="uri" name="uri" value="<?php echo e($data->uri); ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-3 control-label">Sub Title</label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <textarea type="text" id="sub_title" name="sub_title"
                                    class="form-control"><?php echo e($data->sub_title); ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-3 control-label"> Content</label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <textarea type="text" id="content" name="content"
                                    class="form-control my-editor"><?php echo e($data->content); ?></textarea>
                            </div>
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label"> Banner</label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                 <input type="file" name="banner" />
                                 <?php if($data->banner): ?>
                                <img src="<?php echo e(asset('uploads/original/' . $data->banner)); ?>" width="100%" />
                                 <?php endif; ?>
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
                                    value="<?php echo e($data->meta_keyword); ?>" />
                            </div>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="col-lg-12">
                            <div class="bs-component">
                                <textarea class="form-control" id="textArea3" name="meta_description" rows="3"
                                    placeholder="Meta Description"><?php echo e($data->meta_description); ?></textarea>
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
                            value="<?php echo e($data->ordering); ?>" />
                    </label>
                </div>

                <div class="sid_bvijay mb10">
                    <h4> Thumbnail </h4>
                    <div class="hd_show_con">
                        <div id="xedit" class="bs-component">
                            <input type="file" name="thumbnail" />
                        </div>
                        <?php if($data->thumbnail): ?>
                            <span class="thumb<?php echo e($data->id); ?>">
                                <br>
                                <img src="<?php echo e(asset('uploads/original/' . $data->thumbnail)); ?>" width="100%" />
                               
                            </span>
                        <?php endif; ?>
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

        $('.thumbdelete').on('click', function(e) {
            e.preventDefault();
            if (!confirm('Are you sure to delete?')) return false;
            var csrf = $('meta[name="csrf-token"]').attr('content');
            var str = $(this).attr('href');
            var id = str.slice(1);
            var url = "<?php echo e(route('delete-expedition-thumb', ':id')); ?>";
            url = url.replace(':id', id);
            $.ajax({
                type: 'delete',
                url: url,
                data: {
                    _token: csrf
                },
                success: function(data) {
                    $('span.thumb' + id).remove();
                },
                error: function(data) {
                    alert(data + 'Error!');
                }
            });
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sevensummittreks/public_html/resources/views/admin/expeditions/edit.blade.php ENDPATH**/ ?>