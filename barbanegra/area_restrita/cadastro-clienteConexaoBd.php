<?php

    require_once '../classes/Cliente.php';

    try{
       /* header("Location: ../index.php");*/

        $cliente = new Cliente();
        $cliente->setNomeCliente($_POST['txtNomeCliente']);
        $cliente->setCpfCliente($_POST['txtCpf']);
        $cliente->setCelularCliente($_POST['txtCelular']);
        
        echo $cliente->cadastrar($cliente);
    }
    catch(Exception $e){
        echo '<pre>';
              print_r($e);
        echo '</pre>';
        echo $e->getMessage();     
    }
?>
