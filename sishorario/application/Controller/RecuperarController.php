<?php

namespace Mini\Controller;

use Mini\Model\Recuperar;

class RecuperarController{

	public function index(){


	require APP . 'view/recuperar/index.php';

	}

	
	function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //convierte el array en un string
}




	public function recuperarContrasena(){

		if (isset($_POST["Recuperar"])) {
			$Recuperar =new Recuperar();
			$result=$Recuperar->recuperarContrasena( $_POST["txtCorreo"]);


				}

		header('location: ' . URL . 'login');
	}

}
