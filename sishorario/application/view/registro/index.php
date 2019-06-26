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
          Usuario
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <button class="dropdown-item" type="button">Mi Perfil</button>
         <a href="<?php echo URL; ?>instructor/index">
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
          <p><a class="text-light"><i class="fas fa-edit"  href="<?php echo URL; ?>home/index"></i>&nbsp;Inicio</a></p>
          <p><a class="text-light"><i class="fas fa-edit"  href="<?php echo URL; ?>centro/index"></i>&nbsp;Registrar Centro</a></p>
          <p><a class="text-light"><i class="fas fa-edit"  href="<?php echo URL; ?>sede/index"></i>&nbsp;Registrar Sede</a></p>
          <p><a class="text-light"><i class="fas fa-edit"  href="<?php echo URL; ?>competencia/index"></i>&nbsp;Registrar Competencia</a></p>
          <p><a class="text-light"><i class="fas fa-edit"  href="<?php echo URL; ?>registro/index"></i>&nbsp;Registrar Usuario</a></p>
          <p><a class="text-light"><i class="fas fa-edit"  href="<?php echo URL; ?>Ahorarios/index"></i>&nbsp;Asignar Horarios</a></p>
        </div>
      </aside>
     


      <section class="col-sm-10">
        <!-- Perfil Usuario -->
       <div class="card mt-2">
          <div class="card-header text-right bg-dark">
            <h5 class="text-light">REGISTRO</h5>
          </div>
          <div class="card-body row">
            <!-- Cabecera de horas -->
            <form method="POST" action="<?php echo URL; ?>registro/IngresarRegistro" enctype="multipart/form-data">
            
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                       
                                           <div class="form-group">
                                          <label>Tipo de Usuario</label>
                                            <select type="select"  id="idTipoUsuario" name="idTipoUsuario"  class="form-control" ">
                                             <option ></option>
                                            <option  value="1">Instructor</option>
                                            <option  value="2">Aprendiz</option>
                                            <option  value="3">admin</option>
                                            </select>
                                        </div>
										

                                        <div class="form-group">
                                          <label>Documento</label>
                                            <input type="text" id="documento" name="documento"  class="form-control"    />
                                        </div>

 											<div class="form-group">
                                          <label>Tipo de Documento</label>
                                            <select type="select"  id="idTipoDoc" name="idTipoDoc"  class="form-control" ">
                                             <option ></option>
                                            <option  value="1">CEDULA</option>
                                            <option  value="0"></option>
                                            </select>
                                        </div>  
										 <div class="form-group">
                                          <label>Nombre</label>
                                            <input type="text" id="nombre" name="nombre"  class="form-control"    />
                                        </div>     

                                        <div class="form-group">
                                          <label>Apellido</label>
                                            <input type="text" id="apellido" name="apellido"  class="form-control"    />
                                        </div>  
                                    </div>
							     <div class="col-md-6">
									
                                         <div class="form-group">
                                          <label>Correo</label>
                                            <input type="email" id="correo" name="correo"  class="form-control"    />
                                        </div>     

                                         <div class="form-group">
                                          <label>Telefono</label>
                                            <input type="text" id="telefono" name="telefono"  class="form-control"    />
                                        </div>    
                                        <div class="form-group">
                                          <label>Genero</label>
                                            <select type="select"  id="genero" name="genero"  class="form-control" ">
                                             <option ></option>
                                            <option  value="1">Masculino</option>
                                            <option  value="0">Femenino</option>
                                            </select>
                                        </div>   

                                        <div class="form-group">
                                          <label>Estado</label>
                                            <select type="select"  id="estado" name="estado"  class="form-control" ">
                                             <option ></option>
                                            <option  value="1">Activo</option>
                                            <option  value="0">Inactivo</option>
                                            </select>
                                        </div>
                                        <input type="submit" id="BtnIngresarA" name="BtnIngresarA"  class="btnRegister" value="Ingresar">
                                    </div>

                                </div>
                            </div>
                        </div>
                        </form>
            <!-- Fin Cabecera -->
            <!-- Tabla de Horarios -->
            <div class="col-sm-12 mt-2">
              <div class="table-responsive">
                <table class="table-bordered">
                  <thead class="text-center text-light bg-dark px-2">
                    <tr>
                      <th>CODIGO</th>
                      <th>NOMBRE</th>
                      <th>TIPO DE AMBIENTE</th>
                      <th>CAPACIDAD</th>
                      <th>ESTADO</th>
                      <th>EDITAR</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($ambientes as$ambiente) { ?>
                        <tr>
                            <td><?php if (isset($ambiente->idAmbiente)) echo htmlspecialchars($ambiente->idAmbiente, ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php if (isset($ambiente->nombre)) echo htmlspecialchars($ambiente->nombre, ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php if (isset($ambiente->tipoAmbiente)) echo htmlspecialchars($ambiente->tipoAmbiente, ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php if (isset($ambiente->capacidad)) echo htmlspecialchars($ambiente->capacidad, ENT_QUOTES, 'UTF-8'); ?></td>

                            <td><?php if (isset($ambiente->estado)) echo htmlspecialchars($ambiente->estado == "0" ? "Inactivo" : "Activo", ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><a class="btn btn-default" href="<?php echo URL . 'ambiente/Editar/' . htmlspecialchars($ambiente->idAmbiente, ENT_QUOTES, 'UTF-8'); ?>">Editar</a></td>
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