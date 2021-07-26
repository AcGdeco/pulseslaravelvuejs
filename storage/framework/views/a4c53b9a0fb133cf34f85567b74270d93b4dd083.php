<?php
session(['logado' => 'sim']);
?>

<?php $__env->startSection('title', 'LOGIN BD'); ?>
<?php $__env->startSection('content'); ?>
        <loginbd-componente></loginbd-componente>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dashboard\LaravelVueJS\laravelvue\resources\views/loginBD.blade.php ENDPATH**/ ?>