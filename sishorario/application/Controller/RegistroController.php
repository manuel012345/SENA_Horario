<?php

namespace Mini\Controller;

use Mini\Model\Registro;

class RegistroController{

	public function index($mensaje = null, $textoMensaje = null){


		require APP . 'view/registro/index.php';

	}

	public function IngresarRegistro(){

		if (isset($_POST["BtnRegistrarP"])) {
			$Registro=new Registro();

			$ExisteCorreo=$Registro->verificarEmail($_POST["correo"]);

			// var_dump($ExisteCorreo);
			// exit();
			// Retorna el objeto.

			if($ExisteCorreo==false){
				$result=$Registro->RegistrarP($_POST["idTipoUsuario"],$_POST["documento"],$_POST["idTipoDoc"], $_POST["nombre"],$_POST["apellido"],$_POST["telefono"],$_POST["genero"],$_POST["estado"]);


			
			
				header('location: ' . URL . 'login/index');
				return;

			}
			else{
				header('location: ' . URL . 'registro/index/true/1');
				return;
				


			}

			
		}
	}
}
?>