<?php
include_once('connect.php');
$conexao = new Conexao();
$con = $conexao->conectar();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Lista de Funcionários</title>
    <meta name="viewport" content="width=device-width, inicial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../estilo.css">
</head>
<body>
    <div class="campo-form2">
        <h1><center>Lista de funcionários</center></h1>
        <hr size="10" width="100%">
        <?php
            $result_sql = "SELECT * FROM funcionario";
            $result_fun = mysqli_query($con,$result_sql);
            $total = mysqli_num_rows($result_fun);

            while($row_fun = mysqli_fetch_assoc($result_fun)){
                echo"ID: ".$row_fun['funId']."<br>";
                echo"Nome: ".$row_fun['funNome']."<br>";
                echo"Endereço: ".$row_fun['funEnd']."<br>";
                echo"E-mail: ".$row_fun['funEmail']."<br>";
                echo"Telefone: ".$row_fun['funCelular']."<br>";
                echo"RG: ".$row_fun['funRg']."<br>";
                echo"CPF: ".$row_fun['funCpf']."<br>";
                echo"Data de cadastro: ".$row_fun['funDataCadastro']."<br>";
        ?>
        <a href='edit_fun.php?funId=<?php echo $row_fun['funId'];?>'>Editar</a> |
        <a href="javascript: if(confirm('Tem certeza que deseja deletar o funcionario <?php echo $row_fun['funNome']; ?> ?'))
        location.href='excluir_fun.php?funId=<?php echo $row_fun["funId"]; ?>' ;"> Deletar</a><br><br>
        <?php
        }
        echo "<p><b>Total de registros encontrados: ".$total."</b></p>"; 
        ?>
        <div class="voltar">
        <a href="../login.php"><div class="button" style="width: 110px;">Voltar</div></a>
        </div>
    </div>
</body>
</html>