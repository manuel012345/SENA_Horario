<?php

/**
 * Class person
 * This is a demo Model class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Model;

use Mini\Model\Log;
use Mini\Libs\Helper;
use \Exception, \PDOException;
use Mini\Core\Model;

class login extends Model
{
    /**
     * Get all songs from database
     */
    public function ValidarLogin($correo)
    {
        $sql = "call SP_LOGIN( :P_correo)";
        $query = $this->db->prepare($sql);
        $parameters = array(':P_correo' => $correo);
        $query->execute($parameters);
        
        return ($query->rowcount() ? $query->fetch() : false);
    }
    
    public function getUserWithEmail($p_correo)
    {
        $sql = "SELECT idusuario, contra, nombre, apellido, correo, rol, codigo, fechaRecuperacion FROM usuario WHERE correo = :p_correo LIMIT 1";
        $parameters = array(':p_correo' => $p_correo);

        try {

            $query = $this->db->prepare($sql);
            $query->execute($parameters);
            return ($query->rowcount() ? $query->fetch() : false);

        } catch (PDOException $e) {

            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'login', $e->getCode(), $e->getMessage());
            return false;

        } catch (Exception $e) {

            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'login', $e->getCode(), $e->getMessage());
            return false;
        }
    }
    public function recoverPassword($p_correo, $p_codigo, $p_fechaRecuperacion)
    {
        $sql = "UPDATE usuario SET codigo = :p_codigo, fechaRecuperacion = :p_fechaRecuperacion WHERE correo = :p_correo";
        $parameters = array(
            ':p_correo' => $p_correo,
            ':p_codigo' => $p_codigo,
            ':p_fechaRecuperacion' => $p_fechaRecuperacion
        );

        try {

            $query = $this->db->prepare($sql);
            return $query->execute($parameters);

        } catch (PDOException $e) {

            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'login', $e->getCode(), $e->getMessage());
            return false;

        } catch (Exception $e) {

            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'login', $e->getCode(), $e->getMessage());
            return false;
        }
    }
    public function getUserWithCode($p_codigo)
    {
        $sql = "SELECT idusuario, contra, nombre, apellido, correo, rol, codigo, fechaRecuperacion FROM usuario WHERE codigo = :p_codigo LIMIT 1";
        $parameters = array(':p_codigo' => $p_codigo);

        try {

            $query = $this->db->prepare($sql);
            $query->execute($parameters);
            return ($query->rowcount() ? $query->fetch() : false);

        } catch (PDOException $e) {

            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'login', $e->getCode(), $e->getMessage());
            return false;

        } catch (Exception $e) {

            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'login', $e->getCode(), $e->getMessage());
            return false;
        }
    }
    
    public function updatePasswordFromRecover($p_idusuario, $p_contra)
    {
        $sql = "UPDATE usuario SET contra = :p_contra, codigo = NULL, fechaRecuperacion = NULL WHERE idusuario = :p_idusuario";
        $parameters = array(
            ':p_contra' => $p_contra,
            ':p_idusuario' => $p_idusuario
        );


        try {

            $query = $this->db->prepare($sql);
            return $query->execute($parameters);

        } catch (PDOException $e) {

            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'login', $e->getCode(), $e->getMessage());
            return false;

        } catch (Exception $e) {

            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'login', $e->getCode(), $e->getMessage());
            return false;
        }

    }  
}
?>
