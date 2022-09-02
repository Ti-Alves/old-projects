<?php

require_once '../classes/Agenda.php';
require_once '../classes/Cliente.php';
require_once '../classes/Servico.php';

$agenda = new Agenda();
$cliente = new Cliente();
$servico = new Servico();
$listacliente = $agenda->listarAgendamento();
0

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Consulta Agendamento</title>
    <link rel="stylesheet" href="../css/style3.css">
</head>

<body>
    <div>
        <a href="./index-area-restrita.php"><input type="image" src="../img/voltar.png" class="voltar"></a>
    </div>
    <h1 class="h1Titulo">Agendamento</h1>
    <fieldset>
        <table>
            <tr>
                <td>
                    codigo Cliente
                </td>
                <td>
                    Nome Cliente
                </td>
                <td>
                    Nome Serviço
                </td>
                <td>
                    data do Agendamento
                </td>
                <td>
                    Hora do agendamento
                </td>
            </tr>
            <?php
            foreach ($listacliente as $linha) {
                $nomeCliente = $cliente->getNameByIdCliente($linha['idCliente']);
                $nomeServico = $servico->getNameByIdServico($linha['idServico']);
                echo ("     <tr>
                    <td>
                        echo ($linha[idCliente] . '<br>');
                    </td>
                    <td>
                        ($nomeCliente[0] . < br > );
                    </td>
                    <td>
                        
                        ($nomeServico[0] . '< br >');
                    </td>
                    <td>
                        
                        ($linha[dataAgenda] . '<br>');
                    </td>
                    <td>
                          ($linha[horaAgenda] . '<br>');
                    </td>
                </tr>
                ");
            }
            ?>
        </table>
    </fieldset>

</body>

</html>