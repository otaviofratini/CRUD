<?php
include_once('connect.php');
$conexao = new Conexao();
$con = $conexao->conectar();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Lista de Clientes</title>
    <meta name="viewport" content="width=device-width, inicial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../estilo.css">
</head>
<body>
    <div class="campo-form2">
        <h1><center>Lista de clientes</center></h1>
        <hr size="10" width="100%">
        <?php
            $result_sql = "SELECT * FROM cliente";
            $result_cli = mysqli_query($con,$result_sql);
            $total = mysqli_num_rows($result_cli);

            while($row_cli = mysqli_fetch_assoc($result_cli)){
                echo"ID: ".$row_cli['cliID']."<br>";
                echo"Nome: ".$row_cli['cliNome']."<br>";
                echo"Endereço: ".$row_cli['cliEnd']."<br>";
                echo"E-mail: ".$row_cli['cliEmail']."<br>";
                echo"Telefone: ".$row_cli['cliCel']."<br>";
                echo"RG: ".$row_cli['cliRg']."<br>";
                echo"CPF: ".$row_cli['cliCpf']."<br>";
                echo"Data de cadastro: ".$row_cli['cliDataCadastro']."<br>";
        ?>
        <a href='edit_cli.php?cliID=<?php echo $row_cli['cliID'];?>'>Editar</a> |
        <a href="javascript: if(confirm('Tem certeza que deseja deletar o cliente <?php echo $row_cli['cliNome']; ?> ?'))
        location.href='excluir_cli.php?cliID=<?php echo $row_cli["cliID"]; ?>' ;"> Deletar</a><br><br>
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