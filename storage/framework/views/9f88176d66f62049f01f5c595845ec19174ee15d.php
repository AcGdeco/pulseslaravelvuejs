<?php $__env->startSection('title', 'HOME'); ?>
<?php $__env->startSection('content'); ?>
    <br><br><br><br><br><br>
    <div style = "display:flex;justify-content:center;padding:10px;" ><span class = "voltar" onclick="window.open(document.referrer,'_self');">&lt; Voltar</span></div>
    <?php if(!empty($msg) && $msg == "Baixa / incremento cadastrado"): ?>
        <div class = "msgCadastrado" ><?php echo e($msg); ?></div>
    <?php elseif(!empty($msg)): ?>
        <div class = "msgErro" ><?php echo e($msg); ?></div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dashboard\LaravelVueJS\laravelvue\resources\views/qtdatualizada.blade.php ENDPATH**/ ?>