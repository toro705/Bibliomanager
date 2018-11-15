<?php



	include_once('includes/config/inicio.php');



	// Configuración de la página

 	define('SECCION', 'redglobal');



 	$metas = array(

		'titulo' 		=> $txt['redglobal_metas'][0],

		'descripcion' 	=> $txt['redglobal_metas'][1],

		'img' 			=> '',

		'slider' 		=> $txt['redglobal_metas'][2]

	);



	include('includes/header.php');



?>


	<article>

		<section id="paises" class="banda">

				<div class="container">
					<div class="row wow fadeIn">

						<div class="col-sm-10 col-sm-offset-1 text-center">

							<P class="paragraph-3"><?=$txt['redglobal'][0] ?></P>

						</div>

					</div>
					<div class="row">
						<div class="col-md-6 pais">
							<p class="pais__nombre"><span class="icn argentina"></span><?=$txt['redglobal'][1] ?></p>
							<h3 class="color-4">BIBLIOGRÁFIKA</h3>
							<hr>
							<p class="paragraph-3"><?=$txt['redglobal'][2] ?></p>
							<hr>
							<div class="pais__contacto">
								<p class="paragraph-3">
									<b>CEO:</b> Gustavo Vorobechik
									<br><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:gustavo@bibliografika.com">gustavo@bibliografika.com</a>
									<br><i class="fa fa-desktop" aria-hidden="true"></i><a href="www.bibliografika.com" target="_blank">www.bibliografika.com</a>
									<br><i class="fa fa-twitter" aria-hidden="true"></i><a href="https://twitter.com/bibliografika" target="_blank">@bibliografika</a>
								</p>
							</div>
						</div>
						<div class="col-md-6 pais">
							<p class="pais__nombre"><span class="icn españa"></span><?=$txt['redglobal'][3] ?></p>
							<h3 class="color-4">PODIPRINT</h3>
							<hr>
							<p class="paragraph-3"><?=$txt['redglobal'][4] ?></p>
							<hr>
							<div class="pais__contacto">
								<p class="paragraph-3">
									<b>CEO:</b> Miguel Ángel Sánchez Maza
									<br><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:masanchezm@antakira.com">masanchezm@antakira.com</a>
									<br><i class="fa fa-desktop" aria-hidden="true"></i><a href="www.podiprint.com" target="_blank">www.podiprint.com</a>
									<br><i class="fa fa-twitter" aria-hidden="true"></i><a href="https://twitter.com/PODiPrint" target="_blank">@PODiPrint</a>
									<br><i class="fa fa-facebook" aria-hidden="true"></i><a href="https://www.facebook.com/Podiprint/?fref=ts" target="_blank">Podiprint</a>
									<br><i class="fa fa-linkedin" aria-hidden="true"></i><a href="https://www.linkedin.com/company/podiprint" target="_blank">Podiprint</a>
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 pais">
							<p class="pais__nombre"><span class="icn mexico"></span><?=$txt['redglobal'][5] ?></p>
							<h3 class="color-4">SOLAR</h3>
							<hr>
							<p class="paragraph-3"><?=$txt['redglobal'][6] ?></p>
							<hr>
							<div class="pais__contacto">
								<p class="paragraph-3">
									<b>CEO:</b> Alejandro Zenker
									<br><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:az@edicionesdelermitano.com">az@edicionesdelermitano.com</a>
									<br><i class="fa fa-desktop" aria-hidden="true"></i><a href="www.solareditores.com" target="_blank">www.solareditores.com</a>
									<br><i class="fa fa-twitter" aria-hidden="true"></i><a href="https://twitter.com/SolarEditores" target="_blank">Solar Editores</a>
									<br><i class="fa fa-facebook" aria-hidden="true"></i><a href="https://www.facebook.com/solareditores/?fref=ts" target="_blank">Solar, Servicios Editoriales, S.A. de C.V.</a>
								</p>
							</div>
						</div>
						<div class="col-md-6 pais">
							<p class="pais__nombre"><span class="icn colombia"></span><?=$txt['redglobal'][7] ?></p>
							<h3 class="color-4">XPRESS - HIPERTEXTO</h3>
							<hr>
							<p class="paragraph-3"><?=$txt['redglobal'][8] ?></p>
							<hr>
							<div class="pais__contacto">
								<p class="paragraph-3">
									<b>CEO:</b> Luís Francisco Salcedo
									<br><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:luis.salcedo@xpress.com.co">luis.salcedo@xpress.com.co</a>
									<br><i class="fa fa-desktop" aria-hidden="true"></i><a href="www.xpress.com.co" target="_blank">www.xpress.com.co</a>
									<br><i class="fa fa-twitter" aria-hidden="true"></i><a href="https://twitter.com/xpress_SA" target="_blank">@Xpress_SA</a>
									<br><i class="fa fa-facebook" aria-hidden="true"></i><a href="https://www.facebook.com/XpressSA/?fref=ts" target="_blank">Xpress Estudio Gráfico y Digital S.A.</a>
									<br><i class="fa fa-linkedin" aria-hidden="true"></i><a href="https://www.linkedin.com/company/xpress-estudio-grafico-y-digital-sa" target="_blank">Xpress Estudio Gráfico y Digital SA</a>
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 pais">
							<p class="pais__nombre"><span class="icn peru"></span><?=$txt['redglobal'][9] ?></p>
							<h3 class="color-4">ALEPH + ADR</h3>
							<hr>
							<p class="paragraph-3"><?=$txt['redglobal'][10] ?></p>
							<hr>
							<div class="pais__contacto">
								<p class="paragraph-3">
									<b>Gerente ALEPH:</b> Amparo Merino
									<br><b>Gerente ADR:</b> Silvano Gozzer
									<br><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@anatomiadered.com">info@anatomiadered.com</a>
									<br><i class="fa fa-desktop" aria-hidden="true"></i><a href="http://alephimpresiones.net/" target="_blank">http://alephimpresiones.net/</a> - <a href="http://anatomiadered.com/" target="_blank">http://anatomiadered.com/</a>
									<br><i class="fa fa-twitter" aria-hidden="true"></i><a href="https://twitter.com/Anatomiaedicion" target="_blank">@anatomiaedicion</a>
									<br><i class="fa fa-facebook" aria-hidden="true"></i><a href="https://www.facebook.com/AnatomiaDeRedPeru/?fref=ts" target="_blank">AnatomiaDeRedPeru</a>
									<br><i class="fa fa-linkedin" aria-hidden="true"></i><a href="https://www.linkedin.com/company/anatom-a-de-la-red" target="_blank">anatom-a-de-la-red</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				
		</section>
	</article>



<?php include('includes/footer.php'); ?>