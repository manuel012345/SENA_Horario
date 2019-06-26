<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ingreso</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo URL; ?>img/Logologin2.png" />
	
	<link rel="stylesheet" href="<?php echo URL; ?>css/estilogin.css">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
	

	<div id="formWrapper">

		<div id="form">
			<div class="logo">
				<img src="<?php echo URL; ?>img/Logologin2.png" alt="">
			</div>

			<form method="POST" action="<?php echo URL; ?>login/Acceso" >
				<div class="form-item">
					<p class="formLabel">E-mail</p>
					<input type="email" id="txtCorreo" name="txtCorreo"  class="form-style" required autocomplete="off"/>

				</div>
				<div class="form-item">
					<p class="formLabel">Contraseña</p>
					<input type="password" id="txtContrasena" name="txtContrasena" required class="form-style" />

					<!-- <div class="pw-view"><i class="fa fa-eye"></i></div> -->
					<p class="contrasena"><a href="<?php echo URL; ?>recuperar/index"><small>Olvidaste tu contraseña?</small></a></p>	
				</div>
				<div class="form-item">
					<p class="pull-left"><a href="<?php echo URL; ?>registro/index"><small>Registrate</small></a></p>
					<input type="submit" id="btnIngresar" name="btnIngresar" class="login pull-right" value="Ingresar">
					<div class="clear-fix"></div>
				</div>

			</form>
		</div>
	</div>

	
	


	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!------ Include the above in your HEAD tag ---------->

	<script src="https://code.jquery.com/jquery-2.1.0.min.js" ></script>

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<script src="<?php echo URL; ?>js/jslogin.js"></script>



</body>
</html>