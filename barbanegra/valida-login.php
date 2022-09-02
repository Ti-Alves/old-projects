<?php

$login = $_POST['txtNome'];
$senha = $_POST['txtSenha'];

if(($login == 'adm') && ($senha == '123')){
   session_start();
   $_SESSION['login-session'] = $login;
   $_SESSION['senha-session'] = $senha;
   header("Location: area_restrita/index-area-restrita.php");
  
}
else if (($login != 'adm') && ($senha == '123')){
    header("Location: login.php?erronome=Verifique se o campo do usuário foi preenchido corretamente");
}
else if(($senha != '123') && ($login == 'adm' )){
    header("Location: login.php?errosenha=Verifique se o campo da senha foi preenchido corretamente");
}  
else{
    header("Location:login.php?erronomesenha=Verifique se os campos foram preenchidos corretamente");
}  

?>