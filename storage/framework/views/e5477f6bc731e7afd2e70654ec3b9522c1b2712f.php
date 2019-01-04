 


<?php $__env->startSection('content'); ?>
    <p>This the appended to the master sidebar
    </p>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>