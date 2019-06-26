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

			<form method="POST" action="<?php echo URL; ?>login/updatePasswordWithCode">

                <input type="hidden" id="idusuario" name="idusuario" value="<?php echo htmlspecialchars ($login->idusuario,ENT_QUOTES, 'UTF-8'); ?>">
                

		<div class="form-item">
			<p class="formLabel">Contraseña</p>
			<input type="password" name="contra" id="contra" class="form-style" autocomplete="off"/>
		</div>
		<div class="form-item">
			<p class="formLabel">Confirme Contraseña</p>
			<input type="password" name="contra1" id="contra1" class="form-style" autocomplete="off"/>
		</div>
		<div class="form-item">

		<input id="btnGuardar" name="btnGuardar" type="submit" class="login pull-right" value="Enviar" onclick="return comparePassword()">
		<div class="clear-fix"></div>
		</div>
 <script>
        var url = "<?php echo URL; ?>";

         function comparePassword(){
                var contrasena = document.getElementById('contra').value;
                var repetirContrasena = document.getElementById('contra1').value;

                if(contrasena != repetirContrasena){
                    alert('Las contraseñas no coinciden.');
                    return false;
                }else{
                    return true;
                }

            }

    </script>

</div>
</div>
</form>
		</div>
	</div>

	 <script>
        var url = "<?php echo URL; ?>";
    </script>

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