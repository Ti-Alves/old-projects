<?php
    session_start();
    unset($_SESSION['nome-session']);
    unset($_SESSION['senha-session']);
    session_destroy();
    header("Location: index.php");

?>