    <?php
    //MODAL LOGIN INCORRETO
    if (isset($_SESSION['login_incorreto_usu'])) {
        if ($_SESSION['login_incorreto_usu'] == "erro_senha") {
    ?>
            <script>
                function abreModal() {
                    $("#myModal").modal({
                        show: true
                    });
                }
                setTimeout(abreModal, 10);
            </script>
        <?php
        }
        if ($_SESSION['login_incorreto_usu'] == "necessario_realizar_login") {
        ?>
            <script>
                function abreModal() {
                    $("#myModaRealizarLogin").modal({
                        show: true
                    });
                }
                setTimeout(abreModal, 10);
            </script>
    <?php
        }
        unset($_SESSION['login_incorreto_usu']);
    }

    ?>

    <?php
    //MODAL SAIR DO SISTEMA
    if (isset($_SESSION['msg'])) {
        if ($_SESSION['msg'] == "deslogar_usu") {
    ?>
            <script>
                function abreModal() {
                    $("#myModalSair").modal({
                        show: true
                    });
                }
                setTimeout(abreModal, 10);
            </script>
    <?php
        }
        unset($_SESSION['msg']);
    }
    ?>
    <?php
    //MODAL CADASTRO USUARIO
    if (isset($_SESSION['msg_cad_sucesso'])) {
        if ($_SESSION['msg_cad_sucesso'] == "sucesso") {
    ?>
            <script>
                function abreModal() {
                    $("#myModalCad_usuario").modal({
                        show: true
                    });
                }
                setTimeout(abreModal, 10);
            </script>
    <?php
        }
        unset($_SESSION['msg_cad_sucesso']);
    }
    ?>
    <?php
    //MODAL PAGINA NAO ENCONTRADA(RECU SENHA) 
    if (isset($_SESSION['pagina_nao_encontrada'])) {
        if ($_SESSION['pagina_nao_encontrada'] == "pagina_nao_encontrada") {
    ?>
            <script>
                function abreModal() {
                    $("#pagina_nao_encontrada").modal({
                        show: true
                    });
                }
                setTimeout(abreModal, 10);
            </script>
    <?php
        }
        unset($_SESSION['pagina_nao_encontrada']);
    }
    ?>

<?php
    //MODAL SENHA ALTERADA COM SUCESSO (RECU SENHA) 
    if (isset($_SESSION['sucess_password'])) {
        if ($_SESSION['sucess_password'] == "senha_alterada") {
    ?>
            <script>
                function abreModal() {
                    $("#senha_alterada_sucess").modal({
                        show: true
                    });
                }
                setTimeout(abreModal, 10);
            </script>
    <?php
        }
        unset($_SESSION['sucess_password']);
    }
    ?>
    <?php
    //MODAL SENHA ALTERADA COM SUCESSO (RECU SENHA) 
    if (isset($_SESSION['msg_erro'])) {
        if ($_SESSION['msg_erro'] == "email_erro_senha") {
    ?>
            <script>
                function abreModal() {
                    $("#email_erro_senha").modal({
                        show: true
                    });
                }
                setTimeout(abreModal, 10);
            </script>
    <?php
        }
        unset($_SESSION['msg_erro']);
    }
    ?>
      <?php
    //MODAL EMAIL RECU SENHA ENVIADO  COM SUCESSO (RECU SENHA) 
    if (isset($_SESSION['enviar_emaiil_recu_senha'])) {
        if ($_SESSION['enviar_emaiil_recu_senha'] == "sucesso_senha") {
    ?>
            <script>
                function abreModal() {
                    $("#enviar_email_recu_senha").modal({
                        show: true
                    });
                }
                setTimeout(abreModal, 10);
            </script>
    <?php
        }
        unset($_SESSION['enviar_emaiil_recu_senha']);
    }
    ?>  
          <?php
    //MODAL FALE CONOSCO SUCESSO 
    if (isset($_SESSION['reclamacao_enviada_sucesso'])) {
        if ($_SESSION['reclamacao_enviada_sucesso'] == "reclamacao_enviada_sucesso") {
    ?>
            <script>
                function abreModal() {
                    $("#reclamacao_enviada_sucesso").modal({
                        show: true
                    });
                }
                setTimeout(abreModal, 10);
            </script>
    <?php
        }
        unset($_SESSION['reclamacao_enviada_sucesso']);
    }
    ?>  




    

    <!-- MODAL SENHA INCORRETA-->
    <div id="myModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title">Senha incorreta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>A senha ou email informado para o login está incorreto(a)!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL SAIR DO SISTEMA-->
    <div id="myModalSair" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">Usuário deslogado com sucesso!!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL CADASTRO COM SUCESSO -->
    <div id="myModalCad_usuario" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">Usuário cadastrado com sucesso!!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL REALIZAR LOGIN  NO SISTEMA-->
    <div id="myModaRealizarLogin" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <center>
                    <div class="modal-header bg-danger text-white ">
                        <h5 class="modal-title">É necessário realizar o login para acessar essa página!!</h5>
                    </div>
                </center>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL ESQUECI MINHA SENHA -->
    <div class="modal fade" id="modal_esqueci_senha" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color:#0099ff">
                <div class="modal-header text-white">
                    <h3 class="modal-title  font-weight-bold" id="exampleModalLabel">Esqueci Minha Senha</h3>
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form_recu_senha" class="form" action="../../Controllers/users/recover_password.php" method="POST">
                        <div class="form-group">
                            <label for="email_recuperar_senha" class="font-weight-bold text-white">Digite seu email:</label>
                            <input type="email" class="form-control " id="email_recuperar_senha" name='email_recuperar_senha' placeholder="name@example.com">
                        </div>
                        <center>
                            <button type="submit " class="btn btn-success ">Enviar</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Cadastrar Usuário -->
    <div class="modal fade" id="modal-cadastro" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" id="fundo-modal">
                <div class="modal-body">
                    <form id="register-user-form" class="form" action="../../Controllers/users/register.php" method="POST">
                        <h1 class="titulo text-center"><b>Efetuar cadastro:</b></h1>
                        <div class="forms">
                            <div class="form-group">
                                <label class="form-label" for="name" style="color:white;"><b>Nome:</b></label>
                                <input type="text" class="form-control" name="name" placeholder="Digite seu nome aqui" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="last-name" style="color:white;"><b>Sobrenome:</b></label>
                                <input type="text" class="form-control" id="sobrenome" name="last-name" placeholder="Digite seu sobrenome aqui" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="genre" style="color:white;"><b>Gênero:</b></label>
                                <select class="form-control" name="genre" id="genero">
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminino</option>
                                <option value="prefiro_nao_dizer">Prefiro não dizer</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="birth-date" style="color:white;"><b>Data de nascimento:</b></label>
                                <input type="date" class="form-control" id="dtnasc" name="birth-date" placeholder="Digite sua data de nascimento aqui" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name" style="color:white;"><b>CPF:</b></label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF aqui" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="phone" style="color:white;"><b>Telefone:</b></label>
                                <input type="text" class="form-control" id="telefone" name="phone" placeholder="(00)00000-0000" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email" style="color:white;"><b>Email:</b></label>
                                <input type="email" class="form-control" id="email_usu" name="email" placeholder="Digite o seu email aqui" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="username" style="color:white;"><b>Username:</b></label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Digite seu username aqui" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="password" style="color:white;"><b>Senha:</b></label>
                                <input type="password" class="form-control" id="senha" name="password" placeholder="Digite sua senha aqui" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success" value="send" style="margin-bottom: 5px;"><b>SALVAR</b></button><br>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Contato Usuário -->
    <div class="modal fade" id="modal-contato" role="dialog">
        <div class="modal-dialog ">
            <div class="modal-content" id="fundo-modal">
                <div class="modal-body">
                    <form id="contact-form" class="form" action="../../Controllers/gestao_fale_conosco.php" method="POST">
                        <h1 class="titulo text-center"><b>Entrar em contato:</b></h1>
                        <div class="forms">
                            <div class="form-group">
                                <label class="form-label" for="name" style="color:white;"><b>Nome:</b></label>
                                <input type="text" class="form-control" name="name" placeholder="Digite seu nome aqui" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name" style="color:white;"><b>Email:</b></label>
                                <input type="email" class="form-control" id="email" name="email_usu" placeholder="Digite o seu email aqui" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="tel_contato" style="color:white;"><b>Telefone:</b></label>
                                <input type="text" class="form-control" id="tel" name="tel_contato" placeholder="Digite seu telefone aqui" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="tipo_msg" style="color:white;"><b>Tipo de mensagem:</b></label>
                                <select class="form-control" name="tipo_msg" id="tipo_msg" >
                                <option value=" ">Selecione aqui o tipo da mensagem:</option>
                                <option value="Reclamacao">Reclamação</option>
                                <option value="Duvidas">Dúvidas</option>
                                <option value="Sugestoes">Sugestões</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" style="color:white;"><b>Conte para nós as suas necessidades:</b></label>
                                <textarea class="form-control" name="descricao_usu" rows="3" maxlength="400" ></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success" value="send" style="margin-bottom: 5px;"><b>ENVIAR</b></button><br>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- MODAL PAGINA NAO ENCONTRADA (RECU SENHA ) -->
    <div id="pagina_nao_encontrada" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <center>
                    <div class="modal-header bg-danger text-white ">
                        <h5 class="modal-title">Página não encontrada</h5>
                    </div>
                </center>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
        <!-- MODAL SENHA ALTERADA COM SUCESSO  (RECU SENHA ) -->
        <div id="senha_alterada_sucess" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <center>
                    <div class="modal-header bg-success text-white ">
                        <h5 class="modal-title">Senha alterada com sucesso!</h5>
                    </div>
                </center>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
 <!-- MODAL ERROR ALTERAR SENHA  (RECU SENHA ) -->
     <div id="email_erro_senha" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <center>
                    <div class="modal-header bg-danger text-white ">
                        <h5 class="modal-title">Usuário não encontrado. Tente novamente</h5>
                    </div>
                </center>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL EMAIL ENVIADO  ALTERAR SENHA  (RECU SENHA ) -->
    <div id="enviar_email_recu_senha" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <center>
                    <div class="modal-header bg-success text-white ">
                        <h5 class="modal-title">O link para recuperação de senha foi enviado para o email informado, verifique sua caixa eletrônica ou de spam. </h5>
                    </div>
                </center>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

        <!-- MODAL FALE CONOSCO ENVIADO COM SUCESSO  -->
        <div id="reclamacao_enviada_sucesso" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <center>
                    <div class="modal-header bg-success text-white ">
                        <h5 class="modal-title">Sua reclamação foi enviada com sucesso para a equipe responsável, obrigado pelo contato!! </h5>
                    </div>
                </center>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>