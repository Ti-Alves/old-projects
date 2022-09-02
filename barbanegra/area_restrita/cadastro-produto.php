<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Produtos</title>
        <link rel="stylesheet" type="text/css" href="../css/style3.css">
    </head>
    <body>
    <div>
        <a href="./index-area-restrita.php"><input type="image" src="../img/voltar.png" class="voltar"></a>
    </div>
        <h1 class="h1Titulo">Produto</h1>
        <form action="./cadastro-produtoConexaoBd.php" method="post" 
            action="cadastro-produtoConexaoBd.php"
                enctype="multipart/form-data">
            <div class="cxPai">
                <div class="center">
                    <label>Nome do Produto</label>
                    <input class="campos" type="text" name="textoProduto" id="textoProduto" required>
                    <br>
                    <label>Descricao do Produto</label>
                    <input class="campos" type="text" name="descProduto" id="descProduto" required>
                    <br>
                    <label>Foto do Produto</label>
                    <input type="file" name="fotoProduto" id="fotoProduto" required>
                    <br>
                    <input class="button" type="submit" value="Cadastrar">
                </div>
        </div>
     </form> 
    </body>
</html>