<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Barba Negra - Login</title>
    <link rel="stylesheet" href="css/style2.css">
        <link rel="shortcut icon" href="img/favicon-16x16.png">
</head>
    <body>
            <div class="pai">
                <div class="login">
                    <div class="loginTitle">
                        <p>Efetue seu Login</p>
                    </div>
                    <div class="center">
                        <form action="./valida-login.php" method="post">
                        <label class="labels">Usuário</label>
                        <br>
                        <input type="text" name="txtNome" id="txtNome">
                        <br>
                        <label class="labels">Senha</label>
                        <br>
                        <input type="password" name="txtSenha" id="txtSenha">
                    <?php 
                        if(isset($_GET['erronome'])){
                            echo("<h5><font color=\"#ff6b61\">".$_GET['erronome']."</font></h5>");
                        }
                        else if(isset($_GET['errosenha'])){
                            echo("<h5><font color=\"#ff6b61\">".$_GET['errosenha']."</font></h5>");
                        }
                        else if(isset($_GET['erronomesenha'])){
                            echo("<h5><font color=\"#ff6b61\">".$_GET['erronomesenha']."</font></h5>");
                        }
                    ?>
                    <br>
                    <div class="paiIpt">
                        <div class="filhoIpt">
                    <input class="botao" type="submit" value="Logar">
                        </div>
                </form>
                <form method="post" action="index.php">
                    <div class="filhoIpt">
                        <input class="botao" type="submit" value="Voltar">
                    </div>
                    </div>
                </form>
                </div>
                </div>
                <div class="caveira">
                </div>
            </div>
    </body>
</html>