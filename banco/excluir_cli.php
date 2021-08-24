<?php
include_once('connect.php');
$conexao = new Conexao();
$con = $conexao->conectar();
$id= filter_input(INPUT_GET, 'cliID', FILTER_SANITIZE_NUMBER_INT);
echo $id;
if(!empty($id)){
    $del_cli = "DELETE FROM cliente WHERE cliID='$id'";
    $result_cli = mysqli_query($con,$del_cli);

    if(mysqli_affected_rows($con)!=0){
        echo"<script>
            alert('Dados excluidos com sucesso.');
            window.location.href='listar_cli.php';
        </script>";
    } else {
        echo"<script>
            alert('Erro ao excluir os dados.');
            window.location.href='listar_cli.php';
        </script>";
    }
    mysqli_close($con);
}
?>