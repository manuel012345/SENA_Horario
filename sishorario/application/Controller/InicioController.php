<?php

namespace Mini\Controller;

use Mini\Model\Inicio;

class InicioController{

public function index()
    {
        // load views
       require APP . 'view/_templates/header1.php';
        require APP . 'view/inicio/index.php';
        require APP . 'view/_templates/footer1.php';
       
    }

}
?>