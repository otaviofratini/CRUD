<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <title>Loja do Mano Otávio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, inicial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <?php
        if(isset($erro)){
    ?>
    <div>
        <?php echo $erro   ?>
    </div>
    <?php
        }
    ?>
    <div class="corpo">
		<div class="campo-form">
            <form action="login.php" method="POST">
                <h1>BEM VINDO<br>login</h1>
                <div class="campo-input">
                    <input type="text" name="user" placeholder="Nome de usuário" style="text-align: center;">
                </div>
                <div class="campo-input">
                    <input type="password" name="pass" placeholder="Senha" style="text-align: center;">
                </div>
                <div>
                    <a href="visao/form_funcionario.php">Não possui cadastro?</a>
                </div>
                <div style="padding: 30px;">
                    <input class="button" type="submit" name="entrar" value="Entrar">
                </div>
            </form>
        </div>
    </div>	
    <div class="footer">
        <p><i>&copy 2019 Otávio Fratini All Rights Reserved</i></p>
    </div>
</body>   
</html>