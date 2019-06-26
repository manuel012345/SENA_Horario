<?php

namespace Mini\Model;

use Mini\Core\Model;

class usuario extends Model
{
    
    public function IngresarInstruc($idTipoUsuario,$idTipoDoc,$documento,$nombre,$apellido,$correo,$telefono,$genero,$password)
    {
        
     
        $sql = "call guardar_usuario(:P_idTipoUsuario,:P_idTipoDoc,:P_documento,:P_nombre,:P_apellido,:P_correo,:P_telefono,:P_genero,:P_password)";
        $query = $this->db->prepare($sql);
        $passHash = password_hash($password, PASSWORD_BCRYPT);
        $parameters = array(':P_idTipoUsuario'=>$idTipoUsuario,':P_idTipoDoc'=>$idTipoDoc,':P_documento'=>$documento,':P_nombre'=>$nombre,':P_apellido'=>$apellido,':P_correo'=>$correo,':P_telefono'=>$telefono,':P_genero'=>$genero,':P_password'=>$passHash);

        $query->execute($parameters);
        
    }

 public function TodosUsuarios()
    {
        $sql = "SELECT idTipoUsuario,tipoUsuario FROM tipousuario";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();

    }

 public function TodosDocumentos()
    {
        $sql = "SELECT idTipoDoc,tipoDocumento FROM tipodoc";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();

    }

public function TodosDetalles()
    {
        $sql = "SELECT idDetalleUsu,idusuario,profresion,descripcion FROM detalleusuario";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();

    }

    public function TodosInstructores()
    {
        $sql = 'SELECT tu.tipoUsuario, td.tipoDocumento, u.documento, u.nombre, u.apellido, u.correo, u.telefono, u.genero, u.estado 
                FROM `usuario` AS u 
                INNER JOIN tipousuario AS tu ON tu.idTipoUsuario = u.idTipoUsuario 
                INNER JOIN tipodoc AS td ON td.idTipoDoc = u.idTipoDoc';
        //$sql = "SELECT * FROM listausuarios";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();

    }
}
?>
