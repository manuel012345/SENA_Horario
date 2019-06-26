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

use Mini\Core\Model;

class Registro extends Model
{
    /**
     * Get all songs from database
     */
    public function RegistrarP($contrasena,$nombre,$apellido,$correo)
    {
        
       
        $sql = "call guardar_usuario( :P_idTipoUsuario,:P_documento,:P_apellido,:P_correo)";
        $query = $this->db->prepare($sql);
        $passHash = password_hash($contrasena, PASSWORD_BCRYPT);
        $parameters = array(':P_contra'=>$passHash,':P_nombre'=>$nombre,':P_apellido'=>$apellido,':P_correo' => $correo);
        
       

        $query->execute($parameters);
        

       
         
}

public  function verificarEmail($correo)
{
     $check_mail = "SELECT * FROM usuario WHERE correo = :P_correo LIMIT 1";
         $query= $this->db->prepare($check_mail);
         $parameters = array(':P_correo' => $correo);
        
       

        $query->execute($parameters);

                return ($query->rowcount() ? $query->fetch() : false);


}



    }
    ?>
