<?php
include_once("valida-sentinela.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
        initial-scale=1,
        shrink-to-fit=no">

    <link rel="shortcut icon" href="../img/favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="../css/style3.css">
    <title>🔐Área Restrita - Barba Negra</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>


</head>

<body>
    <div class="header">
        <img class="right pole" src="../img/pole.png">
        <img class="left pole" src="../img/poled.png">
        <span onclick="openNav()"><img class="imgMenu left" src="../img/memenu.png" alt=""></span>
        <div class="login">
            <form method="POST" action="../logout.php">
                <input name="entrar" class="button" id="id" type="submit" value="Sair">
            </form>
        </div>
        <a href="./index-area-restrita.php"><img class="title" src="../img/titulo.png"></a>
    </div>
    <!-- <div class="menu">
            <div class="elements"><a href="./agendamento.php">• Agendamento •</a></div>
            <div class="elements"><a href="./cadastro-cliente.php">• Cliente •</a></div>
            <div class="elements"><a href="./cadastrar-servico.php">• Serviços •</a></div>
            <div class="elements"><a href="./cadastro-produto.php">• Publicações •</a></div>
        </div> -->
    <div id="mySidenav" class="sidenav" style="cursor: pointer;">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="./cadastro-agenda.php">Cadastrar agendamento</a>
        <a href="./consulta-agenda.php">Consultar agendamentos</a>
        <a href="./cadastro-cliente.php">Cliente</a>
        <a href="./cadastrar-servico.php">Serviços</a>
        <a href="./cadastro-produto.php">Produtos</a>
    </div>
    <div class="informacoes">
        <p class="info">Informações do usuário</p><br>
    </div>
    <br>
    <div class="centralizar usuarioPai">
        <div class="usuarioFilho">
            <img class="userpic" src="../img/user.png">
        </div>
        <div class="usuarioFilho">
            <p>
                Nome de Usuário: ADM
                <br>
                Senha: 123
            </p>
        </div>
    </div>

    <script>
        /* Set the width of the side navigation to 250px */
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

        /* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
        }
    </script>
</body>

</html>