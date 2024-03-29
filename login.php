<?php

// primeiro comando da página quando se quer controlar o acesso a ela
session_start();

if (!empty($_POST)) {

	//if ($_POST["email"] == "admin" && $_POST["senha"] == "admin") {
	if ($_POST["email"] == $_POST["senha"]) {

		$_SESSION["logado"] = true;
		$_SESSION["usuario"] = $_POST["email"];

		// após o login, redireciona a navegação para a página inicial do sistema!
		header("location: index.php");
		exit;


	} else {
		echo "E-mail e senha incorretos!";
		exit;
	}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	</style>
	<link rel="shortcut icon" href="images/logoprojeto.png">
	<title>Login Laurus Social</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="social-topicos/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v19/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v19/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v19/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v19/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v19/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v19/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v19/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v19/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v19/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login_v19/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-33">
						Login da Conta
					</span>

					<div class="wrap-input100 validate-input" data-validate = "E-mail válido é necessário: example@gmail.com">
						<input class="input100" type="text" name="email" placeholder="E-mail">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Senha válida é necessária">
						<input class="input100" type="password" name="senha" placeholder="Senha">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Entrar
						</button>
					</div>

					<div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Esqueceu o
						</span>

						<a href="#" class="txt2 hov1">
							E-mail / senha?
						</a>
					</div>

					<div class="text-center">
						<span class="txt1">
							Criar uma nova conta?
						</span>

						<a href="#" class="txt2 hov1">
							clique aqui
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->
	<script src="Login_v19/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v19/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v19/vendor/bootstrap/js/popper.js"></script>
	<script src="Login_v19/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v19/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v19/vendor/daterangepicker/moment.min.js"></script>
	<script src="Login_v19/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Login_v19/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Login_v19/js/main.js"></script>

</body>
</html>