	</main>

	<footer class="pie bg-2">

		<div class="container">

            <div class="row">
					<ul class="list-inline unstyled-list">
						<li>
							<p class="h5"><a href="<?=url('editoriales')?>"><?=$txt['nav'][1] ?></a></p>
						</li>
						<li>
							<p class="h5"><a href="<?=url('librerias')?>"><?=$txt['nav'][2] ?></a></p>
						</li>
						<li>
							<p class="h5"><a href="<?=url('distribuidores')?>"><?=$txt['nav'][3] ?></a></p>
						</li>
						<li>
							<p class="h5"><a href="<?=url('seapartner')?>"><?=$txt['nav'][4] ?></a></p>
						</li>
						<li>
							<p class="h5"><a href="<?=url('redglobal')?>"><?=$txt['nav'][5] ?></a></p>
						</li>
						<li>
							<p class="h5 text-center-xs"><a href="<?=url('bmg')?>">BMG</a></p>
						</li>
						<li>

							<p class="h5 text-center-xs"><a href="<?=url('contacto')?>"><?=$txt['nav'][0] ?></a></p>
					</ul>
					<ul class="second-nav unstyled-list list-inline">

						<li class="text-center-xs">

							<i class="icn icn-3 text-center-xs" aria-hidden="true"></i><br>

							<a class="paragraph-2 text-center-xs" target="_blank" href="mailto:<?= ocultarEmail(Empresa::$email) ?>"><?= ocultarEmail(Empresa::$email) ?></a>

						</li>

						<li class="text-center-xs">

							<i class="icn icn-4 text-center-xs" aria-hidden="true"></i><br>

							<a class="paragraph-2 text-center-xs" href="tel:<?= Empresa::$telefono_enlace ?>"><?= Empresa::$telefono ?></a>

						</li>

					</ul>


				</div>

			</div>

		</div>

	</footer>

	<div class="copyright">

		<div class="container">

            <div class="row">

           		<div class="col-xs-12 col-sm-6 text-left text-center-xs">

           			<a href="<?=url('home')?>"><img src="images/logo_nav-principal-pie.png" alt="<?=Empresa::$nombre?>"></a><br>

				</div>

			</div>

            <div class="row">

           		<div class="col-xs-12 col-sm-6 text-left text-center-xs">

					<small>Copyright <?=date('Y').' ©  '.Empresa::$nombre?></small>

				</div>

    			<div class="col-xs-12 col-sm-6 text-right text-center-xs">

					<a class="synapsis" href="http://synapsis.com.ar/" target="_blank" title="Diseño web Argentina"><img src="images/logo_synapsis.png" alt="Synapsis Diseño Web Argentina">				

</a>

    			</div>

    		</div>

    	</div>

	</div>



   <!-- jQuery -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/wow.min.js"></script>

	<script>

			new WOW().init();

	</script>

   <!-- Imágenes responsive -->

    <script>

	   	//Defino el nuevo ancho de las imágenes

	      	var anchoVentana = $(window).width();

	      	var anchos = [1920,1200,990,768,490];

	      	var nuevoAncho = 1920;

	      	for (var i=0; i<anchos.length; i++) {

	      		if( anchoVentana<anchos[i] ){

		      		nuevoAncho = anchos[i];

		      	}

	      	}



	      	//Cambio el src de las imágenes

	      	var imagenes = ['.slider-principal__imagen'];

	      	for (var i=0; i<imagenes.length; i++) {

	      		$(imagenes[i]).each(function(){

	       			var src = $(this).attr('src');

	       			$(this).attr('src',src.replace('1920',nuevoAncho));

	      		});

	      	}

    </script>

    <!-- Fin Imágenes responsive -->



    <!-- Scroll en cabecera -->

	<script>

		//Anima el menú cuando hay scroll

		$( window ).scroll(function(){

			var $cabecera = $('.cabecera');

			if( $(window).scrollTop() > 20){

				$cabecera.addClass('scroll');

			}else{

				$cabecera.removeClass('scroll');

			}

		});

		//Oculta y muestra el menú cuando hay scroll

		var $cabecera = $('.cabecera');

		var previousScroll = 0;

		$(window).scroll(function(event){

		   var scroll = $(this).scrollTop();

		   if (scroll > previousScroll && scroll > 400){

		       $cabecera.addClass('ocultar');

		       //Cierra el menú cuando hay scroll

				$(".navbar-collapse").removeClass("in").addClass("collapse");

				$(".navbar-toggle").removeClass("is-active");

		   } else {

		      $cabecera.removeClass('ocultar');

		   }

		   previousScroll = scroll;

		});

	</script>

	<!-- Fin Scroll en cabecera -->



    <!-- Hamburguesa  -->

    <script>

	$(document).ready(function(){

		$('.hamburger').click(function(){

			$(this).toggleClass('is-active');

		});

		$('.dropdown-toggle').click(function(){

			$(this).parent().toggleClass('open');

		});

	});

    </script>

	<!-- Fin hamburguesa -->



	 <!-- Login  -->

    <script>

		$(document).ready(function(){

			$('.js-login-enlace').click(function(){

				$('.js-login-contenido').toggleClass('activo');

			});

		});

    </script>

	<!-- Fin Login -->



	<?php if(in_array('slider-principal', $js)){ ?>

	<!-- Owl Carousel -->

	<!-- http://owlcarousel2.github.io/OwlCarousel2/ -->

    <script src="js/jquery.owl.carousel/owl.carousel.min.js"></script>

    <script src="js/jquery.owl.carousel/owl.animate.js"></script>

	<?php }



	if(in_array('slider-principal', $js)){ ?>

	<!-- Owl Carousel -->

    <script>

		$(document).ready(function(){

			$('.slider-principal > ul').owlCarousel({

				autoplay: true,

				items: 1,

			    loop: true,

			    slideSpeed: 600,

		        paginationSpeed: 400,

		        singleItem: true,

		        nav: false,

		        dots: false,

		        dragBeforeAnimFinish: false,

		        mouseDrag: false,

		        touchDrag: false,

		        animateOut: 'fadeOut'



			});

		});

    </script>

	<script>

		$(document).ready(function() {

		 	$('.conforman-nuestra-red__slider').owlCarousel({

				autoplay: true,

	      		items : 1, 


			    loop: true,

		        dots: false,

		        nav: true,

		        dragBeforeAnimFinish: false,

		        mouseDrag: false,

		        touchDrag: false,

		        navText: [

	            "<div class=\"conforman-nuestra-red__slider__controls bg-1 color-2 prev\"><i class='fa fa-chevron-left'></i></div>",

	            "<div class=\"conforman-nuestra-red__slider__controls bg-1 color-2 next\"><i class='fa fa-chevron-right'></i></div>"

	            ],		        

			});

		});		

	</script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script>
		function accordionhome () {
			$( ".accordion" ).accordion({
			  collapsible: true,
			  active: false,
			  heightStyle: "content",
			  header: "h3" 
			});
		}
		$(document).ready(function() {
			accordionhome();
			
		})
	</script>
	<!-- Fin Owl Carousel -->

	<?php } ?>

  </body>

</html>