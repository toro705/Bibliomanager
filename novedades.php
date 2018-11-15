 		<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'novedades');

 	$metas = array(

		'titulo' 		=> $txt['novedades_metas'][0],

		'descripcion' 	=> $txt['novedades_metas'][1],

		'img' 			=> '',

		'slider' 		=> $txt['novedades_metas'][2]

	);
	include('includes/header.php');

?>

	<article id="novedades-section">
		<section id="novedades" class="banda">	
			<div class="container">	
				<div class="row contenedor-modulos">
					<?php
					$novedades = Novedad::obtener();
					$total = count($novedades);
					foreach($novedades as $i => $n){
						include('templates/novedad.php');

						if(($i+1)%3==0 AND !($i+1)!=$total){
							echo '</div><div class="row">';	
						}
					} ?>
				</div>
				<hr class="footer-divider">
			</div>
		</section>
	</article>

<?php include('includes/footer.php'); ?>