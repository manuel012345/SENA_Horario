<?php

namespace Mini\Controller;

use Mini\Model\asignarhorario;

class AsignarhorarioController{

	public function index($mensaje = null, $textoMensaje = null){
		$asignarhorario = new asignarhorario();
		$asignarhorarios = $asignarhorario->listarHorarios();
		$listLunes = $asignarhorario->listLunes();
		$listMartes = $asignarhorario->listMartes();
		$listMiercoles = $asignarhorario->listMiercoles();
		$listJueves = $asignarhorario->listJueves();
		$listViernes = $asignarhorario->listViernes();
		$listSabado = $asignarhorario->listSabado();
		$listDomingo = $asignarhorario->listDomingo();
		$ambientes = $asignarhorario ->TodosAmbientes();
		$fichas = $asignarhorario->listarFichas();
		$instructores = $asignarhorario->listarIntructores();
		$RAprendizajes = $asignarhorario->listarRAprendizajes();

		require APP . 'view/_templates/header.php';
		require APP . 'view/asignarhorario/index.php';
	}

	public function addAsignarHorario()
	{

		if (isset($_POST['btnAddHorario'])) 
		{
			switch ($_POST['dia']) {
				case 'Lunes':
					$dia = 1; 
					break;
				case 'Martes':
					$dia = 2; 
					break;
				case 'Miércoles':
					$dia = 3; 
					break;
				case 'Jueves':
					$dia = 4; 
					break;
				case 'Viernes':
					$dia = 5; 
					break;
				case 'Sábado':
					$dia = 6; 
					break;
				case 'Domingo':
					$dia = 7; 
					break;
			}

			$horaInicio = $_POST['horaInicio'].":00";
			$horaFin = $_POST['horaFin'].":00";
			$ficha = $_POST['ficha'];
			$ambiente = $_POST['ambiente'];
			$instructor = $_POST['instructor'];
			$RAprendizaje = $_POST['RAprendizaje'];

			if(isset($ficha) || isset($RAprendizaje) || isset($ambiente) || isset($dia) || isset($instructor) || isset($horaInicio) || isset($horaFin))
			{
				$asignarhorario = new asignarhorario();
				$result = $asignarhorario->addHorario($ficha, $RAprendizaje, $ambiente, $dia, $instructor, $horaInicio, $horaFin);
				
				//Retorna el objeto.
				header('location: ' . URL . 'asignarhorario/index');
			}
		}
	}
}






?>