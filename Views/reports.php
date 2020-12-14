<?php
//php PARA VERFICIAR SE O USUÁRIO ESTÁ LOGADO!!
include("../Controllers/verify_login.php"); 
//PRA PEGAR OS CAMPOS DO BD, OLHAR A FUNCAO User_logado NA CLASSE USUARIO.
//echo"Olá, seja bem vindo<b> ".$_SESSION['usu_nome']."</b> ao sistema !! <br> O seu email é:".$_SESSION['usu_email']."";
//echo"<br>";

//echo "<a href='../Controllers/sair.php'> Clique aqui para Sair </a>"; 
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="../Style/dashboard.css">
    <link rel="stylesheet" href="../Style/reports.css">
    <link rel="stylesheet" href="../Style/components/modals/dashboard_modals.css">
    <link rel="stylesheet" href="../Style/components/dashboard-header.css">
    <!--BS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="../JS/script.js"></script>
    <!--FONT-->
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

    <title>Rolê de Rep</title>
</head>

<body onload="hora()">
  <?php 
      include("components/modals/dashboard_modals.php");
      include("components/dashboard_header.php"); 
  ?>
  <main>
    <ul id="reports-tabs" class="nav nav-tabs" data-tabs="tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#custos-variaveis" data-toggle="tab">Custos variaveis</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#custos-fixos" data-toggle="tab">Custos fixos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#receita" data-toggle="tab">Receita</a>
      </li>
    </ul>
    <div id="tab-content" class="tab-content">
      <section class="tab-pane active" id="custos-variaveis">
        <h1>Custos variaveis</h1>
        <div class="tabela-custos-variaveis">
          <table class="table table-dark">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">PRODUTO</th>
                  <th scope="col">MEDIDA</th>
                  <th scope="col">PREÇO</th>
                  <th scope="col">QUANTIDADE ESPERADA</th>
                  <th scope="col">GASTO FINAL</th>
                  <th scope="col">OBSERVAÇÕES</th>
                </tr>
              </thead>
              <tbody>
                <tr>             
                  <th scope="row">1</th>
                  <td>Breja</td>
                  <td>Litros</td>
                  <td>R$ 10,00</td>
                  <td>50</td>
                  <td>R$ 500,00</td>
                  <td>Gelada</td>
                </tr>
                <tr>             
                  <th scope="row">1</th>
                  <td>Energético</td>
                  <td>Litros</td>
                  <td>R$ 10,00</td>
                  <td>30</td>
                  <td>R$ 300,00</td>
                  <td>Gelada</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <th scope="col">TOTAL FINAL:</th>
                  <td>R$ 800,00</td>
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
        <div class="tabela-custos-fixos">
          <table class="table table-dark">
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
                  <th scope="row">1</th>
                  <td>DJ</td>
                  <td>Atração</td>
                  <td>R$ 200,00</td>
                  <td>R$ 200,00</td>
                  <td>Bacana</td>
                </tr>
                <tr>             
                  <th scope="row">1</th>
                  <td>DJ</td>
                  <td>Local</td>
                  <td>R$ 300,00</td>
                  <td>R$ 300,00</td>
                  <td>Bom</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <th scope="col">TOTAL FINAL:</th>
                  <td>R$ 500,00</td>
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
      </section>
    </div>
  </main>
</body>
</html>