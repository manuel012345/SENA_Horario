<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recuperar Contraseña</title>
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

			<form method="POST" action="<?php echo URL; ?>login/sendRecoveryCode">
		<div class="form-item">
			<p class="formLabel">E-mail</p>
			<input type="email" name="email" id="email" class="form-style" autocomplete="off"/>
		</div>


		<div class="form-item">
		<p class="pull-left"><a href="<?php echo URL; ?>login/index"><small>Volver Atras</small></a></p>
		<a href="<?php echo URL; ?>login/sendRecoveryCode?>"></a></p>
		<input type="submit" class="login pull-right" name="Recuperar" value="Recuperar">
		<div class="clear-fix"></div>
		</div>

</form>

	
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!------ Include the above in your HEAD tag ---------->

	<script src="https://code.jquery.com/jquery-2.1.0.min.js" ></script>

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<script src="<?php echo URL; ?>js/jslogin.js"></script>

	<?php if(isset($mensaje)){ ?>

        <script>
            
            window.onload = function(){
                alert('<?php echo $mensaje; ?>');
            }
        
        </script>

    <?php } ?>


</body>
</html>