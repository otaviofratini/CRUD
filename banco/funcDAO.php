<?php
    include_once('class/Funcionario.php');
    include_once('connect.php');

    class FuncDao{

        public function getFuncPorUser($user){
            $conexao = new Conexao();

            $result_sql = "SELECT * FROM funcionario WHERE funUser = '$user'";
            $result_fun = mysqli_query($conexao->conectar(),$result_sql);
            

            $row_fun = mysqli_fetch_assoc($result_fun);

            $funcionario = new Funcionario($row_fun['funId'],
                            $row_fun['funNome'],
                            $row_fun['funEnd'],
                            $row_fun['funEmail'],
                            $row_fun['funNasc'],
                            $row_fun['funCelular'],
                            $row_fun['funRg'],
                            $row_fun['funCpf'],
                            $row_fun['funUser'],
                            $row_fun['funPass']
            );
            return $funcionario;

        }

    }

    

?>