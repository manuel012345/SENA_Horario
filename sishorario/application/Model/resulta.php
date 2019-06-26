<?php

namespace Mini\Model;

use Mini\Core\Model;

class resulta extends Model
{
    
    public function IngresarRa($idResultA,$idTrimestre,$idCompetencia,$nombre)
    {

        $sql = "INSERT INTO resulta (idResultA, idTrimestre, idCompetencia, nombre)
                VALUES (:p_idResultA, :p_idTrimestre, :p_idCompetencia, :p_nombre)";
        $query = $this->db->prepare($sql);
        $parameters = array(
            ':p_idResultA'=>$idResultA,
            ':p_idTrimestre'=>$idTrimestre,
            ':p_idCompetencia'=>$idCompetencia,
            ':p_nombre'=>$nombre);
        
        $query->execute($parameters);
    }

    public function TodosTrimestres()
    {
        $sql = 'SELECT * FROM trimestre';
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function TodosCompetencias()
    {
        $sql = 'SELECT * FROM competencia';
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function TodosResultas(){
        $sql = 'SELECT r.idResultA, t.descripcion, c.nombre as competencia, r.nombre
        FROM resulta as r
        INNER JOIN trimestre as t
        ON t.idTrimestre = r.idTrimestre 
        INNER JOIN competencia as c
        ON c.idCompetencia = r.idCompetencia';
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

}
?>
