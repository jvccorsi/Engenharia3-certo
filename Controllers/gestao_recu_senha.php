<?php

session_start();
include ('../Classes/usuario.php');
require_once '../assets/PHPMailer/src/Enviar_Email.php';

$obj_User = new usuario();
$obj_Email = new Enviar_Email();
$email = $_POST['email_recuperar_senha'];

$chave = $obj_User->Recuperar_Senha($email);

if($chave){
    $chave_acesso = "http://localhost/git/Views/alterar_senha.php?chave=".$chave;
    echo '<a href='.$chave_acesso.'> Link recu senha </a>';
    
    $corpo_email ="
    
    <body style='margin: 0; padding: 0;'>
    <t border='0' cellpadding='0' cellspacing='0' width='100%'>
        <td style='padding: 20px 0 30px 0;'>
        <tr>
            <td>
                <table align='center' style='border: 2px solid #cccccc;'cellpadding='0' cellspacing='0' width='600'>
                    <tr>
                        <td align='center' bgcolor='white' style='padding: 40px 0 30px 0; height:200px'>
                        <img src='https://i.ibb.co/Hp01S20/Logo-white.png' alt='logo-1' border='0'>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor='#ffffff' style='padding: 40px 30px 40px 30px;'>
                            <table border='0' cellpadding='0' cellspacing='0' width='100%'>
                                <tr>
                                    <td style='color: #1f406b; font-family: UniSan; font-size: 1.5em;'>
                                        <b>Recuperação de Senha</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td style='padding: 20px 0 30px 0;color: #153643; font-family: UniSans; font-size: 16px; line-height: 20px;'>
                                        Olá, tudo bem? <br> <br>
                                        Você está recebendo este e-mail porque você solicitou a redefinição da senha de sua conta no portal Rolê de Rep.
                                        <br> <br>
                                        Por favor, <a href=". $chave_acesso."> Clique aqui </a> para escolher uma nova senha:
                                        <br> <br>
                                        Ou copie e cole este link no seu navegador: " .  $chave_acesso . "
                                        <br> <br>
                                        Atenciosamente,<br> Equipe Rolê de Rep!!
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor='#14181E' styl14181Ee='padding: 30px 30px 30px 30px;font-family: UniSans, UniSans; font-size: 16px; line-height: 20px;'>
                            <table border='0' cellpadding='0' cellspacing='0' width='100%'>
                                <tr>
                                    <td style='color: #fff; font-family: UniSans; text-align: center'>
                                        <small> © 2020 - Todos os Direitos Reservados - Rolê de Rep<br/></small>               
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <td style='padding: 20px 0 30px 0;'>
    </table>
    </body>";
    echo $corpo_email;
    $destinatario = "j218asdasdas847@dac.unicamp.br";
    $destinatario_nome = "Joao";
    $assunto = "teste";

    echo $controler =  $obj_Email->email($destinatario, "equipe.rolederep@gmail.com", "Equipe Role de Rep", "Test", $corpo_email);
}
else{
    echo 'ERROR: EMAIL NAO ENCONTRADO!!';
}






?>