<?php



	include_once('includes/config/inicio.php');



	// Configuración de la página

 	define('SECCION', 'seapartner');



 	$metas = array(

		'titulo' 		=> $txt['seapartner_metas'][0],

		'descripcion' 	=> $txt['seapartner_metas'][1],

		'img' 			=> '',

		'slider' 		=> $txt['seapartner_metas'][2]

	);




	include('includes/header.php');



?>


	<article>

		<section class="banda blanca">

			<div class="container">

				<div class="row wow fadeIn">

					<div class="col-sm-10 col-sm-offset-1 text-center">

						<P class="paragraph-3"><?=$txt['seapartner'][0] ?></P>

					</div>

				</div>
	
			</div>

		</section>

		<section id="beneficios-asociados" class="relative banda">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h2 class="text-center color-4"><b><?=$txt['seapartner'][1] ?></b></h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<ul class="unstyled-list">
								<li><?=$txt['seapartner'][2] ?></li>
								<li><?=$txt['seapartner'][3] ?></li>
								<li><?=$txt['seapartner'][4] ?></li>
								<li><?=$txt['seapartner'][5] ?></li>
								<li><?=$txt['seapartner'][6] ?></li>
								<li><?=$txt['seapartner'][7] ?></li>
								<li><?=$txt['seapartner'][8] ?></li>
								<li><?=$txt['seapartner'][9] ?></li>
								<li><?=$txt['seapartner'][10] ?></li>
								<li><?=$txt['seapartner'][11] ?></li>
								<li><?=$txt['seapartner'][12] ?></li>
								<li><?=$txt['seapartner'][13] ?></li>
								
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="unstyled-list">
								<li><?=$txt['seapartner'][14] ?></li>								
								<li><?=$txt['seapartner'][15] ?></li>								
								<li><?=$txt['seapartner'][16] ?></li>								
								<li><?=$txt['seapartner'][17] ?></li>								
								<li><?=$txt['seapartner'][18] ?></li>								
								<li><?=$txt['seapartner'][19] ?></li>								
								<li><?=$txt['seapartner'][20] ?></li>								
								<li><?=$txt['seapartner'][21] ?></li>								
								<li><?=$txt['seapartner'][22] ?></li>								
								<li><?=$txt['seapartner'][23] ?></li>								
							</ul>
						</div>
					</div>
				</div>
				
		</section>
	</article>



<?php include('includes/footer.php'); ?>