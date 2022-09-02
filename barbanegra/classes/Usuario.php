<?php
   
    require_once("Conexao.php");

    class Usuario{
        //atributos
        //java private int idCLiente;
        //modificadores: public, protected, private 
        //encapsulamento: atributos são private; get e set para gravar e ler
        private $idUsuario;
        private $nomeUsuario;
        private $loginUsuario;
        private $senha;

        //get no java: public int getIdCliente(){ return idCLiente;}
        public function getIdUsuario(){
            return $this->idUsuario;
        }

        public function getNomeUsuario(){
            return $this->nomeUsuario;
        }

        public function getLoginUsuario(){
            return $this->loginUsuario;
        }

        public function getSenha(){
            return $this->senha;
        }


        //set no java: public void setIdCliente(int idCliente){ this.idCliente = idCliente;}
        public function setIdUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }

        public function setNomeUsuario($nomeUsuario){
            $this->nomeUsuario = $nomeUsuario;
        }   

        public function setLoginUsuario($loginUsuario){
            $this->loginUsuario = $loginUsuario;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }
        public function cadastrar($usuario){
            $conexao = Conexao::conectar();
            //prepare statement
            $stmt = $conexao->prepare("INSERT INTO tbUsuario
            (nomeUsuario, loginUsuario, senha)
                                        VALUES(?,?,?)");
            $stmt->bindValue(1, $usuario->getNomeUsuario()); 
            $stmt->bindValue(2, $usuario->getLoginUsuario());
            $stmt->bindValue(3, $usuario->getSenha());
            $stmt->execute();
            return 'Cadastro realizado com sucesso';
            /*print_r($stmt);*/
        }
      }
?>