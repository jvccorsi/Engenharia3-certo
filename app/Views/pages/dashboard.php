<?php
    include("../../Controllers/users/verify_login.php"); 
    include("../../Controllers/events/get_all.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="../styles/dashboard.css">
    <link rel="stylesheet" href="../styles/components/modals/dashboard_modals.css">
    <link rel="stylesheet" href="../styles/components/dashboard-header.css">
    <!--BS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
    <script src="../js/handleEventData.js"></script>
    <!--FONT-->
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

    <title>Rolê de Rep</title>
</head>

<body>
    <?php 
        include("../components/modals/dashboard_modals.php");
        include("../components/dashboard_header.php"); 
    ?>
    <!-- BTN CADASTRAR EVENTO -->
    <button id="add-event" data-toggle="modal" data-target="#modal-manter-evento"> 
        <img src="../assets/plus.svg" class="img-actions">
    </button>

    <!--MEUS EVENTOS-->
    <main>
        <div class="titulo-rank text-center">
            <h2 class="events-title"><b>MEUS EVENTOS</b></h2>
            <hr class="hr">
        </div>
        <div class="tabela-eventos">
            <table id="events-table" class="table table-striped table-dark mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NOME</th>
                        <th scope="col">DATA EVENTO</th>
                        <th scope="col" style="text-align: center;">AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($events as $event){ ?>
                        <tr>
                            <td><?php echo $event['id_evento']?></td>
                            <td><?php echo $event['nome_evento']?></td>
                            <td><?php echo $event['data_evento']?></td>
                            <td class="actions-column">                        
                                <div class="btn-group">
                                    <a href="reports.php?id_evento=<?php echo $event['id_evento'];?>" title="Visualizar relatório">
                                        <img src="../assets/report.svg" class="img-actions">
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <button type="button" id="dropdownCostsButton" title="Adicionar Custos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="../assets/money.svg" alt="adicionar">
                                    </button>
                                    <div class="dropdown-menu" id="dropdownCostsButton" aria-labelledby="dropdownCostsButton">
                                        <a class="dropdown-item action" data-toggle="modal" data-target="#modal-adicionar-custos-variaveis" 
                                        href="#" data-whatever="<?php echo $event['id_evento']?>">Variável</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item action" data-toggle="modal" data-target="#modal-adicionar-custos-fixos" href="#" data-whatever="<?php echo $event['id_evento']?>">Fixo</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item action" data-toggle="modal" data-target="#modal-adicionar-receita" href="#" data-whatever="<?php echo $event['id_evento']?>">Receita</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" id="dropdownEditButton" title="Editar evento" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="../assets/gear.svg" class="img-actions">
                                    </button>
                                    <div class="dropdown-menu" id="dropdownEditButton" aria-labelledby="dropdownEditButton">
                                        <a class="dropdown-item action edit-link" data-toggle="modal" data-target="#modal-manter-evento" href="#" data-whatever="<?php echo $event['id_evento']?>">Editar</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item action" href="#" data-whatever="<?php echo $event['id_evento']?>" data-toggle="modal" data-target="#modal-excluir-evento">Excluir</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>