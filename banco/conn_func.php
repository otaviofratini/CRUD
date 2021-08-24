<?php
    require_once '../class/Funcionario.php';
    include_once('connect.php');
        
    $conexao = new Conexao();
    $con = $conexao->conectar();

        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $email = $_POST['email'];
        $nasc = $_POST['nasc'];
        $cel = $_POST['celular'];
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $dataCadastro = "CURDATE()";
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $f = new Funcionario(
            $nome,
            $endereco,
            $email,
            $nasc,
            $cel,
            $rg,
            $cpf,
            $dataCadastro,
            $user,
            $pass
        );
        

        $insert_fun = "INSERT INTO 
            funcionario(funNome,
            funEnd,
            funEmail,
            funNasc,
            funCelular,
            funRg,
            funCpf,
            funDataCadastro,
            funUser,
            funPass) VALUES ('$nome',
            '$endereco',
            '$email',
            '$nasc',
            '$cel',
            '$rg',
            '$cpf',
            $dataCadastro,
            '$user',
            '$pass')";

        
        $result_fun = mysqli_query($con,$insert_fun);

        if(mysqli_affected_rows($con)){
            echo "<script> 
            alert('Dados do vendedor $nome inseridos com sucesso.');
            window.location.href='listar_func.php';
            </script>";
        } else {
            echo "<script> 
            alert('Erro ao cadastrar os dados!');
            windows.location.href='listar_func.php';
            </script>";
        }
    
        mysqli_close($conexao);

?>
        