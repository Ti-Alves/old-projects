<?php
    header("Location: index.php");

    $categoriaServico=$_POST['select'];

    setcookie('categoriaCookieServico', $categoriaServico, time()+180*60*24*10);
?>