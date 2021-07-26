<?php $__env->startSection('title', 'LOGIN BD'); ?>
<?php $__env->startSection('content'); ?>
<br><br><br><br>
<form action="/atualizarproduto" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php if(!empty($msg) && $msg == "Produto atualizado"): ?>
        <div class = "msgCadastrado" ><?php echo e($msg); ?></div>
    <?php elseif(!empty($msg)): ?>
        <div class = "msgErro" ><?php echo e($msg); ?></div>
    <?php endif; ?>
    <editar-produto id=<?php echo e($produto->id); ?> nome=<?php echo e($produto->nome); ?> sku=<?php echo e($produto->sku); ?> qtd=<?php echo e($produto->qtd); ?>></editar-produto>
</form>
<?php $__env->stopSection(); ?>








<?php echo $__env->make('layouts.mainalternativa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dashboard\LaravelVueJS\laravelvue\resources\views/editar.blade.php ENDPATH**/ ?>