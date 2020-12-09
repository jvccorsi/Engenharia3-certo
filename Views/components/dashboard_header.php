<?php echo"
<header>
  <!--SECTION NAV -->
  <nav class=\"navbar navbar-expand-lg\" id=\"edit\">
    <div class=\"container\">
      <div class=\"btn-hora\">
        <a href=\"#login\" class=\"btn btn-info menu a\" role=\"button\" id=\"botao-hora\"><b></b></a>
      </div>
      <div class=\"position-img\">
        <a class=\"navbar-brand\" href=\"#\" id=\"img\">
          <img src=\"../assets/logo/logo_1.png\" style=\"width: 150px;\">
        </a>
      </div>
      <button class=\"navbar-toggler navbar-light bg-light\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSite\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\">
        <ul class=\"navbar-nav\" id=\"itens-menu\">
          <a href=\"#myModal\" data-toggle=\"modal\" data-target=\"#myModal\" class=\"btn btn-info menu a\" role=\"button\" id=\"botao\"><b>PERFIL</b></a>
          <div class=\"contato-nav\">
            <a href=\"#myModal\" data-toggle=\"modal\" data-target=\"#myModa2\" class=\"btn btn-info menu a\" role=\"button\" id=\"botao\"><b>SAIR</b></a>
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <!--BTN FALE CONOSCO-->
  <button id=\"contact-btn\" href=\"#modal-contato\" data-toggle=\"modal\" data-target=\"#modal-addEvent\"> <img src=\"../assets/add.png\" class=\"img-actions\"></button>
</header>
"
?>