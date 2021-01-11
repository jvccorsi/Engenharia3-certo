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
            $cst = $this->conexao->prepare("INSERT INTO $this->tabela (email,username,senha, nome, sobrenome, cpf, data_nasc, genero, telefone)" .
                "VALUES (:email, :username, :senha,:nome,:sobrenome, :cpf, :data_nasc, :genero, :telefone)");

            $cst->bindParam(":nome", $dados['name'], PDO::PARAM_STR);//ok
            $cst->bindParam(":genero", $dados['genero'], PDO::PARAM_STR);
            $cst->bindParam(":sobrenome", $dados['sobrenome'], PDO::PARAM_STR);//ok
            $cst->bindParam(":data_nasc", $dados['dtnasc'], PDO::PARAM_STR);//ok
            $cst->bindParam(":cpf", $dados['cpf'], PDO::PARAM_STR);//ok
            $cst->bindParam(":telefone", $dados['telefone'], PDO::PARAM_STR);//ok
            $cst->bindParam(":email", $dados['email_usu'], PDO::PARAM_STR);//ok
            $cst->bindParam(":username", $dados['username'], PDO::PARAM_STR);//ok
            $cst->bindParam(":senha", $dados['senha'], PDO::PARAM_STR);//ok
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
            $cst = $this->conexao->prepare("SELECT id_usuario,email,senha from $this->tabela WHERE email=:usu_email AND senha=:usu_senha LIMIT 1");
            $cst->bindParam(":usu_email", $dado['email'], PDO::PARAM_STR);
            $cst->bindParam(":usu_senha", $dado['senha'], PDO::PARAM_STR);
            $cst->execute();
            
            return $cst->rowCount() ? $cst->fetch() : false; 

        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function User_logado($dado)
    { //USAR AQUI PARA DAR OS SELECT NAS PAGES...
        try {
            $this->codigo_usuario = $dado; //id_usuario DO USUÁRIO
            $cst = $this->conexao->prepare("SELECT * from $this->tabela WHERE id_usuario=:usu_id");
            $cst->bindParam(":usu_id", $this->codigo_usuario, PDO::PARAM_INT);
            $cst->execute();
            $resultado = $cst->fetch(); // SALVA OS DADOS DO BD NA FORMA DE UM ARRAY.
            $_SESSION['usu_nome'] = $resultado['nome'];   
            $_SESSION['usu_sobrenome'] = $resultado['sobrenome'];  
            $_SESSION['usu_email'] = $resultado['email'];   
            $_SESSION['usu_username'] = $resultado['username'];   
            $_SESSION['usu_senha'] = $resultado['senha'];   
            $_SESSION['usu_cpf'] = $resultado['cpf'];   
            $_SESSION['usu_data_nasc'] = $resultado['data_nasc'];   
            $_SESSION['usu_genero'] = $resultado['genero']; 
            $_SESSION['usu_telefone'] = $resultado['telefone']; 
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function Recuperar_Senha($email)
    {
        try {
            $cst = $this->conexao->prepare("SELECT * from $this->tabela WHERE email=:usu_email");
            $cst->bindParam(":usu_email", $email, PDO::PARAM_STR);
            $cst->execute();
            $rs = $cst->fetch();
            if ($rs) { //se existir o usuário com o email informado

                $chaveCorreta = sha1($rs["id_usuario"] . $rs["senha"]);
                return $chaveCorreta;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return 'error ' . $e->getMessage();
        }
    }
    public function CheckChave($email, $chave)
    { //Checar se a chave do usuário é válida mesmo.         
        $cst = $this->conexao->prepare("SELECT * from $this->tabela WHERE  email=:usu_email");
        $cst->bindParam(":usu_email", $email, PDO::PARAM_STR);
        $cst->execute();
        $result = $cst->fetch();
        if ($result) { //se existir o usuário
            $chaveCorreta = sha1($result["id_usuario"] . $result["senha"]);

            if ($chave == $chaveCorreta) {

                return $result["id_usuario"];
            }
        } else {
            return false;
        }
    }
    public function setNovaSenha($nova_senha, $id)
    { //Alterar a nova senha do usuário        
        $cst = $this->conexao->prepare("UPDATE $this->tabela SET senha=:NOVA_SENHA WHERE id_usuario=:id_usu");
        $cst->bindParam(":NOVA_SENHA", $nova_senha, PDO::PARAM_STR);
        $cst->bindParam(":id_usu", $id, PDO::PARAM_INT);
        $cst->execute();
    }
    public function editar_dados_pessoais($dados)
    { //Alterar a nova senha do usuário        
     try{   
        $cst = $this->conexao->prepare("UPDATE $this->tabela SET email=:email_usu,nome =:nome_usu ,sobrenome=:usu_sobrenome,cpf =:usu_cpf, data_nasc=:usu_dtnasc, genero=:usu_genero, telefone =:usu_telefone, senha =:usu_senha, username=:usu_username  WHERE id_usuario=:id_usu");
        $cst->bindParam(":email_usu", $dados['email'], PDO::PARAM_STR);
        $cst->bindParam(":nome_usu", $dados['name'], PDO::PARAM_STR);
        $cst->bindParam(":usu_sobrenome", $dados['Sobrenome'], PDO::PARAM_STR);
        $cst->bindParam(":usu_cpf", $dados['cpf'], PDO::PARAM_STR);
        $cst->bindParam(":usu_dtnasc", $dados['dtnasc'], PDO::PARAM_STR);
        $cst->bindParam(":usu_genero", $dados['genero'], PDO::PARAM_STR);
        $cst->bindParam(":usu_telefone", $dados['telefone'], PDO::PARAM_STR);
        $cst->bindParam(":usu_username", $dados['username'], PDO::PARAM_STR);
        $cst->bindParam(":usu_senha", $dados['senha_usu'], PDO::PARAM_STR);

        $cst->bindParam(":id_usu", $dados['id_usu'], PDO::PARAM_INT);

        
        $cst->execute();
        return true;
     }
     catch (PDOException $ex) {
        return 'error ' . $ex->getMessage();
     }
    }
}
