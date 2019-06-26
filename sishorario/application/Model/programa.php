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

class programa extends Model
{

    public function IngresarP($idCentro,$nombreprog,$tipoFormacion,$horario)
    {

        $sql = "call guardar_programa(:p_idCentro,:P_nombreprog,:p_tipoFormacion,:p_horario)";
        $query = $this->db->prepare($sql);
        $parameters = array(':p_idCentro'=>$idCentro,':P_nombreprog'=>$nombreprog,':p_tipoFormacion'=>$tipoFormacion,':p_horario'=>$horario);
        $query->execute($parameters);

        // return ($query->rowcount() ? $query->fetch() : false);

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

    public function TodosCentros()
    {
        $sql = "SELECT idCentro,idSede,nombre,direccion,telefono,correo,director,estado FROM centro";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function TodosProgramas()
    {
        $sql = 'SELECT p.idPrograma , c.nombre , p.nombre, p.tipoFormacion, p.horario 
                      FROM `programa` as p 
                      INNER JOIN centro as c on c.idCentro = p.idCentro
                      GROUP BY p.idPrograma;';
        //$sql = "SELECT idPrograma,idCentro,nombre,tipoFormacion,horario,estado FROM programa";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function listarProgramas()
    {
        $sql = 'SELECT P.idPrograma, C.nombre AS centro, P.nombre, P.tipoFormacion, P.horario, P.estado 
                FROM `programa` AS P 
                INNER JOIN centro AS C ON C.idCentro = P.idCentro';
        //$sql = "SELECT idPrograma,idCentro,nombre,tipoFormacion,horario,estado FROM programa";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

}
?>