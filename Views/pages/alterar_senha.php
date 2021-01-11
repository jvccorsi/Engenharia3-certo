<?php
session_start();

?>
<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--FONT-->
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <title>Recuperar Senha </title>

</head>

<body>
    <?php
    $chave = "";
    if ($_GET["chave"]) { // se tiver a chave ( Se receber algum parâmetro) 
        $chave = $_GET["chave"];
    ?>

        <h1 class="text-center mt-5"> Alteração de Senha </h1>
        <div id="login" class="container ">
            <form action="../Controllers/gestao_mudar_senha.php" method="post" id="alterar_senha" class="container my-4">
                <input type="hidden" name="chave" id="chave" value="<?php echo $chave; ?>" />
                <div class="row form-group">
                    <div class="col">
                        E-mail
                        <input class="form-control" type="email" name="email_recu_senha" id="email_recu_senha" required placeholder="Confirme seu email:" maxlength="100">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col">
                        Nova senha
                        <input class="form-control" type="password" name="nova_senha" id="nova_senha" required placeholder="Digite sua nova senha:" maxlength="8">
                    </div>
                </div>
                <div class="text-center">
                    <input class="btn btn-primary col-md-2" type="submit" value="Recuperar"></br>
                </div>
            </form>
        </div>


    <?php
    } else { // se não tiver a chave 
        $_SESSION['pagina_nao_encontrada'] = "pagina_nao_encontrada";
        header("Location: ../index.php");
    }
    ?>

</body>
<!--BS-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>

</html>