<?php
session_start();
include ('../Classes/usuario.php');
$objUser= new usuario();

//VALIDAR O USUÁRIO
if ($_SESSION['usu_logado']) { // se ele tiver mesmo essa sessao(que foi passada a hora que ele logou) ele vai ficar na page
    $objUser->User_logado($_SESSION['usu_id']); // PASSEI O ID PRA FUNCIONAR O SELECT ALL 
    $timeout = 1800; // Tempo da sessao em segundos ( 30 min vai desconectar o cara)
    // Verifica se existe o parametro timeout
    if (isset($_SESSION['timeout'])) {
        // Calcula o tempo que ja se passou desde a cricao da sessao
        $duracao = time() - (int) $_SESSION['timeout'];

        // Verifica se ja expirou o tempo da sessao
        if ($duracao > $timeout) {
            // Destroi a sessao e cria uma nova
             header("location:../index.php");
            session_destroy();
            session_start();
        }
    }
    // Atualiza o timeout.
    $_SESSION['timeout'] = time();
} else {
    $_SESSION['login_incorreto_usu'] = "necessario_realizar_login";
    header("location:../index.php");
}
?>