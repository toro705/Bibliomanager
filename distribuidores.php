<?php



	include_once('includes/config/inicio.php');



	// Configuración de la página

 	define('SECCION', 'distribuidores');



 	$metas = array(

		'titulo' 		=> $txt['distribuidores_metas'][0],

		'descripcion' 	=> $txt['distribuidores_metas'][1],

		'img' 			=> '',

		'slider' 		=> $txt['distribuidores_metas'][2]

	);



	include('includes/header.php');



?>


	<article>

		<section class="banda blanca">

			<div class="container">

				<div class="row wow fadeIn">

					<div class="col-sm-10 col-sm-offset-1 text-center">

						<P class="paragraph-3"><?=$txt['distribuidores'][0] ?></P>

					</div>

				</div>
	
			</div>

		</section>

		<section id="beneficios-distribuidores" class="relative">
			<div class="banda absolute">
				
				<div class="container">

					<div class="row">
						
						<div class="col-md-6">
							<h2 class="color-4"><b><?=$txt['distribuidores'][1] ?></b></h2>
							<ul class="unstyled-list">
								<li><?=$txt['distribuidores'][2] ?></li>
								<li><?=$txt['distribuidores'][3] ?></li>
								<li><?=$txt['distribuidores'][4] ?></li>
								
							</ul>
						</div>
						<div class="col-md-6">
							<img src="images/distribuidorees-bg.png" alt="" class="img-responsive">
						</div>
					</div>



				</div>
				
			</div>

		</section>
	</article>



<?php include('includes/footer.php'); ?>