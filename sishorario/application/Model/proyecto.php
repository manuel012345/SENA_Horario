<?php

namespace Mini\Model;

use Mini\Core\Model;

class proyecto extends Model
{
    
    public function IngresarActiproy($idResultA,$nombre)
    {
        $sql = "
        set @estado = 'Activo';
        INSERT INTO actiproy (idResultA, nombre, estado)
                VALUES (:p_idResultA, :p_nombre, @estado)";
        $query = $this->db->prepare($sql);
        $parameters = array(
        	':p_idResultA'=>$idResultA,
        	':p_nombre'=>$nombre);
        $query->execute($parameters);
    }

    public function listarRAprendizajes()
    {
        $sql = "SELECT idResultA, nombre FROM resulta";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function TodosActiproy()
    {
        $sql = "SELECT * FROM actiproy";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }
}
?>
