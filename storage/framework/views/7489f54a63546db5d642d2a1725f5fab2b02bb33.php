<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <header>
        <div class = "divMenu" >
            <nav class = "nav" >
                <ul class="menu">
                    <li><a href="/" class = "liMenu" >LOGIN</a></li>

                        <?php if(!empty(session()->get('logado')) && session()->get('logado') == "sim"){ ?>

                        <li><a href="/listaprodutos" class = "liMenu" >MODIFICAR ESTOQUE</a></li>
                        <li><a href="darbaixa.php" class = "liMenu" >ADICIONAR QTD/ DAR BAIXA</a></li>
                        <li><a href="" class = "liMenu" >RELATÓRIOS</a>
                            <ul>
                                <li class = "liMenuNone" ><a href="relatorio.php">ESTOQUE</a></li>
                                <li class = "liMenuNone" ><a href="relatorioDois.php">BAIXAS / INCREMENTOS</a></li>
                            </ul>
                        </li>

                        <?php } ?>

                </ul>
            </nav>
        </div>
    </header>
    <div id="app">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\dashboard\LaravelVueJS\laravelvue\resources\views/layouts/mainalternativa.blade.php ENDPATH**/ ?>