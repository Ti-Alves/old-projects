<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Cliente</title>
        <link rel="stylesheet" type="text/css" href="../css/style3.css">
    </head>
    <body>
        <div>
            <a href="./index-area-restrita.php"><input type="image" src="../img/voltar.png" class="voltar"></a>
        </div>
        <h1 class="h1Titulo">Cadastro Cliente</h1>
        <form action="cadastro-clienteConexaoBd.php" method="post">
            <div class="cxPai">
                <div class="center">
                    <label>Nome do Cliente</label>
                    <input  class="campos" type="text" name="txtNomeCliente" id="txtNomeCliente" required>
                    <br>
                    <label>Cpf do Cliente</label>
                    <input class="campos" type="text" name="txtCpf" id="txtCpf" required>
                    <br>
                    <label>Celular</label>
                    <input  class="campos" type="text" name="txtCelular" id="txtCelular" required>
                    <br>
                    <input class="button" type="submit" value="Cadastrar">
                </div>
            </div>
          </form> 
    </body>
</html>