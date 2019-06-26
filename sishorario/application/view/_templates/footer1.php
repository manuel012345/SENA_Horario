	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="inicio"><img src="<?php echo URL; ?>images/35.png" alt=""></a></div>
							</div>
							<p class="footer_about_text">SABORES QUE ENAMORAN.
							Encuentra en nuetra pagina una gran variedad de restaurantes para todos los momentos de tu vida.
							Nosotros no encargamos de mostrarte las mejores opciones al momento de elegir donde comer y que comer.</p>
						</div>
					</div>
				</div>


				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">Contacto</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="<?php echo URL; ?>images/message.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">eatsoftadm@gmail.com</a></div>
								</li>
								
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Hecho con <i class="fa fa-heart-o" aria-hidden="true"></i> por <a>Melissa Balvin,Holman Arango,Jennifer Lopez</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="main_nav_list">
							<ul class="main_nav_list">
                                <li class="main_nav_item"><a href="<?php echo URL; ?>inicio">Inicio</a></li>
                                <li class="main_nav_item"><a href="<?php echo URL; ?>about/index">Categorias</a></li>
                                <li class="main_nav_item"><a href="<?php echo URL; ?>offers/index">Restaurantes</a></li>
                                <li class="main_nav_item"><a href="<?php echo URL; ?>single_listing/index">Centro Comercial</a></li>
                                <?php if (isset($_SESSION["usuario"])) { ?>
                                 <li  class="main_nav_item"><a href="#"> Bienvenid@: <?php echo $_SESSION["usuario"]; ?></a>
                                 <?php } ?></li>
                            </ul>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo URL; ?>js/jquery-3.2.1.min.js"></script>
<script src="<?php echo URL; ?>styles/bootstrap4/popper.js"></script>
<script src="<?php echo URL; ?>styles/bootstrap4/bootstrap.min.js"></script>	
<script src="<?php echo URL; ?>plugins/greensock/TweenMax.min.js"></script>
<script src="<?php echo URL; ?>plugins/greensock/TimelineMax.min.js"></script>
<script src="<?php echo URL; ?>plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?php echo URL; ?>plugins/greensock/animation.gsap.min.js"></script>
<script src="<?php echo URL; ?>plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?php echo URL; ?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo URL; ?>plugins/easing/easing.js"></script>
<script src="<?php echo URL; ?>plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php echo URL; ?>js/about_custom.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

</body>

</html>