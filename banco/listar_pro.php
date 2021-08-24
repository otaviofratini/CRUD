<?php
include_once('connect.php');
$conexao = new Conexao();
$con = $conexao->conectar();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Lista de produtos</title>
    <meta name="viewport" content="width=device-width, inicial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../estilo.css">
</head>
<body>
    <div class="campo-form2">
        <h1><center>Lista de produtos</center></h1>
        <hr size="10" width="100%">
        <?php
            $result_sql = "SELECT * FROM produto";
            $result_pro = mysqli_query($con,$result_sql);
            $total = mysqli_num_rows($result_pro);

            while($row_pro = mysqli_fetch_assoc($result_pro)){
                echo"ID: ".$row_pro['proID']."<br>";
                echo"Nome: ".$row_pro['proNome']."<br>";
                echo"Preço: ".$row_pro['proPreco']."<br>";
                echo"Descrição: ".$row_pro['proDescri']."<br>";
                echo"Categoria: ".$row_pro['proCategoria']."<br>";
        ?>
        <a href='edit_pro.php?proID=<?php echo $row_pro['proID'];?>'>Editar</a> |
        <a href="javascript: if(confirm('Tem certeza que deseja deletar o produto <?php echo $row_pro['proNome']; ?> ?'))
        location.href='excluir_pro.php?proID=<?php echo $row_pro["proID"]; ?>' ;"> Deletar</a><br><br>
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