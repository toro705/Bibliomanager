<?php



	include_once('includes/config/inicio.php');



	// Configuración de la página

 	define('SECCION', 'editoriales');




 	$metas = array(

		'titulo' 		=> $txt['editoriales_metas'][0],

		'descripcion' 	=> $txt['editoriales_metas'][1],

		'img' 			=> '',

		'slider' 		=> $txt['editoriales_metas'][2]

	);


	include('includes/header.php');



?>



	<article>

		<section id="impresion-por-demanda" class="banda blanca wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">

			<div class="container">

				<div class="row wow fadeIn">

					<div class="col-sm-10 col-sm-offset-1 text-center">

						<h2 class="h3"><?=$txt['editoriales'][0] ?></h2>

						<P class="paragraph-3 mar-bottom-50"><?=$txt['editoriales'][1] ?></P>

					</div>

				</div>
				<div class="row wow fadeIn">

					<div class="col-sm-10 col-sm-offset-1 text-center">

						<h2 class="h3"><?=$txt['editoriales'][2] ?></h2>

						<P class="paragraph-3"><?=$txt['editoriales'][3] ?></P>

					</div>

				</div>

			</div>

		</section>

		<section id="beneficios-editoriales" class="relative wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
			<div class="wrap banda absolute">
				
				<div class="container">

					<div class="row">
						
						<div class="col-sm-6">
							<h2 class="color-4"><b><?=$txt['editoriales'][4] ?></b></h2>
							<ul class="unstyled-list">
								<li><?=$txt['editoriales'][5] ?></li>
								<li><?=$txt['editoriales'][6] ?></li>
								<li><?=$txt['editoriales'][7] ?></li>
								<li><?=$txt['editoriales'][8] ?></li>
								<li><?=$txt['editoriales'][9] ?></li>
								<li><?=$txt['editoriales'][10] ?></li>
								<li><?=$txt['editoriales'][11] ?></li>
								<li><?=$txt['editoriales'][12] ?></li>
								<li><?=$txt['editoriales'][13] ?></li>
								<li><?=$txt['editoriales'][14] ?></li>
							</ul>
						</div>

					</div>



				</div>
				
			</div>

		</section>
		<section id="distribuyen" class="banda wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h4 class="color-3 text-center"><?=$txt['editoriales'][15] ?><br><hr></h4>

					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<ul>
							<li><a target="_blank" href="">VIAF / NOBUKO - Argentina</a></li>
							<li><a target="_blank" href="http://www.elaleph.com/">Elaleph.com - Argentina</a></li>
							<li><a target="_blank" href="http://www.apgargentina.org/">Account Planning Group Argentina - Argentina</a></li>
							<li><a target="_blank" href="">Analia Bechara / AnaBec - Argentina</a></li>
							<li><a target="_blank" href="https://brumaediciones.wordpress.com/">Bruma Ediciones - Argentina</a></li>
							<li><a target="_blank" href="https://buenosairespoetry.com/">Buenos Aires Poetry - Argentina</a></li>
						</ul>
					</div>
					<div class="col-sm-4">
						<ul>
							<li><a target="_blank" href="http://edicioneslilium.com.ar/">Ediciones Lilium - Argentina</a></li>
							<li><a target="_blank" href="">LyC - Argentina</a></li>
							<li><a target="_blank" href="http://parrafoaparte.com/">Párrafo Aparte - Argentina</a></li>
							<li><a target="_blank" href="https://www.pukiyari.com/">Pukiyari Editores - Argentina</a></li>
							<li><a target="_blank" href="http://www.txtediciones.com.ar/">Tequiste - Argentina</a></li>
							<li><a target="_blank" href="">Quiken Editorial - Argentina</a></li>
						</ul>
					</div>
					<div class="col-sm-4">
						<ul>
							<li><a target="_blank" href="http://www.minoydavila.com/">Miño y Davila SRL - Argentina</a></li>
							<li><a target="_blank" href="http://www.recursoseditoriales.com/">Recursos Editoriales - Argentina</a></li>
							<li><a target="_blank" href="http://www.wuweiweb.com.ar/editorial.php">Editorial Wu Wei - Argentina</a></li>
							<li><a target="_blank" href="">Absentha Libros - Argentina</a></li>
							<li><a target="_blank" href="http://www.altagerenciainternacional.com/">Alta Gerencia - Argentina</a></li>
						</ul>
					</div>

				</div>				
			</div>			
		</section>
		<?php include('includes/templates/contactenos.php'); ?>
		
	</article>



<?php include('includes/footer.php'); ?>