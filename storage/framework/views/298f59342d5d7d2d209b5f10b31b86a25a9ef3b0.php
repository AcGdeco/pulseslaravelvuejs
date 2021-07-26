<?php $__env->startSection('title', 'HOME'); ?>
<?php $__env->startSection('content'); ?>
    <br><br><br><br><br><br>
    <div class = "flex" >
        <form action="/qtdatualizada" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <table class = "novo" >
          <tr>
            <td class = "titulo" colspan = "3" >
              &equiv; Adicionar Qtd. / Dar Baixa
            </td>
          </tr>
          <tr>
            <td style = "padding:10px;" colspan = "3" >
              <a href = "/" class = "avoltar"><span class = "voltar" >&lt; Voltar</span></a>
              </td>
            </tr>
          <tr>
            <td class = "tipoum">
              NOME / SKU / QTD. ESTOQUE<span class = "corvermelha" >*</span>
            </td>
            <td class = "tipoum" >
              QUANTIDADE
              <span class = "corvermelha" >*</span><br>
              <span style = "font-size:12px" >Valores negativos irão retirar, positivos incrementar</span>
            </td>
          </tr>
          <tr>
            <td class = "tipodois" >
              <select name = "produtos" id = "produtos">
                <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value = '<?php echo e($produto->id); ?>'><?php echo e($produto->nome); ?> / <?php echo e($produto->sku); ?> / <?php echo e($produto->qtd); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </td>
            <td class = "tipodois" >
              <input type = "number" name = "qtd" id = "qtd"/>
            </td>
          </tr>
          <tr>
            <td class = "paddingdez" colspan = "3" align="right" >
                <input type="submit" class="botao" value="Salvar">
            </td>
          </tr>
        </table>
        </form>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dashboard\LaravelVueJS\laravelvue\resources\views/darbaixa.blade.php ENDPATH**/ ?>