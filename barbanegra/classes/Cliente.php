<?php

require_once("Conexao.php");

class Cliente
{
    //atributos
    //java private int idCLiente;
    //modificadores: public, protected, private 
    //encapsulamento: atributos são private; get e set para gravar e ler
    private $idCliente;
    private $nomeCliente;
    private $cpfCliente;
    private $celularCliente;

    //get no java: public int getIdCliente(){ return idCLiente;}
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }

    public function getCpfCliente()
    {
        return $this->cpfCliente;
    }

    public function getCelularCliente()
    {
        return $this->celularCliente;
    }

    //set no java: public void setIdCliente(int idCliente){ this.idCliente = idCliente;}
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    public function setNomeCliente($nomeCliente)
    {
        $this->nomeCliente = $nomeCliente;
    }

    public function setCpfCliente($cpfCliente)
    {
        $this->cpfCliente = $cpfCliente;
    }

    public function setCelularCliente($celularCliente)
    {
        $this->celularCliente = $celularCliente;
    }

    public function cadastrar($cliente)
    {
        $conexao = Conexao::conectar();
        //prepare statement
        $stmt = $conexao->prepare("INSERT INTO tbCliente 
            (nomeCliente, cpfCliente, celularCliente)
                                        VALUES(?,?,?)");
        $stmt->bindValue(1, $cliente->getNomeCliente());
        $stmt->bindValue(2, $cliente->getCpfCliente());
        $stmt->bindValue(3, $cliente->getCelularCliente());
        $stmt->execute();
        return 'Cadastro realizado com sucesso';
        /* print_r($stmt);*/
    }

    public function listar()
    {
        $conexao = Conexao::conectar();
        $querySelect = "SELECT idCliente, nomeCliente, cpfCliente, celularCliente FROM tbCliente";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }
    public function getIdBynome($nome)
    {
        $conexao = Conexao::conectar();
        // $sql = ("SELECT idCliente FROM tbCliente WHERE nomeCliente = ". $nome);
        $stmt = $conexao->prepare("SELECT idCliente FROM tbCliente WHERE nomeCliente=:nome");
        $stmt->execute(['nome' => $nome]);

        //$resultado=$conexao->query($sql);
        $resultado = $stmt->fetch();

        return $resultado;
        echo $resultado;
    }
    public function getNameByIdCliente($cliente)
    {
        $conexao = Conexao::conectar();

        $stmt = $conexao->prepare("SELECT nomeCliente FROM tbCliente WHERE idCliente=:idCliente");
        $stmt->execute(['idCliente' => $cliente]);
        $resultado = $stmt->fetch();

        return $resultado;
        echo $resultado;
    }
}
