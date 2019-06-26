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
  <nav class="navbar navbar-expand-lg navbar-light bg-dark " name="<?php echo URL; ?>primary">
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
          Usuario
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <button class="dropdown-item" type="button">Mi Perfil</button>
          <a href="<?php echo URL; ?>instructor/index">
          <button class="dropdown-item" type="button">Configuración</button>
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
          <p><a class="text-light"  href="<?php echo URL; ?>ficha/index"><i class="fas fa-edit" ></i>&nbsp;Registrar Ficha</a></p>
          <p><a class="text-light"  href="<?php echo URL; ?>proyecto/index"><i class="fas fa-edit"  ></i>&nbsp;Registrar Actividad de proyecto</a></p>
          <p><a class="text-light"  href="<?php echo URL; ?>trimestre/index"><i class="fas fa-edit" ></i>&nbsp;Registrar Trimestre</a></p>
          <p><a class="text-light"  href="<?php echo URL; ?>resulta/index"><i class="fas fa-edit" ></i>&nbsp;Registrar Resultado de Aprendiz</a></p>
          <p><a class="text-light"  href="<?php echo URL; ?>competencia/index"><i class="fas fa-edit" ></i>&nbsp;Registrar Competencia</a></p>
        </div>
      </aside>
      <section class="col-sm-9 mt-2">
        <!-- Perfil Usuario -->
        <div class="card mt-2">
          <div class="card-header text-right bg-dark">
            <h5 class="text-light">HORARIO INSTRUCTOR TRIMESTRE II</h5>
          </div>
          <div class="card-body row">
            <!-- Cabecera de horas -->
            
            <!-- Fin Cabecera -->
            <!-- Tabla de Horarios -->
            <div class="col-sm-12 mt-2">
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <thead class="text-center text-light bg-dark px-2">
                    <tr>
                      <th>Lunes</th>
                      <th>Martes</th>
                      <th>Miércoles</th>
                      <th>Jueves</th>
                      <th>Viernes</th>
                      <th>Sábado</th>
                      <th>Domingo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><button data-toggle="modal" data-target="#modalAsignacion" data-whatever="Lunes" type="button" class="btn btn-secondary">Asignar Instructor &nbsp;<i class="fas fa-table"></i></button></td>
                      <td><button data-toggle="modal" data-target="#modalAsignacion" data-whatever="Martes" type="button" class="btn btn-secondary">Asignar Instructor &nbsp;<i class="fas fa-table"></i></button></td>
                      <td><button data-toggle="modal" data-target="#modalAsignacion" data-whatever="Miércoles" type="button" class="btn btn-secondary">Asignar Instructor &nbsp;<i class="fas fa-table"></i></button></td>
                      <td><button data-toggle="modal" data-target="#modalAsignacion" data-whatever="Jueves" type="button" class="btn btn-secondary">Asignar Instructor &nbsp;<i class="fas fa-table"></i></button></td>
                      <td><button data-toggle="modal" data-target="#modalAsignacion" data-whatever="Viernes" type="button" class="btn btn-secondary">Asignar Instructor &nbsp;<i class="fas fa-table"></i></button></td>
                      <td><button data-toggle="modal" data-target="#modalAsignacion" data-whatever="Sábado" type="button" class="btn btn-secondary">Asignar Instructor &nbsp;<i class="fas fa-table"></i></button></td>
                      <td><button data-toggle="modal" data-target="#modalAsignacion" data-whatever="Domingo" type="button" class="btn btn-secondary">Asignar Instructor &nbsp;<i class="fas fa-table"></i></button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
  
            <!-- Tabla de Instructores Asignados -->
            <div class="col-sm-12 mt-2">
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <thead class="text-center text-light bg-dark px-2">
                    <tr>
                      <td class="font-weight-bold" colspan="7">Instructores Asignados por día</td>
                    </tr>
                    <tr>
                      <th>Lunes</th>
                      <th>Martes</th>
                      <th>Miercoles</th>
                      <th>Jueves</th>
                      <th>Viernes</th>
                      <th>Sabado</th>
                      <th>Domingo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php foreach ($listLunes as $Lunes) { ?>
                        <tr class="text-center">
                          <td><?php if (isset($Lunes->nombre)) echo htmlspecialchars($Lunes->nombre.' - '.$Lunes->idFicha , ENT_QUOTES, 'UTF-8'); ?></td>
                      <?php } ?>
                      <?php foreach ($listMartes as $Martes) { ?>
                          <td><?php if (isset($Martes->nombre)) echo htmlspecialchars($Martes->nombre.' - '.$Martes->idFicha, ENT_QUOTES, 'UTF-8'); ?></td>
                      <?php } ?>
                      <?php foreach ($listMiercoles as $Miercoles) { ?>
                          <td><?php if (isset($Miercoles->nombre)) echo htmlspecialchars($Miercoles->nombre.' - '.$Miercoles->idFicha, ENT_QUOTES, 'UTF-8'); ?></td>
                      <?php } ?>
                       <?php foreach ($listJueves as $Jueves) { ?>
                          <td><?php if (isset($Jueves->nombre)) echo htmlspecialchars($Jueves->nombre.' - '.$Jueves->idFicha, ENT_QUOTES, 'UTF-8'); ?></td>
                      <?php } ?>
                      <?php foreach ($listViernes as $Viernes) { ?>
                          <td><?php if (isset($Viernes->nombre)) echo htmlspecialchars($Viernes->nombre.' - '.$Viernes->idFicha, ENT_QUOTES, 'UTF-8'); ?></td>
                      <?php } ?>
                      <?php foreach ($listSabado as $Sabado) { ?>
                          <td><?php if (isset($Sabado->nombre)) echo htmlspecialchars($Sabado->nombre.' - '.$Sabado->idFicha, ENT_QUOTES, 'UTF-8'); ?></td>
                      <?php } ?>
                      <?php foreach ($listDomingo as $Domingo) { ?>
                          <td><?php if (isset($Domingo->nombre)) echo htmlspecialchars($Domingo->nombre.' - '.$Domingo->idFicha, ENT_QUOTES, 'UTF-8'); ?></td>
                        </tr>
                      <?php } ?>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div>
      </section>

<!-- Modal de Asignar Horario -->

<div class="modal fade" id="modalAsignacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="container" action="<?php echo URL; ?>asignarhorario/addAsignarHorario" method="POST" id="formAsignarHorario">
          <div class="row">
            <input class="form-control inpDia" type="text" name="dia" readonly>
            <div class="form-group col-sm-6">
              <label for="recipient-name" class="col-form-label">Hora de Inicio</label>
              <input type="time" class="form-control" name="horaInicio">
            </div>
            <div class="form-group col-sm-6">
              <label for="recipient-name" class="col-form-label">Hora Fin:</label>
              <input type="time" class="form-control" name="horaFin">
            </div>
            <div class="form-group col-sm-6">
              <label for="recipient-name" class="col-form-label">Ficha:</label>
              <select class="form-control" name="ficha">
                <option >Seleccione...</option>
                <?php foreach ($fichas as $ficha) { ?>
                  <option value="<?php echo $ficha->idFicha; ?>"> <?php echo $ficha->idFicha; ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group col-sm-6">
              <label for="recipient-name" class="col-form-label">Ambiente:</label>
              <select class="form-control" name="ambiente">
                <option >Seleccione...</option>
                <?php foreach ($ambientes as $ambiente) { ?>
                  <option value="<?php echo $ambiente->idAmbiente; ?>"> <?php echo $ambiente->nombre; ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group col-sm-6">
              <label for="recipient-name" class="col-form-label">Instructor:</label>
              <select class="form-control" name="instructor">
                <option >Seleccione...</option>
                <?php foreach ($instructores as $instructor) { ?>
                  <option value="<?php echo $instructor->idUsuario; ?>"> <?php echo $instructor->nombre.' '.$instructor->apellido; ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group col-sm-6">
              <label for="recipient-name" class="col-form-label">Resultado de Aprendizaje:</label>
              <select class="form-control" name="RAprendizaje">
                <option >Seleccione...</option>
                <?php foreach ($RAprendizajes as $RAprendizaje) { ?>
                  <option value="<?php echo $RAprendizaje->idResultA; ?>"> <?php echo $RAprendizaje->nombre; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" name="btnAddHorario">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>


        <!-- Javascripts : 1.jquery 2.popper 3.bootstrap 4.fontawesome-->
  <script src="<?php echo URL; ?>js/jquery-3.3.1.slim.min.js"></script>
  <script src="<?php echo URL; ?>js/popper.min.js"></script>
  <script src="<?php echo URL; ?>js/bootstrap.js"></script>
  <script src="<?php echo URL; ?>js/all.js"></script>
  <script src="<?php echo URL; ?>js/funciones.js"></script>
</body>
</html>