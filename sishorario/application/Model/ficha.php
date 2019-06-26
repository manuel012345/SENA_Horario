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

class ficha extends Model
{
    
    public function Ingresarf($idFicha,$idPrograma,$fechaInicio,$fechaFin,$cantidadAprendiz)
    {
        
     
        $sql = "call guardar_ficha(:p_idFicha,:p_idPrograma,:p_fechaInicio,:p_fechaFin,:p_cantidadAprendiz)";
        $query = $this->db->prepare($sql);
        $parameters = array(':p_idFicha'=>$idFicha,':p_idPrograma'=>$idPrograma,':p_fechaInicio'=>$fechaInicio,':p_fechaFin'=>$fechaFin,':p_cantidadAprendiz'=>$cantidadAprendiz);
        $query->execute($parameters);
        

}
 public function TodasDeFichas()
    {
        $sql = "SELECT idDetalleF,idFicha, idUsuario,jornada, estado FROM detalleficha";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();


    }



    public function TodasFichas()
    {
        
        $sql = 'SELECT f.idFicha, p.nombre, f.fechaInicio, f.fechaFin, f.cantidadAprendiz
                       FROM ficha as f
                       INNER JOIN programa as p
                       ON p.idPrograma = f.idPrograma';
        //$sql = "SELECT idFicha,idPrograma, fechaInicio,fechaFin, cantidadAprendiz FROM ficha";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();


    }

}
?>
