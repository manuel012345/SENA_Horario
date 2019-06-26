<?php

namespace Mini\Model;

use Mini\Core\Model;

class trimestre extends Model
{
    
    public function IngresarT($idPrograma,$descripcion)
    {
        $sql = "call guardar_trimestre(:p_idPrograma,:p_descripcion)";
        $query = $this->db->prepare($sql);
        $parameters = array(':p_idPrograma'=>$idPrograma,':p_descripcion'=>$descripcion);
        $query->execute($parameters);
    }


    public function TodosProgramas()
    {
        $sql = "SELECT * FROM programa";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function TodosTrimestres()
    {
        $sql = 'SELECT t.idTrimestre, p.nombre, t.descripcion, t.estado 
        FROM trimestre as t 
        INNER JOIN programa as p 
        ON p.idPrograma = t.idPrograma GROUP BY t.idTrimestre';
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

}
?>
