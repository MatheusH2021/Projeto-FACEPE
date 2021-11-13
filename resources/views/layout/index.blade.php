<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Refeição</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: img/bc.jpg">
    <header class="container-fluid">
            <img src="img/logo.png" alt="" style="padding-top:0;width:auto; height: 20vh;">
            <h1 id="nome">Sua Refeição</h1>             
    </header>
    <nav style="background-color:#FF1D23"class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a style="color: #C1A56D"class="navbar-brand" href="/">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a style="color: #C1A56D" class="nav-link active" aria-current="page" href="/cardapio">Cardápio</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #C1A56D" class="nav-link" href="/cadastro">Cadastrar Cardápio</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #C1A56D" class="nav-link" href="/pedido">Fazer Pedido</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        @yield('conteudo')
    </main>
    <footer class="container-fluid">
        <div style="text-align: center; padding-top: 10px"class="row">
            <div class="col-4">
                <span id="fS">Redes Sociais</span>
                <br>
                <a href="http://www.instagram.com" target="_blank">Instagram</a>
                <br>
                <a href="http://www.facebook.com" target="_blank">Facebook</a>

            </div>
            <div class="col-4">
                <span id="fS">Contato</span>
                <br>
                <a href="tel:+">(87) 9 9999-8888</a>
                <br>
                <a href="tel:+">(87) 3333-7777</a>
            </div>
            <div class="col-4">
                <span id="fS">Endereço</span>
                <br>
                <p style="color: #C1A56D; padding-top: 10px">Garanhuns-PE</p>
            </div>
        </div>
    </footer>
</body>
</html>