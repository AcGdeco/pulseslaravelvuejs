<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <div class = "divMenu" >
            <nav class = "nav" >
                <ul class="menu">
                    <li><a href="/" class = "liMenu" >LOGIN</a></li>

                        <?php if(!empty(session()->get('logado')) && session()->get('logado') == "sim"){ ?>

                        <li><a href="/listaprodutos" class = "liMenu" >MODIFICAR ESTOQUE</a></li>
                        <li><a href="/darbaixa" class = "liMenu" >ADICIONAR QTD/ DAR BAIXA</a></li>
                        <li><a href="/relatorio" class = "liMenu" >RELATÓRIO</a></li>

                        <?php } ?>

                </ul>
            </nav>
        </div>
    </header>
    <div id="app">
        @yield('content')
    </div>
</body>
</html>

