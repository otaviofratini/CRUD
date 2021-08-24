<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">   
<title>Controle de cliente</title>
</head>
<style>
body{
    background: #2c3e50;
}
.campo-info{
    width: 600px;
    height: 400px;
    background: #16a085;
    text-align: center;
    position: absolute;
    top: 50%;
    left:50%;
    transform: translate(-50%,-50%);
    overflow: hidden;
    border: none;
	border-radius: 15px;
	box-shadow: 0 10px rgb(17, 17, 17);
}
.texto{
    margin-top:40px;
    text-align: center;
    font-family: 'Notable', sans-serif;
    font-weight: bold;

}
a:link{
	text-decoration: none;
}
.button{
	width: 500px;
	padding: 5px 20px;
	position:absolute;
	top:80%;
	left:30%;
	font-family: 'Notable', sans-serif;
  	font-size: 24px;
	font-weight: bold;
	text-align: center;
	cursor: pointer;
	outline: #FFFFFF;
	color: rgb(0, 0, 0);
	background-color: #8c00ff;
	border: none;
	border-radius: 15px;
	box-shadow: 0 7px rgb(17, 17, 17);
}
.button:hover {
    background-color: #5302af;
}
.button:active {
	background-color: #5302af;
	box-shadow: 0 5px rgb(68, 68, 68);
	transform: translateY(4px);
}
</style>
<body>
    <div class="campo-info">
        <div class="texto">
        <?php
            require_once'../class/Cliente.php'; 
            $c = new Cliente(
                $_POST['id'],
                $_POST['nome'],
                $_POST['end'],
                $_POST['email'],
                $_POST['nasc'],
                $_POST['cel'],
                $_POST['rg'],
                $_POST['cpf']
            );
            echo "O ID do cliente é ".$c->getId()."<br><br>"; 
            echo "O nome do cliente é ".$c->getNome()."<br><br>"; 
            echo "O endereço do cliente é ".$c->getEndereco()."<br><br>";
            echo "O e-mail do cliente é ".$c->getEmail()."<br><br>";
            echo "A data de nascimento do cliente é ".$c->getNasc()."<br><br>";
            echo "O celular do cliente é ".$c->getCelular()."<br><br>";
            echo "O RG do cliente é ".$c->getRg()."<br><br>";
            echo "O CPF do cliente é ".$c->getCpf()."<br><br>" ;
        ?>
        </div>
    <a href="../index.html">
    </div>
    <div class="button">
        Voltar
    </div></a>  
</body>
</html>