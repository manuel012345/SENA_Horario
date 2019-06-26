<?php

namespace Mini\Model;

use Mini\Core\Model;

class centro extends Model
{
    
    public function Ingresarcentro($nombre,$estado)
    {
        $sql = "call SP_INSERTARCATEGORIA(:P_nombre,:P_estado)";
        $query = $this->db->prepare($sql);
        $parameters = array(':P_nombre'=>$nombre,':P_estado'=>$estado);
        $query->execute($parameters);
        
        return ($query->rowcount() ? $query->fetch() : false);
        
    }
}
?>
