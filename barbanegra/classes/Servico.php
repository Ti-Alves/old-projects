<?php

require_once("Conexao.php");

class Servico
{
    //atributos
    //java private int idCLiente;
    //modificadores: public, protected, private 
    //encapsulamento: atributos são private; get e set para gravar e ler
    private $idServico;
    private $descServico;
    private $textoServico;
    private $fotoServico;

    //get no java: public int getIdCliente(){ return idCLiente;}
    public function getIdServico()
    {
        return $this->idServico;
    }

    public function getDescServico()
    {
        return $this->descServico;
    }

    public function getTextoServico()
    {
        return $this->textoServico;
    }

    public function getFotoServico()
    {
        return $this->fotoServico;
    }

    //set no java: public void setIdCliente(int idCliente){ this.idCliente = idCliente;}
    public function setIdServico($idServico)
    {
        $this->idServico = $idServico;
    }

    public function setDescServico($descServico)
    {
        $this->descServico = $descServico;
    }

    public function setTextoServico($textoServico)
    {
        $this->textoServico = $textoServico;
    }

    public function setFotoServico($fotoServico)
    {
        $this->fotoServico = $fotoServico;
    }

    public function cadastrar($servico)
    {
        $conexao = Conexao::conectar();
        //prepare statement
        $stmt = $conexao->prepare("INSERT INTO tbServico
            (descServico, textoServico, fotoServico)
                                        VALUES(?,?,?)");
        $stmt->bindValue(1, $servico->getDescServico());
        $stmt->bindValue(2, $servico->getTextoServico());
        $stmt->bindValue(3, $servico->getFotoServico());
        $stmt->execute();
        return 'Cadastro realizado com sucesso';
        /* print_r($stmt);*/
    }

    public function listar()
    {
        $conexao = Conexao::conectar();
        $querySelect = "SELECT idServico, descServico, textoServico, fotoServico FROM tbServico";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function listarServicos()
    {
        $conexao = Conexao::conectar();
        $querySelect = "SELECT idServico, textoServico FROM tbServico";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }


    public function getIdByservico($servico)
    {
        $conexao = Conexao::conectar();

        $stmt = $conexao->prepare("SELECT idServico FROM tbServico WHERE textoServico=:textoServico");
        $stmt->execute(['textoServico' => $servico]);

        //$resultado=$conexao->query($sql);
        $resultado = $stmt->fetch();

        return $resultado;
        echo $resultado;
        /*$sql ="SELECT idServico FROM tbServico WHERE textoServico =" . $servico ;
       

        $resultado=$conexao->query($sql);
        
        return (int) $resultado->fetch();
        echo $resultado;*/
    }
    public function getNameByIdServico($servico)
    {
        $conexao = Conexao::conectar();

        $stmt = $conexao->prepare("SELECT textoServico FROM tbServico WHERE idServico=:idServico");
        $stmt->execute(['idServico' => $servico]);
        $resultado = $stmt->fetch();

        return $resultado;
        echo $resultado;
    }
}
