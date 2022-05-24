<?php

require '../control/verifyData.php';

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <meta http-equiv='refresh' content='url=/LS_sessions/views'> -->
	<!-- Enlaces a estilos CSS -->
	<link rel="stylesheet" type="text/css" href="/LS_sessions/assets/css/style.css">
	<link rel="stylesheet" href="/LS_sessions/assets/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="/LS_sessions/assets/bootstrap/bootstrap.min.css">

	<!-- Fuentes de google -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

	<!-- Iconos de Font Awesome -->
	<script src="https://kit.fontawesome.com/ae46b0ba61.js" crossorigin="anonymous"></script>

	<title>Bienvenido</title>
</head>

<body>
	<div class="login-wrap">
		<div class="login-html">

			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Iniciar sesión</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrarse</label>

			<div class="login-form">
				<!-- LOGIN FORM -->
				<form action="index.php" method="post" id="logInForm" name="logInForm">
					<div class="sign-in-htm">
						<div class="group">
							<label for="userL" class="label"> Usuario o correo electronico</label>
							<input name="user" id="userL" type="text" class="input" placeholder="Ingresa tu usuario o correo">
							<i class="fa-solid fa-user"></i>
						</div>
						<div class="group">
							<label for="passwordL" class="label">Contraseña</label>
							<input name="password" id="passwordL" type="password" class="input" placeholder="Ingresa tu contraseña">
							<i class="fa-solid fa-lock"></i>
						</div>
						<div class="group">
							<input name="submitL" type="submit" class="button" value="Ingresar">
						</div>

						<?php require '../control/messages.php'; ?>

						<div class="hr"></div>
						<div class="foot-lnk">
							<label for="tab-2">¿Aun no tienes una cuenta?</a>
						</div>
						<div class="icons">
							<a href="#"><img src="/LS_sessions/assets/icons/facebookIcon.svg" alt="Facebook"></a>
							<a href="#"><img src="/LS_sessions/assets/icons/instagramIcon.svg" alt="Instagram"></a>
							<a href="#"><img src="/LS_sessions/assets/icons/twitterIcon.svg" alt="Twitter"></a>
							<a href="#"><img src="/LS_sessions/assets/icons/spotifyIcon.svg" alt="Spotify"></a>
						</div>
					</div>

				</form>

				<!-- SIGN UP FORM -->
				<form action="index.php" method="post" id="signUpForm">
					<div class="sign-up-htm">
						<div class="group">
							<label for="userS" class="label">Nombre de usuario</label>
							<input name="user" id="userS" type="text" class="input" placeholder="Ingresa un nombre">
							<i class="fa-solid fa-user"></i>
						</div>
						<div class="group">
							<label for="emailS" class="label">Correo Electronico</label>
							<input name="email" id="emailS" type="text" class="input" placeholder="Ingresa un correo electrónico">
							<i class="fa-solid fa-at"></i>
						</div>
						<div class="group">
							<label for="passwordS" class="label">Contraseña</label>
							<input name="password" id="passwordS" type="password" class="input" placeholder="Ingresa una contraseña">
							<i class="fa-solid fa-lock"></i>
						</div>
						<div class="group">
							<label for="confirm_passwordS" class="label">Confirmar Contraseña</label>
							<input name="confirm_password" id="confirm_passwordS" type="password" class="input" placeholder="Confirma tu contraseña">
							<i class="fa-solid fa-lock"></i>
						</div>
						<div class="group">
							<input name="submitS" type="submit" class="button" value="Registrarse">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<label for="tab-1">¿Ya tienes una cuenta?</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Enlaces a scripts JavaScript -->
	<!-- <script src="/LS_sessions/control/js/jquery.validate.min.js"></script> -->
	<!-- <script src="/LS_sessions/control/js/jquery.validate.js"></script>-->


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
	<script src="/LS_sessions/control/js/validateLogIn.js"></script>
	<script src="/LS_sessions/control/js/validateSignUp.js"></script>
</body>

</html>