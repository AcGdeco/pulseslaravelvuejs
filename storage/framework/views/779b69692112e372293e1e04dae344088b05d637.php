<?php $__env->startSection('title', 'Relatório'); ?>
<?php $__env->startSection('content'); ?>
    <br><br><br><br><br><br>
    <form action="/relatoriofiltro" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php
    $contador = 0;
    foreach($datas as $data){
       $dataformatada = date( "d/m/Y", strtotime( $data->created_at ) );
       $datasemformato = $data->created_at;

       if($contador == 0){
        $datasUnicas[$contador] = $dataformatada;
        $datasemformatoUnicas[$contador] = $datasemformato;
        $contador += 1;
       }else{
        $dataJaExiste = "não";
        for($i=0;$i<$contador;$i++){
            if($datasUnicas[$i] == $dataformatada){
                $dataJaExiste = "sim";
            }
        }
        if($dataJaExiste == "não"){
            $datasUnicas[$contador] = $dataformatada;
            $datasemformatoUnicas[$contador] = $datasemformato;
            $contador += 1;
        }
       }
    }
    echo "<div class = 'flex'>";
    echo "<select name = 'datas' >";
        echo "<option value = 'TODAS AS DATAS'>TODAS AS DATAS</option>";
    for($i=0;$i<$contador;$i++){
        $pos = strripos($datasemformatoUnicas[$i], $dataselect);
        if($pos === false){
            echo "<option value = '$datasemformatoUnicas[$i]' >$datasUnicas[$i]</option>";
        }else{
            echo "<option selected value = '$datasemformatoUnicas[$i]' >$datasUnicas[$i]</option>";
        }
    }
    echo "</select>";
    echo "</div>";
    ?>
    <div class = 'flex' style = 'padding:5px;'>
        <input type="submit" class="botao" style = "background-color:orange;" value="Buscar">
    </div>
    </form>
    <div style = "display:flex;justify-content:center;" >
        <table style = "border-collapse:collapse;" >
            <th colspan= "5" style = 'border:solid 1px gray;padding:10px;width:200px;background-color:green;color:white;' >Relatório Baixa / Incremento</th>
            <tr>
                <td style = 'border:solid 1px gray;padding:10px;width:200px;background-color:lightgray;' >NOME</td>
                <td style = 'border:solid 1px gray;padding:10px;width:200px;background-color:lightgray;' >SKU</td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;background-color:lightgray;' >BAIXA / INCRE.</td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;background-color:lightgray;' >DATA</td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;background-color:lightgray;' >MÉTODO</td>
            </tr>
        <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr id = "<?php echo e($produto->id); ?>" >
                <td style = 'border:solid 1px gray;padding:10px;width:200px;' ><?php echo e($produto->nome); ?></td>
                <td style = 'border:solid 1px gray;padding:10px;width:200px;' ><?php echo e($produto->sku); ?></td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;' ><?php echo e($produto->bqtd); ?></td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;' ><?php echo e(date( "d/m/Y", strtotime( $produto->bdata))); ?></td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;' ><?php echo e($produto->metodo); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <br><br>
    <div class = "flex" style="color:red;" >Se as palavras de uma linha da tabela estiverem em vermelho, significa que o produto está com menos de 100 unidades no estoque</div>
    <div style = "display:flex;justify-content:center;" >
        <table style = "border-collapse:collapse;" >
            <th colspan= "5" style = 'border:solid 1px gray;padding:10px;width:200px;background-color:green;color:white;' >Relatório do Estoque Atual</th>
            <tr>
                <td style = 'border:solid 1px gray;padding:10px;width:200px;background-color:lightgray;' >NOME</td>
                <td style = 'border:solid 1px gray;padding:10px;width:200px;background-color:lightgray;' >SKU</td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;background-color:lightgray;' >QUANTIDADE</td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;background-color:lightgray;' >DATA</td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;background-color:lightgray;' >MÉTODO</td>
            </tr>
        <?php $__currentLoopData = $produtostable; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produtotable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($produtotable->qtd < 100): ?>
            <tr id = "<?php echo e($produtotable->id); ?>" style = "color:red;" >
                <td style = 'border:solid 1px gray;padding:10px;width:200px;' ><?php echo e($produtotable->nome); ?></td>
                <td style = 'border:solid 1px gray;padding:10px;width:200px;' ><?php echo e($produtotable->sku); ?></td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;' ><?php echo e($produtotable->qtd); ?></td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;' ><?php echo e(date( "d/m/Y", strtotime( $produtotable->created_at))); ?></td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;' ><?php echo e($produtotable->metodo); ?></td>
            </tr>
        <?php else: ?>
            <tr id = "<?php echo e($produtotable->id); ?>" >
                <td style = 'border:solid 1px gray;padding:10px;width:200px;' ><?php echo e($produtotable->nome); ?></td>
                <td style = 'border:solid 1px gray;padding:10px;width:200px;' ><?php echo e($produtotable->sku); ?></td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;' ><?php echo e($produtotable->qtd); ?></td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;' ><?php echo e(date( "d/m/Y", strtotime( $produtotable->created_at))); ?></td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;' ><?php echo e($produtotable->metodo); ?></td>
            </tr>
        <?php endif; ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dashboard\LaravelVueJS\laravelvue\resources\views/relatoriofiltro.blade.php ENDPATH**/ ?>