<?php
include_once('connect.php');
$conexao = new Conexao();
$con = $conexao->conectar();
$id= filter_input(INPUT_GET, 'proID', FILTER_SANITIZE_NUMBER_INT);
echo $id;
if(!empty($id)){
    $del_pro = "DELETE FROM produto WHERE proID='$id'";
    $result_pro = mysqli_query($con,$del_pro);

    if(mysqli_affected_rows($con)!=0){
        echo"<script>
            alert('Dados excluidos com sucesso.');
            window.location.href='listar_pro.php';
        </script>";
    } else {
        echo"<script>
            alert('Erro ao excluir os dados.');
            window.location.href='listar_pro.php';
        </script>";
    }
    mysqli_close($con);
}
?>