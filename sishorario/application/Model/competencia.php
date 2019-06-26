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

class competencia extends Model
{
    
    public function IngresarC($idPrograma,$nombre,$codigo)
    {

        $sql = "INSERT INTO competencia (idPrograma, nombre, codigo)
                VALUES (:p_idPrograma, :p_nombre, :p_codigo)";
        $query = $this->db->prepare($sql);
        $parameters = array(
            ':p_idPrograma'=>$idPrograma,
            ':p_nombre'=>$nombre,
            ':p_codigo'=>$codigo
        );
        $query->execute($parameters);

    }

    public function TodosProgramas()
    {
        $sql = "SELECT * FROM programa";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function TodosCompetencias()
    {
        $sql = 'SELECT c.idCompetencia ,p.nombre as programa, c.nombre, c.codigo, c.estado 
                      FROM competencia as c 
                      INNER JOIN programa as p 
                      ON p.idPrograma = c.idPrograma';
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

}
?>
