
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Formulário Cliente</title>
    <meta name="viewport" content="width=device-width, inicial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../estilo.css">
</head>
<body>
<div class="campo-form">    
<form action="../banco/conn_cli.php" method="POST">
    <h1>Formulário de Inscrição do Cliente</h1>
    <div class="campo-input">
        <input type="text" name="nome" placeholder="Nome" style="text-align: center">	
    </div>
    <div class="campo-input">
        <input type="text" name="endereco" placeholder="Endereço" style="text-align: center">
    </div>
    <div class="campo-input">
        <input type="text" name="email" placeholder="Email" style="text-align: center">
    </div>
    <div class="campo-input">
        <input type="text" name="nasc" placeholder="Data de Nascimento" style="text-align: center">
    </div>
    <div class="campo-input">
        <input type="text" name="celular" placeholder="Celular" style="text-align: center">
    </div>
    <div class="campo-input">
        <input type="text" name="rg" placeholder="RG" style="text-align: center">
    </div>
    <div class="campo-input">
        <input type="text" name="cpf" placeholder="CPF" style="text-align: center">
    </div>
    <div>
        <input class="button" type="submit" name="Enviar" value="Enviar">   
    </div>
    <div class="voltar">
        <a href="../login.php"><div class="button" style="width: 110px;">Voltar</div></a>
    </div>
</form>
</div>
</body>
</html>