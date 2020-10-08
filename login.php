<?php
session_start();
ob_start(); //limpar a memória para nao dar erro de redirecionamento.
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">

	<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	<h2>Login</h2>
	<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
?>
	<form method="POST" action="#">
		<label>Email</label>
		<input type="text" name="email" placeholder="Digite o seu e-mail" required><br><br>
		<label>Senha</label>
		<input type="password" name="senha" placeholder="Digite a senha" required><br><br>
		<input type="submit" name="btnlogin" value="Acessar"><br><br>


	</form>
</body>

</html>