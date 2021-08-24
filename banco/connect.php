<?php
	
    class Conexao{

		private $server = "localhost:3306";
		private $user = "root";
		private $pass = "";
		private $dbname = "empresa";


        public function conectar(){
			$conn = mysqli_connect($this->server,$this->user,$this->pass,$this->dbname);
	
			if(!$conn){
				die(" Erro de conexão: ".mysqli_connect_error());
			}else{
				//echo" Conexão realizada com sucesso! <br>";
				return $conn;
			}

		}

    }
?>