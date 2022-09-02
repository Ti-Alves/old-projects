<?php

require_once("Conexao.php");
require_once("Cliente.php");
require_once("Servico.php");

/*header("Location: cadastro-agenda.php");*/

class Agenda
{
    //atributos
    //java private int idCLiente;
    //modificadores: public, protected, private 
    //encapsulamento: atributos são private; get e set para gravar e ler
    private $idAgenda;
    private $dataAgenda;
    private $horaAgenda;

    private $idCliente;
    private $idServico;


    //get no java: public int getIdCliente(){ return idCLiente;}
    public function getIdAgenda()
    {
        return $this->idAgenda;
    }

    public function getdataAgenda()
    {
        return $this->dataAgenda;
    }
    public function getHoraAgenda()
    {
        return $this->horaAgenda;
    }

    //set no java: public void setIdCliente(int idCliente){ this.idCliente = idCliente;}
    public function setIdAgenda($idAgenda)
    {
        $this->idAgenda = $idAgenda;
    }

    public function setDataAgenda($dataAgenda)
    {
        $this->dataAgenda = $dataAgenda;
    }
    public function setHoraAgenda($horaAgenda)
    {
        $this->horaAgenda = $horaAgenda;
    }



    public function getCliente()
    {
        return $this->cliente;
    }

    public function getServico()
    {
        return $this->servico;
    }

    //set no java: public void setIdCliente(int idCliente){ this.idCliente = idCliente;}
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    public function setServico($servico)
    {
        $this->servico = $servico;
    }


    // public function cadastrar($agenda){
    //     $conexao = Conexao::conectar();
    //     $stmt = $conexao->prepare("INSERT INTO tbAgenda(dataAgenda, idCliente, idServico, idUsuario)
    //                               VALUES(?, ?, ?, ? )");

    //     $stmt->bindValue(1, $agenda->getDataAgenda());
    //     $stmt->bindValue(2, $agenda->getCliente()->getIdCliente());  
    //     $stmt->bindValue(3, $agenda->getServico()->getIdServico()); 
    //     //$stmt->bindValue(4, $agenda->getUsuario()->getIdUsuario()); 
    //     $stmt->bindValue(4,1);   

    //     $stmt->execute();
    // }
    public function cadastrar($agenda, $cliente, $servico)
    {
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare("INSERT INTO tbAgenda(dataAgenda, horaAgenda,
                                    idCliente, idServico, idUsuario)
                                      VALUES(?, ?, ?, ?, ? )");

        $stmt->bindValue(1, $agenda->getDataAgenda());
        $stmt->bindValue(2, $agenda->getHoraAgenda());
        $stmt->bindValue(3, $cliente["idCliente"]);
        $stmt->bindValue(4, $servico);
        //$stmt->bindValue(4, $agenda->getUsuario()->getIdUsuario()); 
        $stmt->bindValue(5, 1);

        $stmt->execute();

        return "Cadastro feito";
    }


    public function listar($agenda)
    {
        $conexao = Conexao::conectar();
        //prepare statement
        $querySelect = " SELECT idAgenda, dataAgenda, nomeCliente, descServico, nomeUsuario
              FROM tbAgenda
                INNER JOIN tbCliente
                  ON tbAgenda.idCliente = tbCliente.idCliente
                INNER JOIN tbServico  
                  ON tbAgenda.idServico = tbServico.idServico
                INNER JOIN tbUsuario  
                 ON tbAgenda.idUsuario = tbUsuario.idUsuario ";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
        return 'Cadastro realizado com sucesso';
        // print_r($stmt);
    }


    public function listarAgendamento()
    {
        $conexao = Conexao::conectar();
        $querySelect = "SELECT * FROM tbAgenda";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }
}
