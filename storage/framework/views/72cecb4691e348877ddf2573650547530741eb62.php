<?php $__env->startSection('title', 'Modificar Estoque'); ?>
<?php $__env->startSection('content'); ?>
    <br><br><br><br><br><br>
    <?php if(!empty($msg) && $msg == "Produto Excluído"): ?>
        <div class = "msgCadastrado" ><?php echo e($msg); ?></div>
    <?php elseif(!empty($msg)): ?>
        <div class = "msgErro" ><?php echo e($msg); ?></div>
    <?php endif; ?>
    <lista-produtos :produtos=<?php echo e($produtos); ?>></lista-produtos>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dashboard\LaravelVueJS\laravelvue\resources\views/listaprodutos.blade.php ENDPATH**/ ?>