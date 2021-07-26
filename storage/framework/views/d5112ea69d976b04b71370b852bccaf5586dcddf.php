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
        echo "<option value = '$datasemformatoUnicas[$i]' >$datasUnicas[$i]</option>";
    }
    echo "</select>";
    echo "</div>";
    ?>
    <div class = 'flex' style = 'padding:5px;'>
        <input type="submit" class="botao" style = "background-color:orange;" value="Buscar">
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dashboard\LaravelVueJS\laravelvue\resources\views/relatorio.blade.php ENDPATH**/ ?>