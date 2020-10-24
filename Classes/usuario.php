<?php
include("../config.php");
require_once ROOT_PATH.'/Conexao_BD/conexao.php'; //Não alterar o link da conexão. Lembrando que fica salvo as alterações ;)

class usuario {
    private $conexao;
    private $tabela;

    function __construct() {
        $conn = new Conexao();
        $this->conexao = $conn->getConexao();
        $this->tabela = "usuarios";
    }

    public function logarUser($dado) {
        try {
            //Cst = Consulte Stament
            $cst = $this->conexao->prepare("SELECT id,email,senha from $this->tabela WHERE email=:usu_email AND senha=:usu_senha LIMIT 1");
            $cst->bindParam(":usu_email", $dado['email'], PDO::PARAM_STR);
            $cst->bindParam(":usu_senha", $dado['senha'], PDO::PARAM_STR);
            $cst->execute();
            if ($cst->rowCount() == 0) { //vai contar quantos registros eu tenho no $cs. Se for igual a 0 o usuario não existe
                session_start();
                $_SESSION['login_incorreto_usu'] = "erro_senha";
                header("location:../index.php");
            } else { // Se usuário existir, ou seja, rowCount != 0
                session_start(); // inicia a sessão
                $resultado = $cst->fetch(); // vai trazer as informações do BD caso o usu existir
                $_SESSION['usu_logado']= true;
                $_SESSION['usu_id']= $resultado['id']; //o valor que veio do BD vai ser salvo nessa sessao.
                $_SESSION['usu_email']= $resultado['email'];
                header("Location:../Views/pagina_usu.php");                 
            }
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function User_logado($dado) { //USAR AQUI PARA DAR OS SELECT NAS PAGES...
    try{
        $this->codigo_usuario = $dado; //ID DO USUÁRIO
        $cst = $this->conexao->prepare("SELECT * from $this->tabela WHERE id=:usu_id");
        $cst->bindParam(":usu_id", $this->codigo_usuario, PDO::PARAM_INT);
        $cst->execute();
        $resultado = $cst->fetch(); // SALVOU NO ARRAY FETCH- BUSCAR PELO NOME DO CAMPO
        $_SESSION['usu_nome'] = $resultado['nome']; // SALVA NA SESSION NOME_USUARIO O NOME DO USUÁRIO.
        $_SESSION['usu_email'] = $resultado['email']; // SALVA NA SESSION NOME_USUARIO O NOME DO USUÁRIO.
    }
    catch (PDOException $ex) {
        return 'error ' . $ex->getMessage();
    }
}


}