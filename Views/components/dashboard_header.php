<?php echo"
  <header>
    <!--SECTION NAV -->
    <nav class=\"navbar navbar-expand-lg justify-content-between\" id=\"edit\">

        <div class=\"time-container\">
          <a href=\"#login\" class=\"btn btn-info\" role=\"button\" id=\"botao-hora\"><b></b></a>
        </div>

        <div class=\"navbar-brand\">
          <a href=\"#\" id=\"img\">
            <img src=\"../assets/logo/logo_1.png\" style=\"width: 150px;\">
          </a>
        </div>

        <button class=\"navbar-toggler navbar-light bg-light\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSite\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\">
          <ul class=\"navbar-nav\" id=\"itens-menu\">
            <li class=\"nav-item\">
              <a href=\"#myModal\" data-toggle=\"modal\" data-target=\"#myModal\" class=\"btn btn-info menu a\" role=\"button\" id=\"botao\" data-whatever_nome=\"".$_SESSION["usu_nome"]."\" 
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
"
?>