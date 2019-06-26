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
          <p><a class="text-light"  href="<?php echo URL; ?>ambiente/index"><i class="fas fa-edit"  ></i>&nbsp;Registrar Ambiente</a></p>
          <p><a class="text-light"  href="<?php echo URL; ?>programa/index"><i class="fas fa-edit"  ></i>&nbsp;Registrar Programa</a></p>
          <p><a class="text-light"  href="<?php echo URL; ?>ficha/index"><i class="fas fa-edit" ></i>&nbsp;Registrar Ficha</a></p>
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
            <h5 class="text-light">INSTRUCTORES</h5>
          </div>
          <div class="card-body row">
            <!-- Cabecera de horas -->
            <form method="POST" action="<?php echo URL; ?>usuario/IngresarInstructor" enctype="multipart/form-data">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="register-form" >
                    <!-- inicio de ...-->
                    <div class="row">

                      <div class=" form-group col-sm-3">
                        <label>Tipo Usuario</label>
                        <select type="select"  id="tipousuario" name="tipousuario"  class="form-control" >
                         <option>Seleccione...</option>
                         <?php foreach ($tipoUsuarios as $tipousuario) { ?>


                          <option value="<?php echo $tipousuario->idTipoUsuario; ?>"> <?php echo $tipousuario->tipoUsuario; ?>
                        </option>

                      <?php } ?>
                    </select>
                  </div>



                  <div class="form-group col-sm-3">
                   <label>Tipo Documento</label>
                   <select type="select"  id="tipodoc" name="tipodoc"  class="form-control" >
                    <option>Seleccione...</option>
                    <?php foreach ($TipoDocumentos as $tipodoc) { ?>


                      <option value="<?php echo $tipodoc->idTipoDoc; ?>"> <?php echo $tipodoc->tipoDocumento; ?>
                    </option>

                  <?php } ?>
                </select>
              </div>
              <div class="form-group col-sm-3">
               <label>Profesion</label>
               <select type="select"  id="idDetalleUsu" name="idDetalleUsu"  class="form-control" >
                <option>Seleccione...</option>

                <?php foreach ($detalleusuarios as $detalleUsuario) { ?>

                  <option value="<?php echo $detalleUsuario->idDetalleUsu?>"> <?php echo $detalleUsuario->profresion; ?>
                </option>

              <?php } ?>
            </select>
          </div>

          <div class="form-group col-sm-3 ">
            <label>Documento</label>
            <input type="text" id="documento" name="documento"  class="form-control"    />
          </div>



          <div class="form-group col-sm-3 ">
            <label>Nombre</label>
            <input type="text" id="nombre" name="nombre"  class="form-control"    />
          </div>     



          <!-- fin de-->


          <div class="form-group col-sm-3 ">
            <label>Apellido</label>
            <input type="text" id="apellido" name="apellido"  class="form-control"    />
          </div>  



          <div class="form-group col-sm-3 ">
            <label>Correo</label>
            <input type="mail" id="correo" name="correo"  class="form-control"    />
          </div>     

          <div class="form-group col-sm-3 ">
            <label>Telefono</label>
            <input type="mail" id="telefono" name="telefono"  class="form-control"    />
          </div>    
          <div class="form-group col-sm-3 ">
            <label>Genero</label>
            <select type="select"  id="genero" name="genero"  class="form-control" >
             <option >Seleccione...</option>
             <option  value="Masculino">Masculino</option>
             <option  value="Femenino">Femenino</option>
           </select>
         </div>   
         <!--<input type="submit" id="BtnIngresarIns" name="BtnIngresarIns"  class="btnRegister" value="Ingresar">-->
         <div class="form-group col-sm-12 text-right ">
          <button class="btn-primary btn" type="submit" id="BtnIngresarIns" name="BtnIngresarIns">Guardar</button>
        </div>
      </div>
    </div>
  </div>
</form>
<!-- Fin Cabecera -->
<!-- Tabla de Horarios -->
<div class="col-sm-12 mt-1">
  <div class="table-responsive">
    <table class="table-bordered">
      <thead class="text-center text-light bg-dark px-1">
        <tr>
          <th>TIPO USUARIO</th>
          <th>TIPO DOCUMENTO</th>
          <th>DOCUMENTO</th>
          <th>NOMBRE</th>
          <th>APELLIDO</th>
          <th>CORREO</th>
          <th>TELEFONO</th>
          <th>GENERO</th>
          <th>ESTADO</th>
          <th>EDITAR</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($usuarios as $TodosInstructores) { ?>

          <td><?php if (isset($TodosInstructores->tipoUsuario)) echo htmlspecialchars($TodosInstructores->tipoUsuario, ENT_QUOTES, 'UTF-8');?></td> 
          <td><?php if (isset($TodosInstructores->tipoDocumento)) echo htmlspecialchars($TodosInstructores->tipoDocumento, ENT_QUOTES, 'UTF-8'); ?></td> 
          <td><?php if (isset($TodosInstructores->documento)) echo htmlspecialchars($TodosInstructores->documento, ENT_QUOTES, 'UTF-8'); ?></td>
          <td><?php if (isset($TodosInstructores->nombre)) echo htmlspecialchars($TodosInstructores->nombre, ENT_QUOTES, 'UTF-8'); ?></td>
          <td><?php if (isset($TodosInstructores->apellido)) echo htmlspecialchars($TodosInstructores->apellido, ENT_QUOTES, 'UTF-8'); ?></td>
          <td><?php if (isset($TodosInstructores->correo)) echo htmlspecialchars($TodosInstructores->correo, ENT_QUOTES, 'UTF-8'); ?></td>
          <td><?php if (isset($TodosInstructores->telefono)) echo htmlspecialchars($TodosInstructores->telefono, ENT_QUOTES, 'UTF-8'); ?></td>
          <td><?php if (isset($TodosInstructores->genero)) echo htmlspecialchars($TodosInstructores->genero, ENT_QUOTES, 'UTF-8'); ?></td>            
          <td><?php if (isset($TodosInstructores->estado)) echo htmlspecialchars($TodosInstructores->estado == "0" ? "Inactivo" : "Activo", ENT_QUOTES, 'UTF-8'); ?></td>
          <td><a class="btn btn-default" href="<?php echo URL . 'usuario/Editar/' . htmlspecialchars($usuario->documento, ENT_QUOTES, 'UTF-8'); ?>">Editar</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</section>


</div>
</section>

<!-- Javascripts : 1.jquery 2.popper 3.bootstrap 4.fontawesome-->
<script src="<?php echo URL; ?>js/jquery-3.3.1.slim.min.js"></script>
<script src="<?php echo URL; ?>js/popper.min.js"></script>
<script src="<?php echo URL; ?>js/bootstrap.js"></script>
<script src="<?php echo URL; ?>js/all.js"></script>
</body>
</html>