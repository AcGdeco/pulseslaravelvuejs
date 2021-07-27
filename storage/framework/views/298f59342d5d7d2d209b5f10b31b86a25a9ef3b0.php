<?php $__env->startSection('title', 'HOME'); ?>
<?php $__env->startSection('content'); ?>
    <br><br><br><br><br><br>
    <form action="/qtdatualizada" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <dar-baixa :produtos=<?php echo e($produtos); ?>></dar-baixa>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dashboard\LaravelVueJS\laravelvue\resources\views/darbaixa.blade.php ENDPATH**/ ?>