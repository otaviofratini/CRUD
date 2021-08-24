<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Formulário Produto</title>
    <meta name="viewport" content="width=device-width, inicial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../estilo.css">
</head>
<body>
<div class="campo-form">    
<form action="../banco/conn_pro.php" method="POST">
    <h1>Formulário de Cadastro de produtos</h1>
    <div class="campo-input">
        <input type="text" name="nome" placeholder="Nome" style="text-align: center">	
    </div>
    <div class="campo-input">
        <input type="text" name="preco" placeholder="Preço de venda" style="text-align: center">
    </div>
    <div class="campo-input">
        <input type="text" name="descri" placeholder="Descrição do produto" style="text-align: center">
    </div>
    <div class="campo-input">
        <input type="text" name="categoria" placeholder="Categoria" style="text-align: center">
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