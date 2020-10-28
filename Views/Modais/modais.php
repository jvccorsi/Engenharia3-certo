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
                    <p>A senha informada para o login está incorreta!</p>
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