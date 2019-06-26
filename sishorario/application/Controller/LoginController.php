<?php 

namespace Mini\Controller;

use Mini\Model\Login;
use Mini\Libs\Helper;
use Mini\Core\Controller;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class LoginController extends Controller{

 public function index()
    {
        $this->render('login/index', 'Iniciar Sesión', null, false);
    }

    public function register()
    {
        $this->render('registro/index', 'Registrar Usuario', null, false);
    }

    public function template()
    {
        $this->render('registro/index', 'Registrar Usuario', null, false);
    }

    public function recover()
    {
        $this->render('recuperar/index', 'Recuperar Contraseña', null, false);
    }
	

	public function Acceso(){

		if (isset($_POST["btnIngresar"])) {
			$Login=new Login();
			$result=$Login->ValidarLogin( $_POST["txtCorreo"],$_POST["txtContrasena"]);
			 // var_dump($result);
			 // exit();
			//Retorna el objeto.

			$resp = "datos correctos";
			$rol="admin";

			if($result->mensaje == $resp ){

				$hash = $result->contra;

				if (password_verify($_POST["txtContrasena"], $hash)) {
					$_SESSION["correo"]=$result->correo;
					$_SESSION["usuario"] = $result->nombre;
					$_SESSION["rol"]=$result->rol;

					if ($result->rol== $rol) {

						header('location: ' . URL . 'home/index');
						return;
					}else{


						header('location: ' . URL . 'inicio');
						return;
					}

				} else{

					header('location: ' . URL . 'login/index/true/1');
					return;
				}


			}else{

				header('location: ' . URL . 'registro/index/true/2');
				return;	

			}


		}

		header('location: ' . URL . 'login');
		return;



	}
	public function sendMail($correo, $nombre, $codigo)
	{
		$template = file_get_contents(APP.'view/login/template.php');
		$template = str_replace("{{name}}", $nombre, $template);
		$template = str_replace("{{action_url_2}}", '<b>http:'.URL.'login/newPassword/'.$codigo.'</b>', $template);
		$template = str_replace("{{action_url_1}}", 'http:'.URL.'login/newPassword/'.$codigo, $template);
		$template = str_replace("{{year}}", date('Y'), $template);
		$template = str_replace("{{operating_system}}", Helper::getOS(), $template);
		$template = str_replace("{{browser_name}}", Helper::getBrowser(), $template);

		$mail = new PHPMailer(true);
		$mail->CharSet = "UTF-8";

		try {
			$mail->isSMTP();
            $mail->Host = 'smtp.googlemail.com';  //gmail SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'eatsoftadm@gmail.com';   //username
            $mail->Password = 'administrador123';   //password
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;                    //smtp port

            $mail->setFrom('eatsoftadm@gmail.com', 'Eatsoft');
            $mail->addAddress($correo, $nombre);

            $mail->isHTML(true);

            $mail->Subject = 'Recuperación de contraseña - Eatsoft';
            $mail->Body    = $template;

            if (!$mail->send()) {
            	return false;
            } else {
            	return true;
            }
        } catch (Exception $e) {
        	return false;
            // echo 'Message could not be sent.';
            // echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }
    public function sendRecoveryCode()
    {
    	if (isset($_POST["email"]) && trim($_POST["email"] != '')) {
    		$correo = $_POST['email'];
    		$codigo = $this->createRandomCode();
    		$fechaRecuperacion = date("Y-m-d H:i:s", strtotime('+24 hours'));
    		$loginModel = new login();
    		$login = $loginModel->getUserWithEmail($correo);

    		if ($login === false) {
    			$mensaje = 'El correo electrónico no se encuentra registrado en el sistema.';
    			$this->render('recuperar/index', 'Recuperar Contraseña', array('mensaje' => $mensaje), false);
    		} else {
    			$respuesta = $loginModel->recoverPassword($correo, $codigo, $fechaRecuperacion);

    			if ($respuesta) {
    				$this->sendMail($correo, $login->nombre, $codigo);

    				$mensaje = 'Se ha enviado un correo electrónico con las instrucciones para el cambio de tu contraseña. Por favor verifica la información enviada.';
    				$this->render('recuperar/index', 'Recuperar Contraseña', array('mensaje' => $mensaje), false);
    			} else {
    				$mensaje = 'No se recuperar la cuenta. Si los errores persisten comuniquese con el administrador del sitio.';
    				$this->render('recuperar/index', 'Recuperar Contraseña', array('mensaje' => $mensaje), false);
    			}
    		}
    	} else {
    		$mensaje = 'El campo de correo electrónico es requerido.';
    		$this->render('recuperar/index', 'Recuperar Contraseña', array('mensaje' => $mensaje), false);
    	}
    }
    public function createRandomCode()
    {
    	$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz0123456789";
    	srand((double)microtime()*1000000);
    	$i = 0;
    	$pass = '' ;

    	while ($i <= 7) {
    		$num = rand() % 33;
    		$tmp = substr($chars, $num, 1);
    		$pass = $pass . $tmp;
    		$i++;
    	}

    	return time().$pass;
    }
    public function newPassword($code = null)
    {
    	if (isset($code)) {
            // Instance new Model (Song)
    		$loginModel = new login();
            // do deleteSong() in model/model.php
    		$login = $loginModel->getUserWithCode($code);

    		if ($login === false) {
    			$mensaje = 'El código de recuperación de contraseña no es valido. Por favor intenta de nuevo.';
    			$this->render('recuperar/index', 'Recuperar Contraseña', array('mensaje' => $mensaje), false);
    		} else {
    			$current = date("Y-m-d H:i:s");

    			if (strtotime($current) > strtotime($login->fechaRecuperacion)) {
    				$mensaje = 'El código de recuperación de contraseña ha expirado. Por favor intenta de nuevo.';
    				$this->render('recuperar/index', 'Recuperar Contraseña', array('mensaje' => $mensaje), false);
    			} else {
    				$this->render('confirmar/index', 'Nueva Contraseña', array('login' =>  $login), false);
    			}
    		}
    	} else {
    		header('location: ' . URL);
    	}
    }
    public function updatePasswordWithCode()
    {
    	if (isset($_POST['btnGuardar'])) {
    		$idusuario = $_POST['idusuario'];
    		$contrasena = $_POST['contra'];
    		$repetirContrasena = $_POST['contra1'];

    		if ($contrasena != $repetirContrasena) {

    			$login = new \stdClass();
    			$login->idusuario = $idusuario;

    			$mensaje = 'Las contraseñas no coinciden. Por favor, verifique la información.';
    			$this->render('confirmar/index', 'Registrar Usuario', array('login' => $login, 'mensaje' => $mensaje), false);
    			return;

    		} else {
    			$loginModel = new login();

    			$contrasena = password_hash($_POST['contra'], PASSWORD_BCRYPT);

    			$resultado = $loginModel->updatePasswordFromRecover($idusuario, $contrasena);
    			if ($resultado != false) {

    				$mensaje = 'Su contraseña ha sido cambiada con éxito.';
    				$this->render('login/index', 'Iniciar Sesion', array('mensaje' => $mensaje), false);
    				return;

    			} else {
    				$login = new \stdClass();
    				$login->idusuario = $idusuario;
    				$mensaje = 'Ocurrio un error al intentar cambiar la contraseña. Por favor, verifique la información.';
    				$this->render('confirmar/index', 'Registrar Usuario', array('login' => $login, 'mensaje' => $mensaje), false);
    				return;
    			}
    		}
    	}else{
    		header('location:'.URL);
    	}

    }  
     public function closeSession()
    {
        session_unset();
        session_destroy();
        header('Location:'.URL.'inicio');
    }
     public function closeSessionAdmin()
    {
        session_unset();
        session_destroy();
        header('Location:'.URL.'login/index');
    }
}


?>