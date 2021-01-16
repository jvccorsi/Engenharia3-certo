<?php
  include("../../Controllers/users/verify_login.php"); 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="../styles/dashboard.css">
    <link rel="stylesheet" href="../styles/reports.css">
    <link rel="stylesheet" href="../styles/components/modals/dashboard_modals.css">
    <link rel="stylesheet" href="../styles/components/dashboard-header.css">
    <!--BS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
    <script src="../js/handleCostsData.js"></script>
    <!--FONT-->
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

    <title>Rolê de Rep</title>
</head>

<body>
  <?php 
      include("../components/modals/dashboard_modals.php");
      include("../components/dashboard_header.php"); 
  ?>
  <main>
    <ul id="reports-tabs" class="nav nav-tabs" data-tabs="tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#custos-variaveis" data-toggle="tab">Custos variaveis</a>
      </li>
      <li class="nav-item">
        <a id="fixed-costs-link" class="nav-link" href="#custos-fixos" data-toggle="tab" onclick="getAllFixedCosts()">Custos fixos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#receita" data-toggle="tab">Receita</a>
      </li>
    </ul>
    <div id="tab-content" class="tab-content">
      <section class="tab-pane active" id="custos-variaveis">
        <h1>Custos variaveis</h1>
        <div>
          <table id="variable-costs-table" class="table table-dark">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">PRODUTO</th>
                  <th scope="col">TIPO</th>
                  <th scope="col">MEDIDA</th>
                  <th scope="col">PREÇO</th>
                  <th scope="col">QUANTIDADE ESPERADA</th>
                  <th scope="col">GASTO ESPERADO</th>
                  <th scope="col">OBSERVAÇÕES</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"></th>
                  <th scope="col">TOTAL FINAL:</th>
                  <td id="final-variable-cost-column">R$</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
          </table>
        </div>
      </section>
      <section class="tab-pane" id="custos-fixos">
        <h1>Custos fixos</h1>
        <div>
          <table id="fixed-costs-table" class="table table-dark">
              <thead>
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">ITEM</th>
                      <th scope="col">TIPO</th>
                      <th scope="col">PREÇO</th>
                      <th scope="col">GASTO FINAL</th>
                      <th scope="col">OBSERVAÇÕES</th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"></th>
                  <th scope="col">TOTAL FINAL:</th>
                  <td id="final-fixed-cost-column">R$ </td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
          </table>
        </div>
      </section>
      <section class="tab-pane" id="receita">
        <h1>Receita</h1>
        <div id="income-container" class="container-fluid">
          <div class="row">
            <div id="mini-box-column" class="col-md-5">
              <div id="revenue-row" class="row">
                <div class="col-md-6">
                  <div class="card d-flex align-items-center">
                    <h5>Entrada esperada</h5>  
                    <h4 class="green-title">$1410,00</h4>  
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card d-flex align-items-center">
                    <h5>Saída esperada</h5>  
                    <h4 class="red-title">$1300,00</h4>  
                  </div>
                </div>
              </div>
              <div id="ticket-row" class="row"> 
                <div class="col-md-12">
                  <div class="card">
                    <div class="row">
                      <div class="col-sm-6 d-flex align-items-center flex-column">
                        <h5>Ingressos disponíveis</h5>  
                        <h4>40</h4>  
                      </div>
                      <div class="col-sm-6 d-flex align-items-center flex-column">
                        <h5>Ingressos vendidos</h5>  
                        <h4>47</h4>  
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <ul class="list-group">
                          <li class="list-group-item">1º lote (R$ 30,00) = esgotado</li>
                          <li class="list-group-item">2º lote (R$ 40,00) = 40</li>
                          <li class="list-group-item">3º lote (R$ 60,00) = fechado</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            <div class="col-md-7">
              <div class="card d-flex align-items-center">
                <h5>Perpectiva gráfica</h5>  
                <img src="../assets/graphic_example.png">
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
</body>
</html>