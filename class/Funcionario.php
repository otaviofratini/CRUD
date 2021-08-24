<?php
    class Funcionario{
        private $id;
        private $nome;
        private $endereco;
        private $email;
        private $nasc;
        private $celular;
        private $rg;
        private $cpf;
        private $user;
        private $pass;

         public function __construct($id,$nome,$endereco,$email,$nasc,$celular,$rg,$cpf,$user,$pass){
            $this->id = $id;
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->email = $email;
            $this->nasc = $nasc;
            $this->celular = $celular;
            $this->rg = $rg;
            $this->cpf = $cpf;
            $this->user = $user;
            $this->pass = $pass;
        }
        
        public function setId($id){
            $this->id = $id;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function setNasc ($nasc){
            $this->nasc = $nasc;
        }
        public function setCelular($celular){
            $this->celular = $celular;
        }
        public function setUser($user){
            $this->user = $user;
        }
        public function setPass($pass){
            $this->pass = $pass;
        }
        public function getId(){
            return $this->id;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getEndereco(){
            return $this->endereco;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getNasc(){
            return $this->nasc;
        }
        public function getCelular(){
            return $this->celular;
        }
        public function setRg($rg){
            $this->rg = $rg;
        }
        public function setCpf($cpf){
            $this->cpf = $cpf;
        }
        public function getRg(){
            return $this->rg;
        }
        public function getCpf(){
            return $this->cpf;
        }
        public function getUser(){
            return $this->user;
        }
        public function getPass(){
            return $this->pass;
        }
    }  
?>