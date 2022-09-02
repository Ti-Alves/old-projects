<?php
    
    require_once("Conexao.php");
    require_once("Usuario.php");

    class Produto{
        //atributos
        //java private int idCLiente;
        //modificadores: public, protected, private 
        //encapsulamento: atributos são private; get e set para gravar e ler
        private $idProduto;
        private $descProduto;
        private $textoProduto;
        private $idUsuario;

        //get no java: public int getIdCliente(){ return idCLiente;}
        public function getIdProduto(){
            return $this->idProduto;
        }

        public function getDescProduto(){
            return $this->descProduto;
        }

        public function getTextoProduto(){
            return $this->textoProduto;
        }
        public function getFotoProduto(){
            return $this->fotoProduto;
        }


        //set no java: public void setIdCliente(int idCliente){ this.idCliente = idCliente;}
        public function setIdProduto($idProduto){
            $this->idProduto = $idProduto;
        }

        public function setDescProduto($descProduto){
            $this->descProduto = $descProduto;
        }

        public function setTextoProduto($textoProduto){
            $this->textoProduto = $textoProduto;
        }

        public function getUsuario(){
            return $this->usuario;
        }

        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }

        public function setFotoProduto($fotoProduto){
            $this->fotoProduto = $fotoProduto;
        }

        public function cadastrar($produto){
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("INSERT INTO tbProduto(descProduto, textoProduto,
                                    fotoProduto, idUsuario)
                                      VALUES(?, ?, ?, ?)");

            $stmt->bindValue(1, $produto->getDescProduto());
            $stmt->bindValue(2, $produto->getTextoProduto());
            $stmt->bindValue(3, $produto->getFotoProduto());  
            //$stmt->bindValue(4, $agenda->getUsuario()->getIdUsuario()); 
            $stmt->bindValue(4,1);   
            
            $stmt->execute();
        }
    }