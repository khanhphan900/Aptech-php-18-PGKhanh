<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 card-group rounded">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card">
                  <img src="<?php echo $post->image_path; ?>" class="card-img-top" alt="..." width="100%" height="150px">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo e($post->id); ?> - <?php echo e($post->title); ?></h5>
                    <p class="card-text"><?php echo e($post->description); ?></p>
                    <p class="card-text"><?php echo e($post->content); ?></p>
                    <p class="card-text"><small class="text-muted"><?php echo e($post->created_at); ?></small></p>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    
    <div class="d-flex justify-content-center"><?php echo e($posts->links()); ?></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>