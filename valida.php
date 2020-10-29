<?php
    require_once "conexao/conexao.php";
    session_start();
    $btnLogin = filter_input(INPUT_POST, 'btnlogin', FILTER_SANITIZE_STRING);

    if($btnLogin){//Se for clicado no botao com o name btnLogin
        $email_usu = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);//Pega campo com name email
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING); //salvando a senha do formulario na variave senha
        $result_usuario = "SELECT id, nome, email, senha FROM usuarios WHERE email ='$email_usu' 
        LIMIT 1";
        $resultado_busca_usu = mysqli_query($conn, $result_usuario); //fiz a consulta ao BD
        if($resultado_busca_usu){ //Se existir algum dado igual ao determinado pelo select:
            $row_usuario = mysqli_fetch_assoc($resultado_busca_usu); // Vai salvar o resultado que veio do resulta_usuario
            if($senha == $row_usuario['senha']){ //Se a senha do formulario login for igual a senha que esta cadastrada no email, então ok.
               $_SESSION['id'] = $row_usuario['id']; //o valor que veio do BD vai ser salvo nessa sessao.
               $_SESSION['nome']= $row_usuario['nome'];
               $_SESSION['email']= $row_usuario['email'];
                header("Location: pagina_usu.php");
            }
            else{//Senão, siginifca que a senha está incorreta !!
                echo ''.$senha.'-'.$row_usuario['senha'].'';
                $_SESSION['msg'] = "erro_senha";
                header("Location: index.php");
                
            }
        }
    }
    else{
        $_SESSION['msg'] = "Página não encontrada"; //vai armazenar esse valor na sessao msg.
        header("Location:index.php");
    }
?>