<?php

    /*require_once 'classes/Usuario.php';*/
    require_once 'global.php';

    try{
        // header("Location: cadastro-usuario.php");

        $usuario = new Usuario();
        $usuario->setNomeUsuario($_POST['txtNomeUsuario']);
        $usuario->setLoginUsuario($_POST['txtLoginUsuario']);
        $usuario->setSenha($_POST['txtSenha']);

        echo $usuario->cadastrar($usuario);
    }
    catch(Exception $e){
        echo '<pre>';
              print_r($e);
        echo '</pre>';
        echo $e->getMessage();    
        
        print_r($e);
    }
?>