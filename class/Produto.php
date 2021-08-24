<?php
    class Produto{
        private $id;
        private $nome;
        private $preco;
        private $descri;
        private $categoria;

        public function __construct($id,$nome,$preco,$descri,$categoria){
            $this->id = $id;
            $this->nome = $nome;
            $this->preco = $preco;
            $this->descri = $descri;
            $this->categoria = $categoria;
        }

        public function setId($id){
            $this->id = $id;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setPreco($preco){
            $this->preco = $preco;
        }
        public function setDescri($descri){
            $this->descri = $descri;
        }
        public function setCategoria($categoria){
            $this->categoria = $categoria;
        }
        public function getId(){
            return $this->id;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getPreco(){
            return $this->preco;
        }
        public function getDescri(){
            return $this->descri;
        }
        public function getCategoria(){
            return $this->categoria;
        }
    }
?>