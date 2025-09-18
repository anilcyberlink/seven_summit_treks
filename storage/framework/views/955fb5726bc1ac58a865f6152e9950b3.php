
<?php $__env->startSection('title', $data->post_title); ?>
<?php $__env->startSection('brief', $data->post_excerpt); ?>
<?php $__env->startSection('thumbnail', $data->page_thumbnail); ?>
<?php $__env->startSection('meta_keyword', $data->meta_keyword); ?>
<?php $__env->startSection('meta_description', $data->meta_description); ?>
<?php $__env->startSection('content'); ?>
    <div style="height: 77px; background: var(--bg-black);"></div>
    <section class="uk-section">
        <div class="uk-container">
            <div class="uk-text-center">
                <h1 class="uk-text-bolder  uk-margin-bottom  uk-text-center " style="color: #D62A34;" uk-scrollspy="cls: uk-animation-slide-left-small;   delay: 600; repeat: false;">
                    <?php echo e($data->post_title); ?>

                </h1>
                <?php if($data->page_banner): ?>
                    <div class="uk-media-350 uk-border-rounded" uk-lightbox uk-scrollspy="cls: uk-animation-slide-left-small;   delay: 700; repeat: false;">
                        <a href="<?php echo e(asset('uploads/banners/'. $data->page_banner)); ?>"> 
                            <img src="<?php echo e(asset('uploads/banners/'. $data->page_banner)); ?>" alt="<?php echo e($data->post_title); ?>" class="uk-effect-1"> 
                        </a>
                    </div>
                    <small><i class="uk-text-bold"><?php echo e($data->banner_caption); ?></i></small>
                <?php endif; ?>
            </div>
            <?php if($data_child->count() > 0): ?>
                <?php if($data_child[0]): ?>
                    <div class="uk-child-width-1-2@m uk-grid uk-margin-large-top uk-margin-large-bottom uk-flex uk-flex-middle uk-img-effect" uk-scrollspy="cls: uk-animation-slide-left-small; target:div, p,img;  delay: 100; repeat: false;">
                        <div class="uk-margin-bottom">
                            <?php echo $data_child[0]->post_excerpt; ?>

                        </div>
                        <div class="uk-text-center">
                            <div class="uk-media-300 uk-border-rounded uk-img-effect" uk-lightbox>
                                <a href="<?php echo e(asset('uploads/medium/'. $data_child[0]->page_thumbnail)); ?>"> 
                                    
                                <img src="<?php echo e(asset('uploads/medium/'. $data_child[0]->page_thumbnail)); ?>" alt="<?php echo e($data_child[0]->post_title); ?>" class="uk-effect-1"> </a>
                            </div>
                             <small><i class="uk-text-bold"><?php echo e($data_child[0]->thumbnail_caption); ?></i></small>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if($data_child[1]): ?>
                    <div class="uk-child-width-1-2@m uk-grid uk-margin-large-top uk-margin-large-bottom uk-flex uk-flex-middle uk-img-effect" uk-scrollspy="cls: uk-animation-slide-left-small; target:div, p,img;  delay: 100; repeat: false;">
                        <div class="uk-text-center">
                            <div class="uk-media-350 uk-border-rounded" uk-lightbox>
                                <a href="<?php echo e(asset('uploads/medium/'. $data_child[1]->page_thumbnail)); ?>">
                                    <img src="<?php echo e(asset('uploads/medium/'. $data_child[1]->page_thumbnail)); ?>" alt="<?php echo e($data_child[1]->post_title); ?>" class="uk-effect-1">
                                </a>
                            </div>
                             <small><i class="uk-text-bold"><?php echo e($data_child[1]->thumbnail_caption); ?></i></small>
                        </div>
                        <div class="uk-margin-top" uk-scrollspy="cls: uk-animation-slide-left-small; target:div, p,img;  delay: 100; repeat: false;">
                         <?php echo $data_child[1]->post_excerpt; ?>

                         </div>
                    </div>
                <?php endif; ?>
                <?php if($data_child[2]): ?>
                    <div class="uk-text-center">
                        <div class="uk-media-400 uk-border-rounded uk-img-effect uk-text-center" uk-lightbox uk-scrollspy="cls: uk-animation-slide-left-small; target:div, p,img;  delay: 100; repeat: false;">
                            <a href="<?php echo e(asset('uploads/medium/'. $data_child[2]->page_thumbnail)); ?>"> 
                                <img src="<?php echo e(asset('uploads/medium/'. $data_child[2]->page_thumbnail)); ?>" alt="<?php echo e($data_child[2]->post_title); ?>" class="uk-effect-1"> 
                            </a>
                        </div>
                         <small><i class="uk-text-bold"><?php echo e($data_child[2]->thumbnail_caption); ?></i></small>
                    </div>
                     <div class="uk-margin-top" uk-scrollspy="cls: uk-animation-slide-left-small; target:div, p,img;  delay: 100; repeat: false;">
                        <?php echo $data_child[2]->post_excerpt; ?>

                      </div>
                <?php endif; ?>
                <?php if($data_child[3]): ?>
                    <div class="uk-child-width-1-2@m uk-grid uk-margin-large-top uk-margin-large-bottom uk-img-effect" uk-scrollspy="cls: uk-animation-slide-left-small; target:div, p,img;  delay: 100; repeat: false;">
                        <div>
                            <?php echo $data_child[3]->post_excerpt; ?>

                        </div>
                        <div class="uk-text-center">
                            <div class="uk-media-350 uk-border-rounded" uk-lightbox>
                                <a href="<?php echo e(asset('uploads/medium/'. $data_child[3]->page_thumbnail)); ?>">
                                    <img src="<?php echo e(asset('uploads/medium/'. $data_child[3]->page_thumbnail)); ?>" alt="<?php echo e($data_child[3]->post_title); ?>" class="uk-effect-1">
                                </a>
                            </div>
                             <small><i class="uk-text-bold"><?php echo e($data_child[3]->thumbnail_caption); ?></i></small>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if($data_child[4]): ?>
                    <div uk-scrollspy="cls: uk-animation-slide-left-small; target:div, p,img;  delay: 100; repeat: false;">
                        <?php echo $data_child[4]->post_excerpt; ?>

                    </div>
                    <div class="uk-text-center">
                        <div class="uk-media-350 uk-border-rounded uk-img-effect uk-text-center" uk-lightbox uk-scrollspy="cls: uk-animation-slide-left-small; target:div, p,img;  delay: 100; repeat: false;">
                            <a href="<?php echo e(asset('uploads/medium/'. $data_child[4]->page_thumbnail)); ?>"> 
                                <img src="<?php echo e(asset('uploads/medium/'. $data_child[4]->page_thumbnail)); ?>" alt="<?php echo e($data_child[4]->post_title); ?>" class="uk-effect-1"> 
                            </a>
                        </div>
                        <small><i class="uk-text-bold"><?php echo e($data_child[4]->thumbnail_caption); ?></i></small>
                    </div>
                <?php endif; ?>
                <?php if($data_child[5]): ?>
                    <div class="uk-margin-large-top uk-margin-large-bottom uk-img-effect" uk-scrollspy="cls: uk-animation-slide-left-small; target:div, p,img;  delay: 100; repeat: false;">
                        <h1 class="uk-h2 theme-font-medium-bold " style="color: #D62A34;"><?php echo e($data_child[5]->post_title); ?></h1>
                        <?php echo $data_child[5]->post_excerpt; ?>

                    </div>
                    <div class="uk-text-center">
                        <div class="uk-media-350 uk-border-rounded uk-img-effect uk-text-center" uk-lightbox uk-scrollspy="cls: uk-animation-slide-left-small; target:div, p,img;  delay: 100; repeat: false;">
                            <a href="<?php echo e(asset('uploads/medium/'. $data_child[5]->page_thumbnail)); ?>"> 
                                <img src="<?php echo e(asset('uploads/medium/'. $data_child[5]->page_thumbnail)); ?>" alt="<?php echo e($data_child[5]->post_title); ?>" class="uk-effect-1"> 
                            </a>   
                        </div>
                         <small><i class="uk-text-bold"><?php echo e($data_child[4]->thumbnail_caption); ?></i></small>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <div class="uk-margin-large-top uk-flex uk-flex-center">
                <div class="uk-button uk-button-primary title" style="font-size: 20px; cursor: default!important; background: #D62A34;">
                    <style>
                        .title *{
                            margin:0!important;
                        }
                    </style>
                    <?php echo $data->associated_title; ?>

                </div>
            </div>
            <div class="uk-grid uk-grid-collapse uk-flex-center uk-margin-top">
                <p>For more details about the technology, visit:</p>
                <a href="<?php echo e($data->external_link); ?>" class="uk-margin-small-left" ><b style="color: #D62A34;"><?php echo e($data->external_link); ?></b></a>
                <a href="<?php echo e($data->external_link); ?>" class="uk-margin-small-left"><b style="color: #D62A34;"><?php echo e($data->sub_title); ?></b></a>
            </div>
            
    
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sevensummittreks/public_html/resources/views/themes/default/template-partnership.blade.php ENDPATH**/ ?>