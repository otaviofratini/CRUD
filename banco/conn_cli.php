<?php
    require_once '../class/Cliente.php';
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
        
        $c = new Cliente(
            $nome,
            $endereco,
            $email,
            $nasc,
            $cel,
            $rg,
            $cpf,
            $dataCadastro
        );

        $insert_cli = "INSERT INTO
                    cliente(cliNome,
                    cliEnd,
                    cliEmail,
                    cliNasc,
                    cliCel,
                    cliRg,
                    cliCpf,
                    cliDataCadastro) VALUES (
                    '$nome',
                    '$endereco',
                    '$email',
                    '$nasc',
                    '$cel',
                    '$rg',
                    '$cpf',
                    $dataCadastro)";

        $result_cli = mysqli_query($con,$insert_cli);       
        
        if(mysqli_affected_rows($con)){
            echo "<script> 
            alert('Dados do cliente $nome inseridos com sucesso.');
            window.location.href='listar_cli.php';
            </script>";
        } else {
            echo "<script> 
            alert('Erro ao cadastrar os dados!');
            windows.location.href='listar_cli.php';
            </script>";
        }
    
        mysqli_close($conexao);
?>