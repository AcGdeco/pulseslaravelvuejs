<?php $__env->startSection('title', 'Modificar Estoque'); ?>
<?php $__env->startSection('content'); ?>
    <br><br><br><br><br><br>
    <?php if(!empty($msg) && $msg == "Produto Excluído"): ?>
        <div class = "msgCadastrado" ><?php echo e($msg); ?></div>
    <?php elseif(!empty($msg)): ?>
        <div class = "msgErro" ><?php echo e($msg); ?></div>
    <?php endif; ?>
    <div class = "flex" >
        <table class = "lista" >
            <tr>
                <td class = "tituloPrincipal" >
                    &equiv; Gerenciamento de Produtos
                </td>
            </tr>
            <tr>
                <td class = "botoes" >
                    <span class = "voltar" onclick="window.open(document.referrer,'_self');">&lt; Voltar</span>
                    <a href = "/novoproduto" style = "text-decoration:none;" ><span class = "botaoNovo" > + Novo </span></a>
                </td>
            </tr>
            <tr>
                <td style = "padding:5px;" >
                    <table style = "border:1px solid gray;border-collapse:collapse;" >
                        <tr>
                            <td style = "border:solid 1px gray;padding:10px;font-weight:bolder;background-color:white;width:50px;" >
                                ID
                            </td>
                            <td style = "border:solid 1px gray;padding:10px;font-weight:bolder;background-color:white;width:200px;" >
                                NOME
                            </td>
                            <td style = "border:solid 1px gray;padding:10px;font-weight:bolder;background-color:white;width:200px;" >
                                SKU
                            </td>
                            <td style = "border:solid 1px gray;padding:10px;font-weight:bolder;background-color:white;width:135px;" >
                                QUANTIDADE
                            </td>
                            <td style = "border:solid 1px gray;padding:10px;font-weight:bolder;background-color:white;width:135px;" >
                                EDITAR
                            </td>
                            <td style = "border:solid 1px gray;padding:10px;font-weight:bolder;background-color:white;width:135px;" >
                                EXCLUIR
                            </td>
                        </tr>
                    </table>

                    <table style = "border:1px solid gray;border-collapse:collapse;" id="lista" >
                        <tr>
                            <td>

                            </td>
                        </tr>
                        <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr id = "<?php echo e($produto->id); ?>" >
                                <td style = 'border:solid 1px gray;padding:10px;width:50px;' ><?php echo e($produto->id); ?></td>
                                <td style = 'border:solid 1px gray;padding:10px;width:200px;' ><?php echo e($produto->nome); ?></td>
                                <td style = 'border:solid 1px gray;padding:10px;width:200px;' ><?php echo e($produto->sku); ?></td>
                                <td style = 'border:solid 1px gray;padding:10px;width:135px;' ><?php echo e($produto->qtd); ?></td>
                                <td style = 'border:solid 1px gray;padding:10px;width:135px;text-align:center;' ><a class="botao" style = "background-color:orange;text-align:center;" href = "/editar/<?php echo e($produto->id); ?>" >Editar</a></td>
                                <td style = 'border:solid 1px gray;padding:10px;width:135px;text-align:center;' ><a class="botao" style = "background-color:red;" href = "/excluir/<?php echo e($produto->id); ?>" >Excluir</a></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </td>
            </tr>
            <tr>
                <td style = "padding:20px;" >
                    <span style = "float:left;font-size:10px;" id="myDIVdois" ></span>
                    <span style = "float:right;" id="myDIV" ></span>
                </td>
            </tr>
        </table>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dashboard\LaravelVueJSGit\pulseslaravelvuejs\resources\views/listaprodutos.blade.php ENDPATH**/ ?>