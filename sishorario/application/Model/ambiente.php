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

class ambiente extends Model
{
    
    public function IngresarA($idTipoAmbien,$nombre,$capacidad)
    {
        
     
        $sql = "call guardar_ambiente(:P_idTipoAmbien,:P_nombre,:P_capacidad)";
        $query = $this->db->prepare($sql);
        $parameters = array(':P_idTipoAmbien'=>$idTipoAmbien,':P_nombre'=>$nombre,':P_capacidad'=>$capacidad);
        $query->execute($parameters);
        

      
    }

    // public function ActualizarCat($nombre,$estado,$idCategoria)
    // {
    //     $sql = "call SP_ACTUALIZARCATEGORIA(:P_nombre,:P_estado,:P_idCategoria)";
    //     $query = $this->db->prepare($sql);
    //     $parameters = array(':P_nombre' => $nombre,':P_estado'=>$estado, ':P_idCategoria'=> $idCategoria);

        
    //     return $query->execute($parameters);
    // }

    // public function ConsultarC($id_Categoria)
    // {
    //     $sql = "call SP_CONSULTARCATEGORIA( :P_idCategoria)";
    //     $query = $this->db->prepare($sql);
    //     $parameters = array(':P_idCategoria' => $id_Categoria);
    //     $query->execute($parameters);
        
    //     return $query->fetch();
    
    // }

public function TodosTambientes()
    {
        $sql = "SELECT * FROM tipoambiente";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();


    }



    public function TodosAmbientes()
    {
        $sql = 'SELECT a.idAmbiente ,a.nombre , ta.nombre as ambiente,a.capacidad 
                      FROM `ambiente` as a 
                      INNER JOIN tipoambiente as ta on ta.idTipoAmbien = a.idTipoAmbien 
                      GROUP BY a.idAmbiente;';
        //$sql = "SELECT * FROM listambiente";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();


    }
}
?>
