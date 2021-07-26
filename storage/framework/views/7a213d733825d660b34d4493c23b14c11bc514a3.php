<?php $__env->startSection('title', 'HOME'); ?>
<?php $__env->startSection('content'); ?>
    <br><br><br><br><br><br>
    <?php $__currentLoopData = $logins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $login): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <login-componente login="<?php echo e($login->login); ?>" senha="<?php echo e($login->password); ?>"></login-componente>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dashboard\LaravelVueJS\laravelvue\resources\views/index.blade.php ENDPATH**/ ?>