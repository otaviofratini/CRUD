<?php
   include_once('connect.php');
    $conexao = new Conexao();
    $con = $conexao->conectar();
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $id = filter_input(INPUT_GET,'funId',FILTER_SANITIZE_NUMBER_INT);

    $edit_fun = "SELECT * FROM funcionario WHERE funId = '$id'";
    $result_fun = mysqli_query($con,$edit_fun);
    $row_fun = mysqli_fetch_assoc($result_fun);
    
}else{
    include_once('connect.php');
    $conexao = new Conexao();
    $con = $conexao->conectar();
   
    $id = $_POST['funId'];
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $nasc = $_POST['nasc'];
    $cel = $_POST['celular'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];

    $result_fun = "UPDATE funcionario SET 
                funNome = '$nome', 
                funEnd='$endereco', 
                funEmail='$email', 
                funNasc='$nasc',
                funCelular = '$cel',
                funRg = '$rg',
                funCpf = '$cpf'
                WHERE funId=$id";
    $result_fun = mysqli_query($con, $result_fun);
    if(mysqli_affected_rows($con)){
        echo"<script>
        alert('Dados atualizados com sucesso na tabela...');
        window.location.href='listar_fun.php';
        </script>
        ";

    }else{
        echo"<script>
        alert('Erro ao atualizar os dados na tabela...');
        windows.location.href='listar_fun.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Formulário Funcionário</title>
    <meta name="viewport" content="width=device-width, inicial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../estilo.css">
</head>
<body>
<div class="campo-form">    
<form action="edit_fun.php" method="POST">
    <h1>Formulário de Edição do Funcionário</h1>
    <input type="hidden" name="funId" value="<?php echo $row_fun['funId']; ?>" >
    
    <div class="campo-input">
        <input type="text" name="nome" placeholder="Nome" value="<?php echo $row_fun['funNome']; ?>" style="text-align: center">	
    </div>
    <div class="campo-input">
        <input type="text" name="endereco" placeholder="Endereço" value="<?php echo $row_fun['funEnd']; ?>" style="text-align: center">
    </div>
    <div class="campo-input">  
        <input type="text" name="email" placeholder="Email" value="<?php echo $row_fun['funEmail']; ?>" style="text-align: center">
    </div>
    <div class="campo-input">
        <input type="text" name="nasc" placeholder="Data de Nascimento" value="<?php echo $row_fun['funNasc']; ?>" style="text-align: center">
    </div>
    <div class="campo-input">
        <input type="text" name="celular" placeholder="Celular" value="<?php echo $row_fun['funCelular']; ?>" style="text-align: center">
    </div>
    <div class="campo-input">
        <input type="text" name="rg" placeholder="RG" value="<?php echo $row_fun['funRg']; ?>" style="text-align: center">
    </div>
    <div class="campo-input">
        <input type="text" name="cpf" placeholder="CPF" value="<?php echo $row_fun['funCpf']; ?>" style="text-align: center">
    </div>
    
        <input type="hidden" name="user" placeholder="Usuário" value="<?php echo $row_fun['funUser']; ?>" style="text-align: center">
    
    
        <input type="hidden" name="pass" placeholder="Senha" value="<?php echo $row_fun['funPass']; ?>" style="text-align: center">
    
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
    