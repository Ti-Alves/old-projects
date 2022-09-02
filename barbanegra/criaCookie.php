<?php
    header("Location: index.php");

    $categoria=$_POST['select'];

    setcookie('categoriaCookie', $categoria, time()+180*60*24*10);
?>