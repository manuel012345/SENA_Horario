<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ingreso</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo URL; ?>img/logos.png" />
	
	<link rel="stylesheet" href="<?php echo URL; ?>css/estilogin.css">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
	

	<div id="formWrapper">

		<div id="form">
			<div class="logo">
				<img src="<?php echo URL; ?>img/logos.png" alt="">
			</div>

			<form method="POST" action="">
		<div class="form-item">
			<p class="formLabel">Contraseña</p>
			<input type="password" name="contra" id="contra" class="form-style" autocomplete="off"/>
		</div>
		<div class="form-item">
			<p class="formLabel">Confirme Contraseña</p>
			<input type="password" name="contra1" id="contra1" class="form-style" autocomplete="off"/>
		</div>
		<div class="form-item">
		<p class="pull-left"><a href="login.php"><small>Volver Atras</small></a></p>
		<a href="<?php echo URL; recuperar/recupercontraseña?>"></a></p>
		<input type="submit" class="login pull-right" value="Recuperar">
		<div class="clear-fix"></div>
		</div>


</div>
</div>
</form>
		</div>
	</div>

	
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!------ Include the above in your HEAD tag ---------->

	<script src="https://code.jquery.com/jquery-2.1.0.min.js" ></script>

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<script src="<?php echo URL; ?>js/jslogin.js"></script>

	<?php if( isset($mensaje) ) { ?>

	<?php if( $textoMensaje == 1 ) { ?>

	<script>

		$(document).ready(function() {
			alert("USUARIO O CONTRASEÑA INCORRECTOS, POR FAVOR VERIFICAR LA INFORMACION");
		});

	</script>

	<?php } else if( $textoMensaje == 2 ) { ?>

	<script>

		$(document).ready(function() {
			alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR");
		});

	</script>

	<?php } ?>

	<?php } ?>

</body>
</html>