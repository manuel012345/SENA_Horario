<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo URL; ?>img/35.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travelix Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>styles/bootstrap4/bootstrap.min.css">
    <link href="<?php echo URL; ?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>styles/offers_styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>styles/offers_responsive.css">

    <link href="<?php echo URL; ?>//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
   <div class="super_container">

        <!-- Header -->

        <header class="header">
   <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        
                        <div class="user_box ml-auto">
                            <?php if(!isset($_SESSION["usuario"])) {?>
                                <div class="user_box_login user_box_link"><a href="<?php echo URL; ?>login/index">Inicia Sesion</a></div>


                                <div class="user_box_register user_box_link"><a href="<?php echo URL; ?>registro/index">Registrate</a></div>
                            <?php }else{ ?>
                                <div class="user_box_register user_box_link"><a href="<?php echo URL; ?>login/closeSession">Cerrar Sesión</a></div>

                            <?php } ?>      
                        </div>
                    </div>
                </div>
            </div>      
        </div>
        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container">
                            <div class="logo"><a href="<?php echo URL; ?>inicio"><img src="<?php echo URL; ?>images/35.png" alt=""></a></div>
                        </div>
                        <div class="main_nav_container ml-auto">
                            <ul class="main_nav_list">
                                <li class="main_nav_item"><a href="<?php echo URL; ?>inicio">Inicio</a></li>
                                <li class="main_nav_item"><a href="<?php echo URL; ?>about/index">Categorias</a></li>
                                <li class="main_nav_item"><a href="<?php echo URL; ?>offers/index">Restaurantes</a></li>
                                <li class="main_nav_item"><a href="<?php echo URL; ?>single_listing/index">Centro Comercial</a></li>
                                <?php if (isset($_SESSION["usuario"])) { ?>
                                 <li  class="main_nav_item"><a href="#"> Bienvenid@: <?php echo $_SESSION["usuario"]; ?></a>
                                 <?php } ?></li>
                            </ul>
                        </div>
                    

                        <div class="hamburger">
                            <i class="fa fa-bars trans_200"></i>
                        </div>
                    </div>
                </div>
            </div>  
        </nav>

    </header>