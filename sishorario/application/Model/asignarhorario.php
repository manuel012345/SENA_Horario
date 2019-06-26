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

class asignarhorario extends Model
{
    public function addHorario($idFicha, $idResultA, $idAmbiente, $idDia, $idUsuario, $horaInicio, $horaFin)
    {
        $sql = "INSERT INTO detalleasignacion (idFicha, idResultA, idAmbiente, idDia, idUsuario, horaInicio, horaFin)
                VALUES (:idFicha, :idResultA, :idAmbiente, :idDia, :idUsuario, :horaInicio, :horaFin)";
        $query = $this->db->prepare($sql);
        $parameters = array(
            ':idFicha'=>$idFicha,
            ':idResultA'=>$idResultA,
            ':idAmbiente'=>$idAmbiente,
            ':idDia'=>$idDia,
            ':idUsuario'=>$idUsuario,
            ':horaInicio'=>$horaInicio,
            ':horaFin'=>$horaFin
        );
        $query->execute($parameters);
    }


    public function TodosFicha()
    {
        $sql = "SELECT * FROM ficha";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }


    public function TodosAmbientes()
    {
        $sql = "SELECT idAmbiente, nombre FROM ambiente";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function listarFichas()
    {
        $sql = "SELECT idFicha FROM ficha";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function listarIntructores()
    {
        $sql = "SELECT idUsuario, nombre, apellido FROM usuario";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function listarRAprendizajes()
    {
        $sql = "SELECT idResultA, nombre FROM resulta";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function listarHorarios()
    {
        $sql = 'SELECT u.nombre, u.apellido, f.idFicha ,dia.nombre as dia
                     FROM detalleasignacion as d 
                     INNER JOIN usuario as u ON u.idUsuario = d.idUsuario 
                     INNER JOIN ficha as f ON f.idFicha = d.idFicha 
                     INNER JOIN dia ON dia.idDia = d.idDia ORDER BY dia.idDia ASC';
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function listLunes(){
        $sql = "SELECT CONCAT(U.nombre,' ',U.apellido) AS nombre, F.idFicha 
                FROM detalleasignacion AS DA INNER JOIN usuario AS U ON U.idUsuario = DA.idUsuario 
                    INNER JOIN dia AS D ON D.idDia = DA.idDia 
                    INNER JOIN ficha AS F ON F.idFicha = DA.idFicha 
                WHERE D.idDia = 1";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function listMartes(){
        $sql = "SELECT CONCAT(U.nombre,' ',U.apellido) AS nombre, F.idFicha, D.nombre AS dia 
                FROM detalleasignacion AS DA INNER JOIN usuario AS U ON U.idUsuario = DA.idUsuario 
                    INNER JOIN dia AS D ON D.idDia = DA.idDia 
                    INNER JOIN ficha AS F ON F.idFicha = DA.idFicha 
                WHERE D.idDia = 2";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function listMiercoles(){
        $sql = "SELECT CONCAT(U.nombre,' ',U.apellido) AS nombre, F.idFicha, D.nombre AS dia 
                FROM detalleasignacion AS DA INNER JOIN usuario AS U ON U.idUsuario = DA.idUsuario 
                    INNER JOIN dia AS D ON D.idDia = DA.idDia 
                    INNER JOIN ficha AS F ON F.idFicha = DA.idFicha 
                WHERE D.idDia = 3";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function listJueves(){
        $sql = "SELECT CONCAT(U.nombre,' ',U.apellido) AS nombre, F.idFicha, D.nombre AS dia 
                FROM detalleasignacion AS DA INNER JOIN usuario AS U ON U.idUsuario = DA.idUsuario 
                    INNER JOIN dia AS D ON D.idDia = DA.idDia 
                    INNER JOIN ficha AS F ON F.idFicha = DA.idFicha 
                WHERE D.idDia = 4";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function listViernes(){
        $sql = "SELECT CONCAT(U.nombre,' ',U.apellido) AS nombre, F.idFicha, D.nombre AS dia 
                FROM detalleasignacion AS DA INNER JOIN usuario AS U ON U.idUsuario = DA.idUsuario 
                    INNER JOIN dia AS D ON D.idDia = DA.idDia 
                    INNER JOIN ficha AS F ON F.idFicha = DA.idFicha 
                WHERE D.idDia = 5";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function listSabado(){
        $sql = "SELECT CONCAT(U.nombre,' ',U.apellido) AS nombre, F.idFicha, D.nombre AS dia 
                FROM detalleasignacion AS DA INNER JOIN usuario AS U ON U.idUsuario = DA.idUsuario 
                    INNER JOIN dia AS D ON D.idDia = DA.idDia 
                    INNER JOIN ficha AS F ON F.idFicha = DA.idFicha 
                WHERE D.idDia = 6";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function listDomingo(){
        $sql = "SELECT CONCAT(U.nombre,' ',U.apellido) AS nombre, F.idFicha, D.nombre AS dia 
                FROM detalleasignacion AS DA INNER JOIN usuario AS U ON U.idUsuario = DA.idUsuario 
                    INNER JOIN dia AS D ON D.idDia = DA.idDia 
                    INNER JOIN ficha AS F ON F.idFicha = DA.idFicha 
                WHERE D.idDia = 7";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }


}
?>
