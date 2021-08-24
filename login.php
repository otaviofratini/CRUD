<?php
    include_once('banco/funcDAO.php'); 
    session_start();
    
    if(!isset($_SESSION["usuarioLogado"])){
        $funcDao = new FuncDao();
        $funcionario = $funcDao->getFuncPorUser($_POST['user']);
        if($funcionario->getPass() == $_POST['pass']){
            $_SESSION["usuarioLogado"] = $funcionario;
            include('visao/home.php');
        }else{
            $erro = "Usuário ou senha inválidos";
            include('index.php');
        }
    }else{
        include('visao/home.php');
    }    
?>