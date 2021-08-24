<?php
   include_once('connect.php');
    $conexao = new Conexao();
    $con = $conexao->conectar();
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $id = filter_input(INPUT_GET,'proID',FILTER_SANITIZE_NUMBER_INT);

        $edit_pro = "SELECT * FROM produto WHERE proID = '$id'";
        $result_pro = mysqli_query($con,$edit_pro);
        $row_pro = mysqli_fetch_assoc($result_pro);
    }else{
        include_once('connect.php');
        $conexao = new Conexao();
        $con = $conexao->conectar();
    
        $id = $_POST['proID'];
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $descri = $_POST['descri'];
        $categoria = $_POST['categoria'];
        
        $result_pro = "UPDATE produto SET 
                proNome = '$nome', 
                proPreco='$preco', 
                proDescri='$descri', 
                proCategoria='$categoria'
                WHERE proID=$id";
    $result_pro = mysqli_query($con, $result_pro);
    if(mysqli_affected_rows($con)){
        echo"<script>
        alert('Dados atualizados com sucesso na tabela...');
        window.location.href='listar_pro.php';
        </script>
        ";

    }else{
        echo"<script>
        alert('Erro ao atualizar os dados na tabela...');
        windows.location.href='listar_pro.php';
        </script>
        ";
    }
}
?>
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
        <form action="edit_pro.php" method="POST">
            <h1>Formulário de edição de produtos</h1>
            <input type="hidden" name="proID" value="<?php echo $row_pro['proID']; ?>" >
            <div class="campo-input">
                <input type="text" name="nome" placeholder="Nome" value="<?php echo $row_pro['proNome']; ?>" style="text-align: center">	
            </div>
            <div class="campo-input">
                <input type="text" name="preco" placeholder="Preço de venda" value="<?php echo $row_pro['proPreco']; ?>" style="text-align: center">
            </div>
            <div class="campo-input">
                <input type="text" name="descri" placeholder="Descrição do produto" value="<?php echo $row_pro['proDescri']; ?>" style="text-align: center">
            </div>
            <div class="campo-input">
                <input type="text" name="categoria" placeholder="Categoria" value="<?php echo $row_pro['proCategoria']; ?>" style="text-align: center">
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