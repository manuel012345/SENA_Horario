<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ingreso</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/<35></35>.png" />
	
	<link rel="stylesheet" href="css/estilogin.css">
</head>
<body>
	

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<script src="https://code.jquery.com/jquery-2.1.0.min.js" ></script>
<body>
<div id="formWrapper">

<div id="form">
<div class="logo">
<img src="img/35.png" alt="">
</div>
	<form method="post" action="validacion.php">
		<div class="form-item">
			<p class="formLabel">E-mail</p>
			<input type="email" name="email" id="email" class="form-style" autocomplete="off"/>
		</div>
		<div class="form-item">
		<p class="pull-left"><a href="login.php"><small>Volver Atras</small></a></p>
		<a href="<?php echo URL; recuperar/recupercontraseña?>"></a></p>
		<input type="submit" class="login pull-right" value="Recuperar">
		<div class="clear-fix"></div>
		</div>


</div>
</div>
	
		<?php
		if(isset($_POST['submit'])){
			require("validacion.php");
		}
	?>

	
</body>
</html>
 	<script src="js/jslogin.js"></script>
</body>
</html>