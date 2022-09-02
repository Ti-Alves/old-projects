<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Agendamento</title>
    <link rel="stylesheet" href="../css/style3.css">
</head>

<body>
    <div>
        <a href="./index-area-restrita.php"><input type="image" src="../img/voltar.png" class="voltar"></a>
    </div>
    <h1 class="h1Titulo">Agendamento</h1>
    <form action="cadastro-agendaConexaoBd.php" method="post">
        <div class="cxPai">
            <div class="center">
                <label>Nome do Cliente</label>
                <input type="text" class="campos" name="idCliente" id="txtNomeCliente" required>
                <br>
                <label>Data do Agendamento</label>
                <input type="date" class="campos" name="dataAgenda" id="dataAgenda" required>
                <br>
                <label>Horário</label>
                <input type="time" class="campos" name="horaAgenda" id="horaAgenda" required>
                <br>
                <fieldset>
                    <p class="subtitulo">Escolha os Serviços</p>
                    <?php
                    require_once '../classes/Servico.php';
                    $servico = new Servico();
                    $servicos = $servico->listarServicos();
                    foreach ($servicos as $servico) {
                        echo ("<input type='checkbox' name='Servicos[]' id='serv1' value = " . $servico['idServico'] . " >");
                        echo ("<label>" . $servico['textoServico'] . " </label>");
                        echo ("<br>");

                        //echo($servico . '<br>');
                    }
                    ?>


                </fieldset>


                <br>
                <input type="submit" class="button" value="Agendar">
            </div>
        </div>
        <!-- <?php
                require_once '../classes/Cliente.php';
                require_once '../classes/Servico.php';
                try {
                    $cliente = new Cliente();
                    $listacliente = $cliente->listar();

                    $servico = new Servico();
                    $listaservico = $servico->listar();
                } catch (Exception $e) {
                    echo '<pre>';
                    print_r($e);
                    echo '</pre>';
                    echo $e->getMessage();
                }
                ?>
               <?php
                foreach ($listacliente as $linha) {
                    echo ("<input value='" . $linha['idCliente'] . "'>" .
                        $linha['nomeCliente'] . "<input>");
                }
                ?>
              <?php
                foreach ($listaservico as $linha) {
                    echo ("<input value='" . $linha['Servicos'] . "'>" .
                        $linha['textoServico'] . "<input>");
                }
                ?> 
                
                -
               <?php
                require_once '../classes/Cliente.php';
                require_once '../classes/Servico.php';
                require_once '../classes/Agenda.php';
                try {


                    $agenda = new Agenda();
                    $listaagenda = $agenda->listarAgendamento();
                } catch (Exception $e) {
                    echo '<pre>';
                    print_r($e);
                    echo '</pre>';
                    echo $e->getMessage();
                }
                ?> 
                -
    </body>
</html>