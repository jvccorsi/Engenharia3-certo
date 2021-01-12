<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer.php';
require 'SMTP.php';

class Enviar_Email
{

    public function email($destinatario, $remetente, $remetente_nome, $assunto_email, $corpo_email)
    {
        $GUSER = "equipe.rolederep@gmail.com";
        $Gmail_senha = "rolederep123"; // Senha do  portal
        //NAO MEXER NESSA PARTE DO CODIGO (parte que lida com o envio do email
         $mail = new PHPMailer(true);
        $mail->IsSMTP();  // Ativar SMTP

        $mail->SMTPDebug = 0;               // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
        $mail->CharSet = 'UTF-8';  
        $mail->SMTPAuth = true;             // Autenticação ativada
        $mail->SMTPSecure = 'tls';          // TLS REQUERIDO pelo GMail
        $mail->IsHTML(true);
        $mail->Host = 'smtp.gmail.com';   // SMTP utilizado
        $mail->Port = 587;               // A porta 587 deverá estar aberta em seu servidor
        $mail->Username = $GUSER;       //pegar o email do portal (Dados do email de saida)
        $mail->Password = $Gmail_senha; //pegar a senha do portal(Senha do email de saida)

        $mail->SetFrom($remetente, $remetente_nome);
        $mail->Subject = $assunto_email;
        $mail->Body = $corpo_email;
        $mail->AddAddress($destinatario);


        if($mail->send()) {
            echo 'enviou';
        } else {
          echo "Erro ao enviar mensagem " . $mail->ErrorInfo;
        }
}
}
