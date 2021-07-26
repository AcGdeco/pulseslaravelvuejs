<?php $__env->startSection('title', 'Modificar Estoque'); ?>
<?php $__env->startSection('content'); ?>
    <br><br><br><br><br><br>
    <?php if(!empty($msg) && $msg == "Produto Excluído"): ?>
        <div class = "msgCadastrado" ><?php echo e($msg); ?></div>
    <?php elseif(!empty($msg)): ?>
        <div class = "msgErro" ><?php echo e($msg); ?></div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainalternativa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dashboard\LaravelVueJS\laravelvue\resources\views/produtoexcluido.blade.php ENDPATH**/ ?>