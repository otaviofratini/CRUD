<?php
    session_start();
    
    if(!isset($_SESSION["usuarioLogado"])){
        header('Location: ../index.php');
    }  
?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, inicial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <nav class="navbar fixed-top navbar-expanded-lg navbar-dark bg-info">
        <a class="navbar-brand h1 mb-0" href="home.php">Loja do Mano Otavio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSite">                
            <ul class="navbar-nav">
            <li class="nav-item  col-md-2">
                    <a class="nav-link" href="visao/form_cliente.php">Cadastrar Cliente</a>
                </li>
                <li class="nav-item col-md-2">
                    <a class="nav-link" href="banco/listar_cli.php">Listar Clientes</a>
                </li>
                <li class="nav-item col-md-2">
                    <a class="nav-link" href="visao/form_funcionario.php">Cadastrar Funcionário</a>
                </li>
                <li class="nav-item col-md-2">
                    <a class="nav-link" href="banco/listar_fun.php">Listar Funcionários</a>
                </li>
                <li class="nav-item col-md-2">
                    <a class="nav-link" href="visao/form_produto.php">Cadastrar Produtos</a>
                </li>
                <li class="nav-item col-md-2">
                    <a class="nav-link" href="banco/listar_pro.php">Listar Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="banco/sair.php">Sair</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="corpo" style="margin-top: 20px; ">
		<div class="campo-form" style="margin-left:200px;">
            <h1>Bem vindo (a) <?php echo $_SESSION["usuarioLogado"]->getNome();  ?></h1>
        </div>
    </div>	
    <div class="footer">
        <p><i>&copy 2019 Otávio Fratini All Rights Reserved</i></p>
    </div>
</body>   
</html>