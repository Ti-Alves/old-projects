<?php
    
    require_once '../classes/Agenda.php';

    require_once '../classes/Cliente.php';
    require_once '../classes/Servico.php';

    //header("Location: cadastro-agenda.php");

   try{
    //$_POST['idCliente']
    $agenda = new Agenda();
    $agenda->setDataAgenda($_POST['dataAgenda']);
    $agenda->setHoraAgenda($_POST['horaAgenda']);

    $cliente = new Cliente();
    //$cliente->setIdCliente();
    $idCliente = $cliente->getIdBynome($_POST['idCliente']);

    //$servico = new Servico();
    //$servico->setIdServico($_POST['idServico']);
   //$idServico = $servico->getIdByservico($_POST['Servicos']);
    
     
   $agenda->setCliente($cliente);
   //$agenda->setServico($servico); 

    echo($agenda->getCliente()->getIdCliente());
    

   $servicos = $_POST['Servicos'];
   //$servicos = implode(",",$_POST['Servicos']);
   foreach($servicos as $servico){
       $serv = new Servico();
       $serv->setIdServico($servico);
       $idServico = $serv->getIdServico();
       $agenda->setServico($serv); 
      // echo($agenda->getServico()->getIdServico());
       echo $agenda->cadastrar($agenda, $idCliente, $idServico);
       //echo($servico . '<br>');
   }
 }
 catch(Exception $e){
    echo '<pre>';
          print_r($e);
    echo '</pre>';
    echo $e->getMessage();     
}
//echo($idCliente[0]);

?>
