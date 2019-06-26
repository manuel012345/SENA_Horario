<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>SisHorario | </title>
  <!-- Icono -->
  <link rel="icon" type="text/css" href="<?php echo URL; ?>img/Logologin2.png">
  <!-- Bootstrap Estilos -->
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/bootstrap.css">
  <!-- hoja de Estilo FontAwesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/all.css">
  <!-- Mis Estilos -->
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/estilo.css">
</head>
<body>

<!-- Menu -->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="text-light navbar-brand" href="index.html"><img class="col-sm-4 img-fluid" src="<?php echo URL; ?>img/descarga.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
         <h2 class="text-light"></h2>
      </ul>
      <ul class="navbar-nav my-2 my-lg-0">
        <div class="btn-group">
        <a class="text-light activate dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>&nbsp;
          Ficha
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <button class="dropdown-item" type="button">Mi Perfil</button>
         <a href="<?php echo URL; ?>home/index">
          <button class="dropdown-item" type="button">Configuración</button></a>
          <button class="dropdown-item" type="button">Cerrar Sesión</button>
        </div>
      </div>
      </ul>
    </div>
  </nav>

  <section class="container-fluid">
    <div class="row">
      <!-- Lateral -->
      <aside class="col-sm-2 bg-dark">
        <div class="mt-2 text-right">
          <p><a class="text-light"  href="<?php echo URL; ?>home/index"><i class="fas fa-edit" ></i>&nbsp;Inicio</a></p>
          <p><a class="text-light"  href="<?php echo URL; ?>usuario/index"><i class="fas fa-edit" ></i>&nbsp;Registrar Instructor</a></p>
          <p><a class="text-light" href="<?php echo URL; ?>ambiente/index"><i class="fas fa-edit"  ></i>&nbsp;Registrar Ambiente</a></p>
          <p><a class="text-light" href="<?php echo URL; ?>programa/index"><i class="fas fa-edit"  ></i>&nbsp;Registrar Programa</a></p>
          <p><a class="text-light"  href="<?php echo URL; ?>trimestre/index"><i class="fas fa-edit" ></i>&nbsp;Registrar Trimestre</a></p>
          <p><a class="text-light"  href="<?php echo URL; ?>proyecto/index"><i class="fas fa-edit"  ></i>&nbsp;Registrar Actividad de proyecto</a></p>
          <p><a class="text-light"  href="<?php echo URL; ?>resulta/index"><i class="fas fa-edit" ></i>&nbsp;Registrar Resultado de Aprendiz</a></p>
          <p><a class="text-light"  href="<?php echo URL; ?>competencia/index"><i class="fas fa-edit" ></i>&nbsp;Registrar Competencia</a></p>
          <p><a class="text-light"  href="<?php echo URL; ?>asignarhorario/index"><i class="fas fa-edit" ></i>&nbsp;Asignar Horarios</a></p>
        </div>
      </aside>
      <section class="col-sm-10">
        <!-- Perfil Usuario -->
       <div class="card mt-2">
          <div class="card-header text-right bg-dark">
            <h5 class="text-light">FICHA</h5>
          </div>
          <div class="card-body row">
            <!-- Cabecera de ambiente -->
             <form method="POST" action="<?php echo URL; ?>ficha/IngresarFicha" enctype="multipart/form-data">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row register-form">
                                  <!-- Inicio de  -->
                                  
                                    <div class="col-md-6">
                                      <div class="form-group">
                                              <label>Ficha</label>
                                         <input type="text" id="idFicha" name="idFicha"  class="form-control" />
                                    </div>
                                        <div class="form-group">
                                              <label>Programa</label>
                                        <select type="select"  id="idPrograma" name="idPrograma"  class="form-control" >
                                         <option>Seleccione...</option>
                                        <?php foreach ($programas as $programa) { ?>
                                         

                                        <option value="<?php echo $programa->idPrograma?>"> <?php echo $programa->nombre; ?>
                                        </option>

                                        <?php } ?>
                                        </select>
                                    </div>
                                        <div class="form-group">
                                              <label>Fecha Inicio</label>
                                         <input type="date" id="fechaInicio" name="fechaInicio"  class="form-control" />
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">

                                      <div class="form-group">
                                        <label>Fecha Fin</label>
                                            <input type="date" id="fechaFin" name="fechaFin"  class="form-control"  />
                                      </div>
                                      <div class="form-group">
                                        <label>Cantidad Aprendices</label>
                                            <input type="text" id="cantidadAprendiz" name="cantidadAprendiz"  class="form-control"  />
                                      </div>
                                      <div class="form-group col-sm-12 text-right">
                                        
                                        <button class="btn-primary btn" type="submit" id="BtnIngresarF" name="BtnIngresarF">Guardar</button>
                                      </div>
                                      <!--<input type="submit" id="BtnIngresarF" name="BtnIngresarF"  class="btnRegister" value="Ingresar">-->
                                    </div>
                                 
                                </div>
                            </div>
                        </div>

                        </form>
            <!-- Fin Cabecera -->
            <!-- Tabla de Horarios -->
            <div class="col-sm-12 mt-2">
              <div class="table-responsive">
                <table class="table-bordered text-center">
                  <thead class="text-center text-light bg-dark px-2">
                    <tr>
                      <th>FICHA</th>
                      <th>PROGRAMA</th>
                      <th>FECHA INICIO</th>
                      <th>FECHA FIN</th>
                      <th>CANTIDAD APRENDICES</th>
                      <th>EDITAR</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($ficha as $TodasFichas) { ?>
                      
                        <tr>
                            <td><?php if (isset($TodasFichas->idFicha)) echo htmlspecialchars($TodasFichas->idFicha, ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php if (isset($TodasFichas->nombre)) echo htmlspecialchars($TodasFichas->nombre, ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php if (isset($TodasFichas->fechaInicio)) echo htmlspecialchars($TodasFichas->fechaInicio, ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php if (isset($TodasFichas->fechaFin)) echo htmlspecialchars($TodasFichas->fechaFin, ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php if (isset($TodasFichas->cantidadAprendiz)) echo htmlspecialchars($TodasFichas->cantidadAprendiz, ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><a class="btn btn-default" href="<?php echo URL . 'ficha/Editar/' . htmlspecialchars($ficha->idFicha, ENT_QUOTES, 'UTF-8'); ?>">Editar</a></td>
                        </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--<?php #echo '<pre>'; ?>
      <?php #print_r($ficha); ?>
      <?php #var_dump($ficha); ?>-->
            

    </div>
  </section>

  <!-- Javascripts : 1.jquery 2.popper 3.bootstrap 4.fontawesome-->
  <script src="<?php echo URL; ?>js/jquery-3.3.1.slim.min.js"></script>
  <script src="<?php echo URL; ?>js/popper.min.js"></script>
  <script src="<?php echo URL; ?>js/bootstrap.js"></script>
  <script src="<?php echo URL; ?>js/all.js"></script>
</body>
</html>