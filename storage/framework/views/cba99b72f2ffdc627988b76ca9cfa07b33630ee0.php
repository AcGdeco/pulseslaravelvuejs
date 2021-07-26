<?php $__env->startSection('title', 'Salvar Produto'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo csrf_field(); ?>
    <br><br><br><br><br><br>
    Salvando produtos
    <?php echo e($nomeVazio); ?>  <?php echo e($skuVazio); ?>  <?php echo e($qtdVazio); ?> <?php echo e($msg); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dashboard\LaravelVueJS\laravelvue\resources\views/salvarproduto.blade.php ENDPATH**/ ?>