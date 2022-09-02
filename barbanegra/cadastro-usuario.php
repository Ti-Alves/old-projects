<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Usuario</title>
</head>

<body>
    <h1>Bem Vindo</h1>
    <form action="./cadastro-usuarioConexaoBd.php" method="post">
        <label>Nome</label>
        <input type="text" name="txtNomeUsuario" id="txtNomeUsuario">
        <br>
        <label>Login</label>
        <input type="text" name="txtLoginUsuario" id="txtLoginUsuario">
        <br>
        <label>Senha</label>
        <input type="text" name="txtSenha" id="txtSenha">
        <br>
        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>