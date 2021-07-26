<?php $__env->startSection('title', 'Novo Produto'); ?>
<?php $__env->startSection('content'); ?>
    <br><br><br><br><br><br>
    <form action="/produtos" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php if(!empty($msg) && $msg == "Produto cadastrado"): ?>
            <div class = "msgCadastrado" ><?php echo e($msg); ?></div>
        <?php elseif(!empty($msg)): ?>
            <div class = "msgErro" ><?php echo e($msg); ?></div>
        <?php endif; ?>
        <novo-produto></novo-produto>
    </form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dashboard\LaravelVueJS\laravelvue\resources\views/novoproduto.blade.php ENDPATH**/ ?>