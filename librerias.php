<?php



	include_once('includes/config/inicio.php');



	// Configuración de la página

 	define('SECCION', 'librerias');



 	$metas = array(

		'titulo' 		=> $txt['librerias_metas'][0],

		'descripcion' 	=> $txt['librerias_metas'][1],

		'img' 			=> '',

		'slider' 		=> $txt['librerias_metas'][2]

	);



	include('includes/header.php');



?>


	<article>

		<section class="banda blanca">

			<div class="container">

				<div class="row wow fadeIn">

					<div class="col-sm-10 col-sm-offset-1 text-center">

						<P class="paragraph-3"><?=$txt['librerias'][0] ?></P>

					</div>

				</div>
	
			</div>

		</section>

		<section id="beneficios-librerias" class="relative">
			<div class="wrap banda absolute">
				
				<div class="container">

					<div class="row">
						
						<div class="col-md-6">
							<h2 class="color-4"><b><?=$txt['librerias'][1] ?></b></h2>
							<ul class="unstyled-list">
								<li><?=$txt['librerias'][2] ?></li>
								<li><?=$txt['librerias'][3] ?></li>
								<li><?=$txt['librerias'][4] ?></li>
								<li><?=$txt['librerias'][5] ?></li>
								
							</ul>
						</div>

					</div>



				</div>
				
			</div>

		</section>
		<section id="distribuyen" class="banda">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h4 class="color-3 text-center"><?=$txt['librerias'][6] ?> <br><hr></h4>

					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<ul>
							<li><a target="_blank" href="www.tematika.com/">Tematika - Argentina</a></li>
							<li><a target="_blank" href="www.boutiquedellibro.com.ar/‎">Boutique del Libro - Argentina</a></li>
						</ul>
					</div>
					<div class="col-sm-4">
						<ul>
							<li><a target="_blank" href="www.libreriapaidos.com/">Librería Paidós - Argentina</a></li>
							<li><a target="_blank" href="www.ozonum.com/">Ozonum - Argentina</a></li>
						</ul>
					</div>
					<div class="col-sm-4">
						<ul>
							<li><a target="_blank" href="www.gandhi.com.mx/">Librerías Gandhi - México</a></li>
							<li><a target="_blank" href="www.libreriadelau.com/">Librería de la U - Colombia</a></li>
						</ul>
					</div>

				</div>				
			</div>			
		</section>
		<?php include('includes/templates/contactenos.php'); ?>

	</article>



<?php include('includes/footer.php'); ?>