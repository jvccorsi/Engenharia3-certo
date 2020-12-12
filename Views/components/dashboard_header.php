<?php echo"
  <header>
    <!--SECTION NAV -->
    <nav class=\"navbar navbar-expand-lg justify-content-between\" id=\"edit\">

        <div class=\"time-container\">
          <a href=\"#login\" class=\"btn btn-info\" role=\"button\" id=\"botao-hora\"><b></b></a>
        </div>

        <div class=\"navbar-brand\">
          <a href=\"dashboard.php\" id=\"img\">
            <img src=\"../assets/logo/logo_1.png\" style=\"width: 150px;\">
          </a>
        </div>

        <button class=\"navbar-toggler navbar-light bg-light\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSite\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\">
          <ul class=\"navbar-nav\" id=\"itens-menu\">
            <li class=\"nav-item\">
              <a href=\"#edit-profile-modal\" data-toggle=\"modal\" data-target=\"#edit-profile-modal\" class=\"btn btn-info menu a\" role=\"button\" id=\"botao\" data-whatever_nome=\"".$_SESSION["usu_nome"]."\" 
                data-whatever_id=\"".$_SESSION["usu_id"]."\" data-whatever_email=\"".$_SESSION["usu_email"]."\" data-whatever_username=\"".$_SESSION["usu_username"]."\"
                data-whatever_cpf=\"".$_SESSION["usu_cpf"]."\" data-whatever_data_nasc=\"".$_SESSION["usu_data_nasc"]."\" data-whatever_usu_telefone=\"".$_SESSION["usu_telefone"]."\"
                data-whatever_usu_genero=\"".$_SESSION["usu_genero"]."\"  data-whatever_usu_senha=\"".$_SESSION["usu_senha"]."\"  data-whatever_usu_sobrenome=\"".$_SESSION["usu_sobrenome"]."\"><b>PERFIL</b>
              </a> 
            </li>

            <li class=\"nav-item\">
              <a href=\"#myModal\" data-toggle=\"modal\" data-target=\"#myModa2\" class=\"btn btn-info menu a\" role=\"button\" id=\"botao\"><b>SAIR</b></a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
  </header>
  <script>
    $('#edit-profile-modal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var usu_id = button.data('whatever_id')  
      var usu_nome= button.data('whatever_nome')
      var usu_sobrenome = button.data('whatever_usu_sobrenome')
      var usu_email = button.data('whatever_email')
      var usu_username = button.data('whatever_username')
      var usu_senha = button.data('whatever_usu_senha')
      var usu_cpf = button.data('whatever_cpf')
      var usu_data_nasc = button.data('whatever_data_nasc')
      var usu_telefone = button.data('whatever_usu_telefone')
      var usu_genero = button.data('whatever_usu_genero')

      var modal = $(this)
      modal.find('#name').val(usu_nome)
      modal.find('#Sobrenome').val(usu_sobrenome)
      modal.find('#dtnasc').val(usu_data_nasc)
      modal.find('#cpf').val(usu_cpf)
      modal.find('#genero').val(usu_genero)
      modal.find('#telefone').val(usu_telefone)
      modal.find('#email').val(usu_email)
      modal.find('#username').val(usu_username)
      modal.find('#senha_usu').val(usu_senha)
      modal.find('#id_usuario').val(usu_id)
    
    })

    function hora() {
      var date = new Date();
      document.getElementById('botao-hora').innerHTML = date.getHours() + ':' + date.getMinutes();
    }
  </script>
"
?>