
	<nav class="navbar navbar-transparent navbar-absolute">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav navbar-right">
								<li class="d-flex flex-row">
									<a href="administracion.php" class="simple-text" title="Inicio">
										<i class="material-icons">dashboard</i>
										<strong>INICIO</strong>
									</a>
								</li>
								<?php
								if(isset($_SESSION['admin']))
								{

								?>
								<?php
								}
								?>
								<li>
									<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">person</i>
										<strong>

										<?php
										if (isset($_SESSION['admin']))
										{
												echo $_SESSION['admin'];

										}
										if (isset($_SESSION['instructor']))
										{
												echo $_SESSION['instructor'];
												echo "<input type='hidden' id='sesionInstructor' value='".$_SESSION['instructor']."'>";
										}
										?>
										</strong>
									</a>

									<ul class="dropdown-menu">
										<li><a href="config.php">Configuración</a></li>
										<li><a href="salir.php">Salir</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</nav>

	        <div class="content">
	            <div class="container-fluid">

	<script src="js/jquery.js"></script>

	<script src="js/jquery.js"></script>
