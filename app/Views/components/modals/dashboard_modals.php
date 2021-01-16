<?php

    //MODAL SUCESSO EDITAR PERFIL
    if (isset($_SESSION['editar_dados_sucesso'])) {
        if ($_SESSION['editar_dados_sucesso'] == "sucesso") {
        ?>
            <script>
                function abreModal() {
                    $("#editar_perfil_sucesso").modal({
                        show: true
                    });
                }
                setTimeout(abreModal, 10);
            </script>
        <?php
        }
        unset($_SESSION['editar_dados_sucesso']);
    }
    ?>
    
<?php
    //SUCESSO CAD EVENTO
    if (isset($_SESSION['sucesso_cad_evento'])) {
        if ($_SESSION['sucesso_cad_evento']) {
        ?>
            <script>
                function abreModal() {
                    $("#cad_sucesso").modal({
                        show: true
                    });
                }
                setTimeout(abreModal, 10);
            </script>
        <?php
        }
        unset($_SESSION['sucesso_cad_evento']);
    }
?> 
<?php
    //SUCESSO CAD CUSTO FIXO
    if (isset($_SESSION['sucesso_cad_custos'])) {
        if ($_SESSION['sucesso_cad_custos']) {
        ?>
            <script>
                function abreModal() {
                    $("#sucesso_cad_custos").modal({
                        show: true
                    });
                }
                setTimeout(abreModal, 10);
            </script>
        <?php
        }
        unset($_SESSION['sucesso_cad_custos']);
    }
?> 

<?php
    //SUCESSO CAD CUSTO VARIAVEL
    if (isset($_SESSION['sucesso_cad_variavel'])) {
        if ($_SESSION['sucesso_cad_variavel']) {
        ?>
            <script>
                function abreModal() {
                    $("#sucesso_cad_variavel").modal({
                        show: true
                    });
                }
                setTimeout(abreModal, 10);
            </script>
        <?php
        }
        unset($_SESSION['sucesso_cad_variavel']);
    }
?> 

<?php
    //SUCESSO CAD CUSTO VARIAVEL
    if (isset($_SESSION['sucesso_cad_receita'])) {
        if ($_SESSION['sucesso_cad_receita']) {
        ?>
            <script>
                function abreModal() {
                    $("#sucesso_cad_receita").modal({
                        show: true
                    });
                }
                setTimeout(abreModal, 10);
            </script>
        <?php
        }
        unset($_SESSION['sucesso_cad_receita']);
    }
?> 


<!-- Modal Editar Perfil -->
<div class="modal fade" id="edit-profile-modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form id="contact-form" class="form" action="../../Controllers/users/edit.php" method="POST">
                    <h1 class="titulo"><b>Editar informações pessoais:</b></h1>
                    <div class="forms">
                        <div class="form-group">
                            <label class="form-label" for="name"><b>Nome</b></label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Digite seu nome aqui" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="Sobrenome"><b>Sobrenome</b></label>
                            <input type="text" class="form-control" id="Sobrenome" name="Sobrenome"
                                placeholder="Digite seu Sobrenome aqui" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email"><b>Data de nascimento</b></label>
                            <input  type="text" class="form-control" id="dtnasc" name="dtnasc" required >
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="genero" ><b>Gênero</b></label>
                            <select class="form-control" name="genero" id="genero">
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="prefiro_nao_dizer">Prefiro não dizer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="name"><b>CPF</b></label>
                            <input  type="text" class="form-control" id="cpf" name="cpf" required >
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="telefone"><b>Telefone</b></label>
                            <input type="text" class="form-control" id="telefone" name="telefone"
                                placeholder="(00)0000-0000" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="name"><b>Email</b></label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Digite o seu email aqui" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="name"><b>Username</b></label>
                            <input  type="text" class="form-control" id="username" name="username" required >
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="senha_usu"><b>Senha</b></label>
                            <input  type="text" class="form-control" id="senha_usu" name="senha_usu" required >
                        </div>
                        <div class="d-flex justify-content-around">
                            <button type="submit" class="btn-lg btn-primary"  value="send">
                                <b>Salvar</b>
                            </button>
                            <button type="submit" class="btn-lg btn-danger"  value="send" data-dismiss="modal">
                                <b>Cancelar </b> 
                            </button>
                        </div>
                        <input type="hidden" id="id_usuario" name="id_usu">
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<!-- Modal manter Evento -->
<div class="modal fade" id="modal-manter-evento" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form id="contact-form" class="form" action="../../Controllers/events/editar_evento.php" method="POST">
                    <h1 class="titulo"></h1>
                    <div class="forms">
                        <div class="form-group">
                            <label class="form-label" for="name"><b>Nome do evento</b></label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Digite o nome do evento aqui" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="pais"><b>Pais</b></label>
                            <input  type="text" class="form-control" id="pais" name="pais"
                                placeholder="Digite o pais aqui" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="cep"><b>CEP</b></label>
                            <input  type="text" class="form-control" id="cep" name="cep"
                                placeholder="Digite o CEP aqui" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="state"><b>Estado</b></label>
                            <input  type="text" class="form-control" id="statee" name="statee"
                                placeholder="Digite o estado do evento aqui" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="city"><b>Cidade</b></label>
                            <input  type="text" class="form-control" id="city" name="city"
                                placeholder="Digite a cidade do evento aqui" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="street"><b>Rua</b></label>
                            <input  type="text" class="form-control" id="street" name="street"
                                placeholder="Digite a rua do evento aqui" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="Bairro"><b>Bairro</b></label>
                            <input  type="text" class="form-control" id="Bairro" name="Bairro"
                                placeholder="Digite o bairro do evento aqui" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="n_local"><b>Número do local</b></label>
                            <input  type="text" class="form-control" id="n_local" name="n_local"
                                placeholder="Digite o numero do local do evento aqui" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="date"><b>Data</b></label>
                            <input  type="date" class="form-control" id="datee" name="datee"
                                placeholder="Não é possível alterar este campo" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="qntPeople"><b>Quantidade de Pessoas</b></label>
                            <input type="text" class="form-control" id="qntPeople" name="qntPeople"
                                placeholder="Digite o seu email aqui" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="description"><b>Descrição</b></label>
                            <textarea  type="text" class="form-control" id="descriptionn" name="descriptionn" maxlength='400'
                                ></textarea>
                        </div>
                        <div class="d-flex justify-content-around">
                            <button type="submit" class="btn-lg btn-primary"  value="send">
                                <b>Salvar</b>
                            </button>
                            <button type="submit" class="btn-lg btn-danger"  value="send" data-dismiss="modal">
                                <b>Cancelar</b> 
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<!-- Modal adicionar custos variáveis -->
<div class="modal fade" id="modal-adicionar-custos-variaveis" role="dialog">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-body">
                <form id="contact-form" class="form" action="../../Controllers/costs/register_variable.php" method="POST">
                    <h1 class="titulo text-center"><b>Adicionar custos variáveis</b></h1>
                    <div class="forms">
                        <div class="form-group">
                            <label class="form-label" for="produto"><b>Produto</b></label>
                            <input type="text" class="form-control" id="produto" name="produto"
                                placeholder="Digite o nome do produto" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="type_prod"><b>Tipo do produto:</b></label>
                            <input type="text" class="form-control" id="type_prod" name="type_prod"
                                placeholder="Digite o nome tipo do produto" required>
                        </div>
                        <div class="form-group">
                            <label for="unidade"><b>Unidade de medida</b></label>
                            <select class="form-control" id="unidade" name="unidade" required>>
                                <option value="Litro">Litro (l)</option>
                                <option value="Ml">Mililitro (ml)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="preco"><b>Preço (unidade)</b></label>
                            <input type="text" class="form-control" id="preco" name="preco"
                                placeholder="R$ " required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="qtd_esperada"><b>Quantidade esperada</b></label>
                            <input type="number" class="form-control" id="qtd_esperada" name="qtd_esperada"
                                placeholder="Digite a quantidade esperada" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="gasto_final"><b>Gasto Esperado</b></label>
                            <input type="text" class="form-control" id="gasto_final" name="gasto_final" disabled required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="obs"><b>Observações</b></label>
                            <textarea class="form-control" rows="3" id="obs" name="obs"></textarea>
                        </div>
                        <div class="d-flex justify-content-around">
                            <button type="submit" class="btn-lg btn-primary"  value="send">
                                <b>Adicionar</b>
                            </button>
                            <button type="submit" class="btn-lg btn-danger"  value="send" data-dismiss="modal">
                                <b>Cancelar</b> 
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal adicionar custos fixos -->
<div class="modal fade" id="modal-adicionar-custos-fixos" role="dialog">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-body">
                <form id="contact-form" class="form" action="../../Controllers/costs/register_fixed.php" method="POST" >
                    <h1 class="titulo text-center"><b>Adicionar custos fixos</b></h1>
                    <div class="forms">
                        <div class="form-group">
                            <label class="form-label" for="name"><b>Item</b></label>
                            <input type="text" class="form-control" id="item_name" name="item_name"
                                placeholder="Digite o nome do item" required>
                        </div>
                        <div class="form-group">
                            <label for="tipo"><b>Tipo</b></label>
                            <select class="form-control" id="Tipo" name="Tipo" required>>
                                <option value ='Atracoes'>Atrações</option>
                                <option value ='Estrutura'>Local/estrutura</option>
                                <option value ='Sergurancas'>Seguranças</option>
                                <option value ='Outros'>Outros</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="preco"><b>Preço</b></label>
                            <input type="text" class="form-control" id="preco" name="preco"
                                placeholder="R$" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="qtd"><b>Quantidade</b></label>
                            <input type="text" class="form-control" id="qtd" name="qtd"
                                placeholder="R$" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="obs"><b>Observações</b></label>
                            <textarea class="form-control" id="obs" name="obs" rows="3"></textarea>
                        </div>
                        <div class="d-flex justify-content-around">
                            <button type="submit" class="btn-lg btn-primary"  value="send">
                                <b>Adicionar</b>
                            </button>
                            <button type="submit" class="btn-lg btn-danger"  value="send" data-dismiss="modal">
                                <b>Cancelar</b> 
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal RECEITA  -->
<div class="modal fade" id="modal-adicionar-receita" role="dialog">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-body">
                <form id="contact-form" class="form" action="../../Controllers/incomes/cadastro_receita.php" method="POST" >
                    <h1 class="titulo text-center"><b>Adicionar Receita</b></h1>
                    <div class="forms">
                        <div class="form-group">
                            <label class="form-label" for="name"><b>Item</b></label>
                            <input type="text" class="form-control" id="item_name" name="item_name"
                                placeholder="Digite o nome do item aqui. Ex: Primeiro Lote" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="preco"><b>Preco</b></label>
                            <input type="text" class="form-control" id="preco" name="preco"
                                placeholder="Digite o preco do item" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="qtd_esperada"><b>Quantidade esperada</b></label>
                            <input type="text" class="form-control" id="qtd_esperada" name="qtd_esperada"
                                placeholder="Digite a quantidade esperada para a venda" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="obs"><b>Observacoes</b></label>
                            <input type="text" class="form-control" id="obs" name="obs"
                                placeholder="Caso haja observacoes." required>
                        </div>
                        <div class="d-flex justify-content-around">
                            <button type="submit" class="btn-lg btn-primary"  value="send">
                                <b>Adicionar</b>
                            </button>
                            <button type="submit" class="btn-lg btn-danger"  value="send" data-dismiss="modal">
                                <b>Cancelar</b> 
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal excluir evento -->
<div class="modal fade" id="modal-excluir-evento" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header bg-danger text-white">
            <h5 class="modal-title" id="exampleModalLongTitle">Deseja realmente apagar o evento?</h5>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" >Confirmar</button>
            <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
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

<!-- MODAL EDITAR PERFIL SUCESSO   -->
<div class="modal fade" id="editar_perfil_sucesso" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header bg-success text-white">
            <h5 class="modal-title" id="exampleModalLongTitle">Seus dados foram editados com sucesso!!</h5>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Voltar</button>
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
            <a href="../../Controllers/users/logout.php"> <button type="button" class="btn btn-danger" >Confirmar</button> </a>
            <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        </div>
        </div>
    </div>
</div>

<!-- MODAL CADASTRO SUCESSO DO SISTEMA  -->
<div class="modal fade" id="cad_sucesso" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header bg-success text-white">
            <h5 class="modal-title" id="exampleModalLongTitle">O evento foi cadastrado com sucesso com sucesso!!</h5>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Voltar</button>
        </div>
        </div>
    </div>
</div>

<!-- MODAL CADASTRO CUSTO FIXO SUCESSO DO SISTEMA  -->
<div class="modal fade" id="sucesso_cad_custos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header bg-success text-white">
            <h5 class="modal-title" id="exampleModalLongTitle">Custos fixos cadastrados com sucesso!</h5>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Voltar</button>
        </div>
        </div>
    </div>
</div>




<!-- MODAL CADASTRO CUSTO VARIAVEL SUCESSO DO SISTEMA  -->
<div class="modal fade" id="sucesso_cad_variavel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header bg-success text-white">
            <h5 class="modal-title" id="exampleModalLongTitle">Custos Variaveis cadastrados com sucesso!</h5>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Voltar</button>
        </div>
        </div>
    </div>
</div>

<!-- MODAL CADASTRO RECEITA SUCESSO DO SISTEMA  -->
<div class="modal fade" id="sucesso_cad_receita" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header bg-success text-white">
            <h5 class="modal-title" id="exampleModalLongTitle">Receita cadastrada com sucesso!</h5>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Voltar</button>
        </div>
        </div>
    </div>
</div>

