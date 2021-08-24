<?php
    require_once '../class/Produto.php';
    include_once('connect.php');

    $conexao = new Conexao();
    $con = $conexao->conectar();

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descri = $_POST['descri'];
    $categoria = $_POST['categoria'];

    $p = new Produto(
        $nome,
        $preco,
        $descri,
        $categoria
    );

    $insert_pro = "INSERT INTO
                produto(proNome,
                proPreco,
                proDescri,
                proCategoria) VALUES (
                '$nome',
                '$preco',
                '$descri',
                '$categoria')";
               
    $result_pro = mysqli_query($con,$insert_pro);
    
    if(mysqli_affected_rows($con)){
        echo "<script> 
        alert('Dados do produto $nome inseridos com sucesso.');
        window.location.href='listar_pro.php';
        </script>";
    } else {
        echo "<script> 
        alert('Erro ao cadastrar os dados!');
        windows.location.href='listar_pro.php';
        </script>";
    }

    mysqli_close($conexao);

?>