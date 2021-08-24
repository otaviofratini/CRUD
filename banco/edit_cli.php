<?php
   include_once('connect.php');
    $conexao = new Conexao();
    $con = $conexao->conectar();
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $id = filter_input(INPUT_GET,'cliID',FILTER_SANITIZE_NUMBER_INT);

    $edit_cli = "SELECT * FROM cliente WHERE cliID = '$id'";
    $result_cli = mysqli_query($con,$edit_cli);
    $row_cli = mysqli_fetch_assoc($result_cli);
    
}else{
    include_once('connect.php');
    $conexao = new Conexao();
    $con = $conexao->conectar();
   
    $id = $_POST['cliID'];
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $nasc = $_POST['nasc'];
    $cel = $_POST['celular'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];

    $result_cli = "UPDATE cliente SET 
                cliNome = '$nome', 
                cliEnd='$endereco', 
                cliEmail='$email', 
                cliNasc='$nasc',
                cliCel = '$cel',
                cliRg = '$rg',
                cliCpf = '$cpf'
                WHERE cliID=$id";
    $result_cli = mysqli_query($con, $result_cli);
    if(mysqli_affected_rows($con)){
        echo"<script>
        alert('Dados atualizados com sucesso na tabela...');
        window.location.href='listar_cli.php';
        </script>
        ";

    }else{
        echo"<script>
        alert('Erro ao atualizar os dados na tabela...');
        windows.location.href='listar_cli.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Formulário cliente</title>
    <meta name="viewport" content="width=device-width, inicial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../estilo.css">
</head>
<body>
<div class="campo-form">    
<form action="edit_cli.php" method="POST">
    <h1>Formulário de Edição do cliente</h1>
    <input type="hidden" name="cliID" value="<?php echo $row_cli['cliID']; ?>" >
    
    <div class="campo-input">
        <input type="text" name="nome" placeholder="Nome" value="<?php echo $row_cli['cliNome']; ?>" style="text-align: center">	
    </div>
    <div class="campo-input">
        <input type="text" name="endereco" placeholder="Endereço" value="<?php echo $row_cli['cliEnd']; ?>" style="text-align: center">
    </div>
    <div class="campo-input">  
        <input type="text" name="email" placeholder="Email" value="<?php echo $row_cli['cliEmail']; ?>" style="text-align: center">
    </div>
    <div class="campo-input">
        <input type="text" name="nasc" placeholder="Data de Nascimento" value="<?php echo $row_cli['cliNasc']; ?>" style="text-align: center">
    </div>
    <div class="campo-input">
        <input type="text" name="celular" placeholder="Celular" value="<?php echo $row_cli['cliCel']; ?>" style="text-align: center">
    </div>
    <div class="campo-input">
        <input type="text" name="rg" placeholder="RG" value="<?php echo $row_cli['cliRg']; ?>" style="text-align: center">
    </div>
    <div class="campo-input">
        <input type="text" name="cpf" placeholder="CPF" value="<?php echo $row_cli['cliCpf']; ?>" style="text-align: center">
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
    