<?php



	include_once('includes/config/inicio.php');



	// Configuración de la página

 	define('SECCION', 'bmg');



 	$metas = array(

		'titulo' 		=> $txt['bmg_metas'][0],

		'descripcion' 	=> $txt['bmg_metas'][1],

		'img' 			=> '',

		'slider' 		=> $txt['bmg_metas'][2]

	);




	include('includes/header.php');



?>


	<article>

		<section id="paises" class="banda">

				<div class="container">
					<div class="row wow fadeIn">

						<div class="col-sm-10 col-sm-offset-1 text-center">

							<P class="paragraph-3"><?=$txt['bmg'][0] ?>
							<br><br><b><?=$txt['bmg'][1] ?></b>
							<br>CEO: Gustavo Vorobechik
							<br>COO: Diego Ruiz 
							<br>CFO: Aldo Furchi</P>

						</div>

					</div>
				</div>
				
		</section>
	</article>



<?php include('includes/footer.php'); ?>