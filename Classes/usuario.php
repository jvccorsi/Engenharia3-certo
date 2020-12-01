<?php
include("../config.php");
require_once ROOT_PATH . '/Conexao_BD/conexao.php'; //Não alterar o link da conexão. Lembrando que fica salvo as alterações ;)

class usuario
{
    private $conexao;
    private $tabela;

    function __construct()
    {
        $conn = new Conexao();
        $this->conexao = $conn->getConexao();
        $this->tabela = "usuarios";
    }

    public function queryInsert($dados)
    {
        try {
            $cst = $this->conexao->prepare("INSERT INTO $this->tabela (nome_usu, data_nascimento,cpf,telefone, email, username, senha_usu)" .
                "VALUES (:nome_usu, :data_nascimento, :cpf,:telefone, :email, :username, :senha_usu)");

            $cst->bindParam(":nome_usu", $dados['name'], PDO::PARAM_STR);
            $cst->bindParam(":data_nascimento", $dados['dtnasc'], PDO::PARAM_STR);
            $cst->bindParam(":cpf", $dados['cpf'], PDO::PARAM_STR);
            $cst->bindParam(":telefone", $dados['telefone'], PDO::PARAM_STR);
            $cst->bindParam(":email", $dados['email_usu'], PDO::PARAM_STR);
            $cst->bindParam(":username", $dados['username'], PDO::PARAM_STR);
            $cst->bindParam(":senha_usu", $dados['senha'], PDO::PARAM_STR);
            $cst->execute();
            return true;
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }
    public function logarUser($dado)
    {
        try {

            //Cst = Consulte Stament 
            $cst = $this->conexao->prepare("SELECT id,email,senha_usu from $this->tabela WHERE email=:usu_email AND senha_usu=:usu_senha LIMIT 1");
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
                $_SESSION['usu_logado'] = true;
                $_SESSION['usu_id'] = $resultado['id']; //o valor que veio do BD vai ser salvo nessa sessao.
                header("Location:../Views/usuario_index.php");
            }
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function User_logado($dado)
    { //USAR AQUI PARA DAR OS SELECT NAS PAGES...
        try {
            $this->codigo_usuario = $dado; //ID DO USUÁRIO
            $cst = $this->conexao->prepare("SELECT * from $this->tabela WHERE id=:usu_id");
            $cst->bindParam(":usu_id", $this->codigo_usuario, PDO::PARAM_INT);
            $cst->execute();
            $resultado = $cst->fetch(); // SALVA OS DADOS DO BD NA FORMA DE UM ARRAY.
            $_SESSION['usu_nome'] = $resultado['nome_usu']; // SALVA NA SESSION NOME_USUARIO O NOME DO USUÁRIO.
            $_SESSION['usu_email'] = $resultado['email']; // SALVA NA SESSION NOME_USUARIO O NOME DO USUÁRIO.
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function Recuperar_Senha($email){
        try{
            $cst = $this->conexao->prepare("SELECT * from $this->tabela WHERE email=:usu_email");
            $cst->bindParam(":usu_email", $email, PDO::PARAM_STR);
            $cst->execute();
            $rs = $cst->fetch(); 
            if ($rs) { //se existir o usuário com o email informado

                $chaveCorreta = sha1($rs["id"] . $rs["senha_usu"]);
                return $chaveCorreta;
                
            } else {
                return false;
            }

        }catch(PDOException $e){
            return 'error '.$e->getMessage();
        }

    }
    public function CheckChave($email,$chave) { //Checar se a chave do usuário é válida mesmo.         
        $cst = $this->conexao->prepare("SELECT * from $this->tabela WHERE  email=:usu_email");
        $cst->bindParam(":usu_email", $email, PDO::PARAM_STR);
        $cst->execute();
        $result = $cst->fetch(); 
        if ($result) { //se existir o usuário
            $chaveCorreta = sha1($result["id"] . $result["senha_usu"]);
            
            if($chave == $chaveCorreta){
                
                   return $result["id"];
            }   
        } else {
            return false;
        }
    }
    public function setNovaSenha($nova_senha,$id) { //Alterar a nova senha do usuário        
        $cst = $this->conexao->prepare("UPDATE $this->tabela SET senha_usu=:NOVA_SENHA WHERE id=:id_usu");
        $cst->bindParam(":NOVA_SENHA", $nova_senha, PDO::PARAM_STR);
        $cst->bindParam(":id_usu", $id, PDO::PARAM_INT);       
        $cst->execute();    
    }


}
