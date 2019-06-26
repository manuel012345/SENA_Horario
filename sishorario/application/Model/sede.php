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

class sede extends Model
{
    
    public function Ingresarsede($nombre,$estado)
    {
        
     
        $sql = "call SP_INSERTARCATEGORIA(:P_nombre,:P_estado)";
        $query = $this->db->prepare($sql);
        $parameters = array(':P_nombre'=>$nombre,':P_estado'=>$estado);
        $query->execute($parameters);
        

        return ($query->rowcount() ? $query->fetch() : false);
        
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





    // public function TodasCategorias()
    // {
    //     $sql = "SELECT idCategoria, nombre, estado FROM categoria";
    //     $query = $this->db->prepare($sql);
    //     $query->execute();

    //     return $query->fetchAll();


    // }
}
?>
