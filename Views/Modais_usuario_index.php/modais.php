 <!-- Modal Editar Perfil -->
 <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form id="contact-form" class="form" action="#" method="POST">
                        <h1 class="titulo"><b>Editar informações pessoais:</b></h1>
                        <div class="forms">
                            <div class="form-group">
                                <label class="form-label" for="name"><b>Nome:</b></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Digite seu nome aqui" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email"><b>Data de nascimento:</b></label>
                                <input  type="text" class="form-control" id="dtnasc" name="dtnasc"
                                    placeholder="Não é possível alterar este campo" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name"><b>CPF:</b></label>
                                <input  type="text" class="form-control" id="cpf" name="cpf"
                                    placeholder="Não é possível alterar este campo" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name"><b>Telefone:</b></label>
                                <input type="text" class="form-control" id="telefone" name="telefone"
                                    placeholder="(00)0000-0000" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name"><b>Email:</b></label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Digite o seu email aqui" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name"><b>Username:</b></label>
                                <input  type="text" class="form-control" id="username" name="username"
                                    placeholder="Não é possível alterar este campo" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email"><b>Senha:</b></label>
                                <input type="password" class="form-control" id="senha" name="senha"
                                    placeholder="Digite sua senha aqui" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success"  value="send"
                                    style="margin:5px;"><b>Salvar</b></button>
                                    <button type="submit" class="btn btn-danger"  value="send"
                                        data-dismiss="modal"><b>Cancelar </b> </button>
                            </div>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>
        <!-- Modal Contato Usuário -->
        <div class="modal fade" id="modal-contato" role="dialog">
            <div class="modal-dialog" >
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

<!-- MODAL SAIR DO SISTEMA  -->
<div class="modal fade" id="myModa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header bg-danger text-white">
            <h5 class="modal-title" id="exampleModalLongTitle">Deseja mesmo sair do sistema?</h5>
        </div>
        <div class="modal-footer">
        <a href="../Controllers/sair.php"> <button type="button" class="btn btn-danger" >Confirmar</button> </a>
            <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        </div>
        </div>
    </div>
    </div>
