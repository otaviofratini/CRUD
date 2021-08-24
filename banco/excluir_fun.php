<?php
include_once('connect.php');
$conexao = new Conexao();
$con = $conexao->conectar();
$id= filter_input(INPUT_GET, 'funId', FILTER_SANITIZE_NUMBER_INT);
echo $id;
if(!empty($id)){
    $del_fun = "DELETE FROM funcionario WHERE funId='$id'";
    $result_fun = mysqli_query($con,$del_fun);

    if(mysqli_affected_rows($con)!=0){
        echo"<script>
            alert('Dados excluidos com sucesso.');
            window.location.href='listar_fun.php';
        </script>";
    } else {
        echo"<script>
            alert('Erro ao excluir os dados.');
            window.location.href='listar_fun.php';
        </script>";
    }
    mysqli_close($con);
}
?>