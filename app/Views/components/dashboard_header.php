<?php echo"
  <header id=\"dashboard-header\">
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
              <a href=\"#edit-profile-modal\" data-toggle=\"modal\" data-target=\"#edit-profile-modal\" class=\"btn btn-info menu a\" role=\"button\" id=\"botao\">PERFIL</a> 
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

      const http = new XMLHttpRequest();
      const url = \"/Engenharia3-certo/app/Controllers/users/find.php\";
      http.open(\"GET\", url, true);
      http.send();
      http.onload = function () {
        try {
          let user = JSON.parse(http.response);

          if(Object.keys(user).length > 0) {
            let modal = $('#edit-profile-modal');
            modal.find('#name').val(user['nome']);
            modal.find('#Sobrenome').val(user['sobrenome']);
            modal.find('#dtnasc').val(user['data_nasc']);
            modal.find('#cpf').val(user['cpf']);
            modal.find('#genero').val(user['genero']);
            modal.find('#telefone').val(user['telefone']);
            modal.find('#email').val(user['email']);
            modal.find('#username').val(user['username']);
            modal.find('#senha_usu').val(user['senha']);
          }
        } catch (err) {

          alert(err.message);
        }
      };
    })

    $('body').ready(() => {
      var date = new Date();
      // Adicionar um zero antes da hora e minuto
      const hora = '0' + String(date.getHours());
      const minuto = '0' + String(date.getMinutes());

      // Pegar somente os dois ultimos elementos de hora e minuto
      document.getElementById('botao-hora').innerHTML =  hora.slice(-2) + ':' + minuto.slice(-2);
    });
  </script>
"
?>