<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar Serviço</title>
    <link rel="stylesheet" type="text/css" href="../css/style3.css">
</head>

<body>
    <div>
        <a href="./index-area-restrita.php"><input type="image" src="../img/voltar.png" class="voltar"></a>
    </div>
    <h1 class="h1Titulo">Cadastrar Serviço</h1>
    <!-- <form action="./cadastro-servicoConexaoBd.php" method="post"> -->
    <div class="cxPai">
        <div class="center">
            <form method="post" action="cadastro-servicoConexaoBd.php" enctype="multipart/form-data">
                <label>Nome do Serviço</label>
                <input class="campos" type="text" name="textoServico" id="textoServico">
                <br>
                <label>Descrição do Serviço</label>
                <input class="campos" type="text" name="descServico" id="descServico">
                <br>
                <label>Foto do Produto</label>
                <input type="file" name="fotoServico" id="fotoServico">
                <br>
                <input class="button" type="submit" value="Cadastrar">
            </form>
        </div>
    </div>
</body>

</html>