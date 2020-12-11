<?php
//NÃO TIRAR ISSO DA PAGINA!!
include("../Controllers/verify_login.php"); //php PARA VERFICIAR SE O USUÁRIO ESTÁ LOGADO!!
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
    <link rel="stylesheet" href="../Style/components/dashboard-header.css">
    <!--BS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--FONT-->
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

    <title>Rolê de Rep</title>

</head>

<body onload="hora()">
    <?php 
        include("Modais_usuario_index.php/modais.php");
        include("components/dashboard_header.php"); 
    ?>
    <!-- BTN CADASTRAR EVENTO -->
    <button id="contact-btn" href="#modal-contato" data-toggle="modal" data-target="#modal-addEvent"> <img src="../assets/add.png" class="img-actions"></button>
   
    <!--BEM VINDO-->
    <main>
        <h1 class="titulo-principal"> <?php echo "Olá, seja bem vindo ao sistema: " . $_SESSION['usu_username'] . " !"; ?></h1>

    </main>

    <!--MEUS EVENTOS-->
    <section>
        <div class="titulo-rank text-center">
            <h2 class="events-title"><b>MEUS EVENTOS</b></h2>
            <hr class="hr">
        </div>
        <div class="tabela-eventos">
            <table class="table table-striped table-dark mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NOME</th>
                        <th scope="col">DATA EVENTO</th>
                        <th scope="col" style="text-align: center;">AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Tusca</td>
                        <td>22/05</td>
                        <td id="actions-column">
                            <button type="button" title="Adicionar Custos" data-toggle="modal" data-target="#modal-adicionar-custos" >
                                <img src="../assets/plus.svg" alt="adicionar" width="50" heigth="50">
                            </button>
                            <button type="button" title="Editar evento" data-toggle="modal" data-target="#modal-adicionar-custos" >
                                <img src="../assets/pencil.svg" class="img-actions">
                            </button>
                            <button type="button" title="Visualizar relatório" data-toggle="modal" data-target="#modal-adicionar-custos" >
                                <img src="../assets/report.svg" class="img-actions">
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Abdubixos</td>
                        <td>10/02</td>
                        <td id="actions-column">
                            <button type="button" title="Adicionar Custos" data-toggle="modal" data-target="#modal-adicionar-custos" >
                                <img src="../assets/plus.svg" alt="adicionar" width="50" heigth="50">
                            </button>
                            <button type="button" title="Editar evento" data-toggle="modal" data-target="#modal-adicionar-custos" >
                                <img src="../assets/pencil.svg" class="img-actions">
                            </button>
                            <button type="button" title="Visualizar relatório" data-toggle="modal" data-target="#modal-adicionar-custos" >
                                <img src="../assets/report.svg" class="img-actions">
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!--BS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="../JS/script.js"></script>
    <script type="text/javascript">
        function typeWrite(elemento) {
            const textoArray = elemento.innerHTML.split('');
            elemento.innerHTML = ' ';
            textoArray.forEach(function(letra, i) {

                setTimeout(function() {
                    elemento.innerHTML += letra;
                }, 75 * i)

            });
        }
        const titulo = document.querySelector('.titulo-principal');
        typeWrite(titulo);

        function hora() {
            var date = new Date();
            document.getElementById("botao-hora").innerHTML = date.getHours() + ":" + date.getMinutes();
        }

            $('#myModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var usu_id = button.data('whatever_id')  
            var usu_nome= button.data('whatever_nome')
            var usu_sobrenome = button.data('whatever_usu_sobrenome')
            var usu_email = button.data('whatever_email')
            var usu_username = button.data('whatever_username')
            var usu_senha = button.data('whatever_usu_senha')
            var usu_cpf = button.data('whatever_cpf')
            var usu_data_nasc = button.data('whatever_data_nasc')
            var usu_telefone = button.data('whatever_usu_telefone')
            var usu_genero = button.data('whatever_usu_genero')

            var modal = $(this)

             modal.find('#name').val(usu_nome)
             modal.find('#Sobrenome').val(usu_sobrenome)
             modal.find('#dtnasc').val(usu_data_nasc)
             modal.find('#cpf').val(usu_cpf)
             modal.find('#genero').val(usu_genero)
             modal.find('#telefone').val(usu_telefone)
             modal.find('#email').val(usu_email)
             modal.find('#username').val(usu_username)
             modal.find('#senha_usu').val(usu_senha)
             modal.find('#id_usuario').val(usu_id)
           
    })
    </script>

</body>

</html>