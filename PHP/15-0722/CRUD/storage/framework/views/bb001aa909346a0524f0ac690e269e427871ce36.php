;
<?php $__env->startSection('name'); ?>
    <?php echo e($posts->id); ?> <br>
    <?php echo e($posts->title); ?> <br>
    <?php echo e($posts->description); ?> <br>
    <?php echo $posts->image_path; ?> <br>
    <?php echo $posts->content; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>