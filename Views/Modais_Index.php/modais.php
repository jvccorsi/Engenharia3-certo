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


    <!-- MODAL SENHA INCORRETA-->
    <div id="myModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
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
                    <form id="form_recu_senha" class="form" action="#" method="POST">
                        <div class="form-group">
                            <label for="email_recuperar_senha" class="font-weight-bold text-white">Digite seu email:</label>
                            <input type="email" class="form-control " id="email_recuperar_senha" placeholder="name@example.com">
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
        <div class="modal-dialog" >
            <div class="modal-content" id="fundo-modal">
                <div class="modal-body">
                    <form id="contact-form" class="form" action="Controllers/gestao_cadastro_usu.php" method="POST">
                        <h1 class="titulo text-center"><b>Efetuar cadastro:</b></h1>
                        <div class="forms">
                            <div class="form-group">
                                <label class="form-label" for="name" style="color:white;"><b>Nome:</b></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Digite seu nome aqui" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email" style="color:white;"><b>Data de nascimento:</b></label>
                                <input  type="text" class="form-control" id="dtnasc" name="dtnasc"
                                    placeholder="Digite sua data de nascimento aqui" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name" style="color:white;"><b>CPF:</b></label>
                                <input  type="text" class="form-control" id="cpf" name="cpf"
                                    placeholder="Digite seu CPF aqui" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name" style="color:white;"><b>Telefone:</b></label>
                                <input type="text" class="form-control" id="telefone" name="telefone"
                                    placeholder="(00)0000-0000" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name" style="color:white;"><b>Email:</b></label>
                                <input type="email" class="form-control" id="email_usu" name="email_usu"
                                    placeholder="Digite o seu email aqui" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name" style="color:white;"><b>Username:</b></label>
                                <input  type="text" class="form-control" id="username" name="username"
                                    placeholder="Digite seu username aqui" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email" style="color:white;"><b>Senha:</b></label>
                                <input type="password" class="form-control" id="senha" name="senha"
                                    placeholder="Digite sua senha aqui" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success" id="salvar-btn" value="send" style="margin-bottom: 5px;"><b>SALVAR</b></button><br>
                            </div>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>

    <!-- Modal Contato Usuário -->
    <div class="modal fade" id="modal-contato" role="dialog">
        <div class="modal-dialog " >
            <div class="modal-content" id="fundo-modal">
                <div class="modal-body">
                    <form id="contact-form" class="form" action="#" method="POST">
                        <h1 class="titulo text-center"><b>Entrar em contato:</b></h1>
                        <div class="forms">
                            <div class="form-group">
                                <label class="form-label" for="name" style="color:white;"><b>Nome:</b></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Digite seu nome aqui" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name" style="color:white;"><b>Email:</b></label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Digite o seu email aqui" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name" style="color:white;"><b>Conte para nós as suas necessidades:</b></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                              <div class="text-center">
                                <button type="submit" class="btn btn-success" id="salvar-btn" value="send" style="margin-bottom: 5px;"><b>ENVIAR</b></button><br>
                            </div>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>

    <!-- Modal Recuperar Senha  (KAKA)
    <div class="modal fade" id="modal-rec-senha" role="dialog">
        <div class="modal-dialog modal-dialog modal-dialog-centered" >
            <div class="modal-content" id="fundo-modal">
                <div class="modal-body">
                    <form id="contact-form" class="form" action="#" method="POST">
                        <h1 class="titulo text-center"><b>Recuperar senha:</b></h1>
                        <div class="forms">
                            <div class="form-group">
                                <label class="form-label" for="name" style="color:white;"><b>Email:</b></label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Digite o seu email cadastrado" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success" id="salvar-btn" value="send" style="margin-bottom: 5px;"><b>ENVIAR</b></button><br>
                            </div>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>
    -->