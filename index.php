<?php







	include_once('includes/config/inicio.php');







	// Configuración de la página



 	define('SECCION', 'home');







 	$metas = array(



		'titulo' 		=> $txt[SECCION.'_metas'][0],



		'descripcion' 	=> $txt[SECCION.'_metas'][1],



		'img' 			=> '',



		'slider' 		=> '',



	);







	include('includes/header.php');







?>



 



	<article>



		<?php array_push($js, 'slider-principal');



			$slider_principal = array(



	        array(



	        	$txt[SECCION.'_slider'][0],

	        	$txt[SECCION.'_slider'][1]



	        	),



	        array(



	        	$txt[SECCION.'_slider'][0],

	        	$txt[SECCION.'_slider'][1]



	        	),



	        array(



	        	$txt[SECCION.'_slider'][0],

	        	$txt[SECCION.'_slider'][1]



	        	),



	        array(



	        	$txt[SECCION.'_slider'][0],

	        	$txt[SECCION.'_slider'][1]



	        	),





	      );



		?>



		<div class="slider-principal">



			<ul class="owl-carousel">



			  <?php foreach ($slider_principal as $i => $slide) {



			  	$indice = $i+1;



			    $medidas = array(1920,1200,990,768,490);



			    $srcset = array();



			    $sources = '';



			    $default_src = '';



			    foreach($medidas as $m){



			      $new_sources = array();



			      for($x=1;$x<=2;$x++){



			        $new_sources[] = 'images/slider-principal/'.$indice.'-'.$m.'-x'.$x.'.jpg?v='.time().' '.$x*$m.'w';



			        if($default_src == ''){



			           $default_src = substr($new_sources[0], 0, strpos($new_sources[0],' '));



			        }



			      }



			      $sources .= '<source media="(min-width: '.$m.'px)" srcset="'.implode(',',$new_sources).'">';



			    }



			    $sources .= '<source srcset="'.implode(',',$new_sources).'">';



			      echo '<li>



			        <picture>



			          '.$sources.'



			          <img class="img-responsive" src="'.$default_src.'">



			        </picture>



			        <div class="slider-principal__contenido slide-'.$indice.'">



			        	<div class="container">



			        		<div class="row">



				        		<div class="col-xs-12">



				        			<div class="slider-principal__texto">



				        				<p class="h1">'.$slide[1].'</p>

										<hr>

				        				<h1 class="h1">'.$slide[0].'</h1>



				        			</div>



				        		</div>



				        	</div>



			        	</div>



			        </div>



			      </li>';



			    } ?>



			</ul>



		</div>



		<section id="home-service-1" class="banda bg-2">



			<div class="container">



				<div class="row plataforma-global text-center wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">



						<div class="col-sm-12">	

							<h2 class="text-center color-4"><b><?=$txt[SECCION.'_service-1'][0] ?></b></h2>

						</div>



				</div>



				<div class="row plataforma-global__numeros text-center wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">



						<div class="col-sm-6 col-md-3">

							<h4 class="text-center color-3">

							<?=$txt[SECCION.'_service-1'][1] ?>

							<br><b class="color-4">700</b>

							<br><?=$txt[SECCION.'_service-1'][2] ?>	

							</h4>

						</div>



						<div class="col-sm-6 col-md-3">

							<h4 class="text-center color-3">

							<?=$txt[SECCION.'_service-1'][3] ?>

							<br><b class="color-4">5</b>

							<br><?=$txt[SECCION.'_service-1'][4] ?>	

							</h4>

						</div>



						<div class="col-sm-6 col-md-3">

							<h4 class="text-center color-3">

							<?=$txt[SECCION.'_service-1'][1] ?>

							<br><b class="color-4">600</b>

							<br><?=$txt[SECCION.'_service-1'][5] ?>	

							</h4>

						</div>



						<div class="col-sm-6 col-md-3">

							<h4 class="text-center color-3">

							<?=$txt[SECCION.'_service-1'][1] ?>

							<br><b class="color-4">25.000</b>

							<br><?=$txt[SECCION.'_service-1'][6] ?>	

							</h4>

						</div>



				</div>

			</div>



		</section>

		<section id="beneficios-tabs">



			<div class="hidden-xs">

			  <div class="container navcontainer">

			  	   <h3 class="color-4"><b><?=$txt['gral'][3] ?></b></h3>

			  	   <div class="clearfix visible-xs"></div>

				  <!-- Nav tabs -->

				  <ul class="nav nav-tabs responsive" role="tablist">

					    <li role="presentation" class="active"><a href="#beneficios-editoriales" class="h3 color-2" aria-controls="beneficios-editoriales" role="tab" data-toggle="tab"><small class="hidden-xs"><b><?=$txt['gral'][2] ?></b></small><br class="hidden-xs"><?=$txt['nav'][1] ?></a></li>

					    <li role="presentation"><a href="#beneficios-librerias" class="h3 color-2" aria-controls="beneficios-librerias" role="tab" data-toggle="tab"><small class="hidden-xs"><b><?=$txt['gral'][2] ?></b></small><br class="hidden-xs"><?=$txt['nav'][2] ?></a></li>

					    <li role="presentation"><a href="#beneficios-distribuidores" class="h3 color-2" aria-controls="beneficios-distribuidores" role="tab" data-toggle="tab"><small class="hidden-xs"><b><?=$txt['gral'][2] ?></b></small><br class="hidden-xs"><?=$txt['nav'][3] ?></a></li>

				  </ul>

				  <div class="clearfix"></div>

			  </div>



			  <!-- Tab panes -->

			  <div class="tab-content responsive">

			    <div role="tabpanel" class="tab-pane active" id="beneficios-editoriales">

						<div class="wrap banda absolute">

							

							<div class="container">



								<div class="row">

									<div class="col-xs-12 text-right visible-xs">

										<div class="row">

					           				<img src="images/imac-bibliomanager.png" class="img-responsive" alt="Bibliomanager">

										</div>

									</div>

									<div class="col-sm-6">

										<p class="paragraph-4"><b><?=$txt[SECCION.'_beneficios-editoriales'][0] ?></b></p>

										<ul class="unstyled-list">

											<li><?=$txt[SECCION.'_beneficios-editoriales'][1] ?></li>

											<li><?=$txt[SECCION.'_beneficios-editoriales'][2] ?></li>

											<li><?=$txt[SECCION.'_beneficios-editoriales'][3] ?></li>

											<li><?=$txt[SECCION.'_beneficios-editoriales'][4] ?></li>

											<li><?=$txt[SECCION.'_beneficios-editoriales'][5] ?></li>

										

										</ul>

										<div class="clearfix"></div>

										<div class="btn-container">

											<a href="<?=url('editoriales')?>" class="btn-transparent2"><?=$txt['gral'][1] ?></a>

										</div>

										<div class="clearfix"></div>

									</div>



								</div>







							</div>

							

						</div>



			    </div>

			    <div role="tabpanel" class="tab-pane" id="beneficios-librerias">

						<div class="wrap banda absolute">

							

							<div class="container">



								<div class="row">

									

									<div class="col-sm-6">

										<p class="paragraph-4"><b><?=$txt[SECCION.'_beneficios-librerias'][0] ?></b></p>

										<ul class="unstyled-list">

											<li><?=$txt[SECCION.'_beneficios-librerias'][1] ?></li>

											<li><?=$txt[SECCION.'_beneficios-librerias'][2] ?></li>

											<li><?=$txt[SECCION.'_beneficios-librerias'][3] ?></li>

											<li><?=$txt[SECCION.'_beneficios-librerias'][4] ?></li>

										

										</ul>

										<div class="clearfix"></div>

									</div>

									<div class="col-md-6 text-right hidden-xs">

					           			<img src="images/bibliomanager-logo.png" class="img-responsive" alt="BIBLIOMANAGER">



									</div>



								</div>







							</div>

							

						</div>



			    </div>

			    <div role="tabpanel" class="tab-pane" id="beneficios-distribuidores">

						<div class="wrap banda absolute">

							

							<div class="container">



								<div class="row">

									

									<div class="col-sm-6">

										<ul class="unstyled-list">

											<li><?=$txt[SECCION.'_beneficios-distribuidores'][0] ?></li>

											<li><?=$txt[SECCION.'_beneficios-distribuidores'][1] ?></li>

											<li><?=$txt[SECCION.'_beneficios-distribuidores'][2] ?></li>

										

										</ul>

										<div class="clearfix"></div>



									</div>

									<img src="images/distribuidorees-bg.png" alt="" class="img-responsive visible-xs visible-sm">



								</div>







							</div>

							

						</div>

			    	

			    </div>

			  </div>



			</div>	

			<div class="visible-xs bg-6 accordion-container">

			  	   <h3 class="color-4"><b><?=$txt['gral'][3] ?></b></h3>

			  	   <div class="clearfix visible-xs"></div>

					<div class="accordion visible-xs container bg-6">

						<h3><span><?=$txt['gral'][2] ?> <?=$txt['nav'][1] ?></span><br><hr></h3>

					    <div class="accordion-cont" id="beneficios-editoriales">

								<div class="wrap banda absolute">

									

									<div class="container">



										<div class="row">

											<div class="col-xs-12 text-right visible-xs">

												<div class="row">

							           				<img src="images/imac-bibliomanager.png" class="img-responsive" alt="Bibliomanager">

												</div>

											</div>

											<div class="col-sm-6">

												<p class="paragraph-4"><b><?=$txt[SECCION.'_beneficios-editoriales'][0] ?></b></p>

												<ul class="unstyled-list">

													<li><?=$txt[SECCION.'_beneficios-editoriales'][1] ?></li>

													<li><?=$txt[SECCION.'_beneficios-editoriales'][2] ?></li>

													<li><?=$txt[SECCION.'_beneficios-editoriales'][3] ?></li>

													<li><?=$txt[SECCION.'_beneficios-editoriales'][4] ?></li>

													<li><?=$txt[SECCION.'_beneficios-editoriales'][5] ?></li>

												

												</ul>

												<div class="clearfix"></div>

												<div class="btn-container">

													<a href="<?=url('editoriales')?>" class="btn-transparent2"><?=$txt['gral'][1] ?></a>

												</div>

												<div class="clearfix"></div>

											</div>



										</div>







									</div>

									<div class="clearfix"></div>

									

								</div>



					    </div>

		 				<h3><span><?=$txt['gral'][2] ?> <?=$txt['nav'][2] ?></span><br><hr></h3>			    

					    <div class="accordion-cont" id="beneficios-librerias">

								<div class="wrap banda absolute">

									

									<div class="container">



										<div class="row">

											

											<div class="col-sm-6">

												<p class="paragraph-4"><b><?=$txt[SECCION.'_beneficios-librerias'][0] ?></b></p>

												<ul class="unstyled-list">

													<li><?=$txt[SECCION.'_beneficios-librerias'][1] ?></li>

													<li><?=$txt[SECCION.'_beneficios-librerias'][2] ?></li>

													<li><?=$txt[SECCION.'_beneficios-librerias'][3] ?></li>

													<li><?=$txt[SECCION.'_beneficios-librerias'][4] ?></li>

												

												</ul>

												<div class="clearfix"></div>

											</div>

											<div class="col-md-6 text-right hidden-xs">

							           			<img src="images/bibliomanager-logo.png" class="img-responsive" alt="BIBLIOMANAGER">



											</div>



										</div>







									</div>

									<div class="clearfix"></div>

									

								</div>



					    </div>

						<h3><span><?=$txt['gral'][2] ?> <?=$txt['nav'][3] ?></span></h3>			

					    <div class="accordion-cont" id="beneficios-distribuidores">

								<div class="wrap banda absolute">

									

									<div class="container">



										<div class="row">

											

											<div class="col-sm-6">

												<ul class="unstyled-list">

													<li><?=$txt[SECCION.'_beneficios-distribuidores'][0] ?></li>

													<li><?=$txt[SECCION.'_beneficios-distribuidores'][1] ?></li>

													<li><?=$txt[SECCION.'_beneficios-distribuidores'][2] ?></li>

												

												</ul>

												<div class="clearfix"></div>



											</div>

											<img src="images/distribuidorees-bg.png" alt="" class="img-responsive visible-xs visible-sm">



										</div>







									</div>

									<div class="clearfix"></div>

									

								</div>

					    	

					    </div>



					</div>



			</div>







		</section>

		<section id="conforman-nuestra-red" class="banda bg-2">

			<div class="container">

				<div class="row">

					<div class="col-xs-12">

						<h4 class="color-3 text-center"><?=$txt[SECCION.'_conforman-nuestra-red'][0] ?> <br><hr class="hidden-xs"></h4>



					</div>

				</div>

				<div class="hidden-xs">

					<div class="row">

						<div class="col-sm-6">

							<h2 class="text-center"><?=$txt['nav'][1] ?></h2>

						</div>

						<div class="col-sm-6">

							<h2 class="text-center color-4"><?=$txt['nav'][2] ?></h2>

						</div>

					</div>

					<div class="row">

						<div class="conforman-nuestra-red__slider">

							<div class="item">

								<div class="col-sm-6">

									<div class="row">

										<div class="col-sm-6"><img src="images/slider-nuestrared/elaleph.png" alt="Elaleph" class="img-responsive"></div>

										<div class="col-sm-6"><img src="images/slider-nuestrared/apg.png" alt="APG" class="img-responsive"></div>

										<div class="col-sm-6"><img src="images/slider-nuestrared/poetry.png" alt="BuenosAires Poetry" class="img-responsive"></div>

										<div class="col-sm-6"><img src="images/slider-nuestrared/nobuko.png" alt="Nobuko" class="img-responsive"></div>

									</div>

								</div>

								<div class="col-sm-6">

									<div class="row">

										<div class="col-sm-6"><img src="images/slider-nuestrared/libreriadelau.png" alt="LibreríadelaU" class="img-responsive"></div>

										<div class="col-sm-6"><img src="images/slider-nuestrared/tematika.png" alt="Tematika" class="img-responsive"></div>

										<div class="col-sm-6"><img src="images/slider-nuestrared/boutique.png" alt="Butique del libro" class="img-responsive"></div>

										<div class="col-sm-6"><img src="images/slider-nuestrared/gandhi.png" alt="Gandhi" class="img-responsive"></div>

									</div>

								</div>

							</div>

							<div class="item">

								<div class="col-sm-6">

									<div class="row">

										<div class="col-sm-6"><img src="images/slider-nuestrared/bruma.png" alt="Bruma" class="img-responsive"></div>

										<div class="col-sm-6"><img src="images/slider-nuestrared/lilium.png" alt="Lilium" class="img-responsive"></div>

									</div>

								</div>

								<div class="col-sm-6">

									<div class="row">

										<div class="col-sm-6"><img src="images/slider-nuestrared/ozonum.png" alt="Ozonum" class="img-responsive"></div>

										<div class="col-sm-6"><img src="images/slider-nuestrared/paidos.png" alt="Paidos" class="img-responsive"></div>

									</div>

								</div>

							</div>

						</div>

					</div>

					

				</div>

				<div class="visible-xs">

					<div class="row">

					</div>

					<div class="row">

						<div class="conforman-nuestra-red__slider">

							<div class="item">

								<div class="col-sm-12">

									<h2 class="text-center"><?=$txt['nav'][1] ?></h2>

									<img src="images/slider-nuestrared/elaleph.png" alt="Elaleph" class="img-responsive">

								</div>

								<div class="col-sm-12">

									<h2 class="text-center color-4"><?=$txt['nav'][2] ?></h2>

									<img src="images/slider-nuestrared/libreriadelau.png" alt="LibreríadelaU" class="img-responsive">

								</div>

							</div>

							<div class="item">

								<div class="col-sm-12">

									<h2 class="text-center"><?=$txt['nav'][1] ?></h2>

									<img src="images/slider-nuestrared/apg.png" alt="APG" class="img-responsive">

								</div>

								<div class="col-sm-12">

									<h2 class="text-center color-4"><?=$txt['nav'][2] ?></h2>

									<img src="images/slider-nuestrared/tematika.png" alt="Tematika" class="img-responsive">

								</div>

							</div>

							<div class="item">

								<div class="col-sm-12">

									<h2 class="text-center"><?=$txt['nav'][1] ?></h2>

									<img src="images/slider-nuestrared/poetry.png" alt="BuenosAires Poetry" class="img-responsive">

								</div>

								<div class="col-sm-12">

									<h2 class="text-center color-4"><?=$txt['nav'][2] ?></h2>

									<img src="images/slider-nuestrared/boutique.png" alt="Butique del libro" class="img-responsive">

								</div>

							</div>

							<div class="item">

								<div class="col-sm-12">

									<h2 class="text-center"><?=$txt['nav'][1] ?></h2>

									<img src="images/slider-nuestrared/nobuko.png" alt="Nobuko" class="img-responsive">

								</div>

								<div class="col-sm-12">

									<h2 class="text-center color-4"><?=$txt['nav'][2] ?></h2>

									<img src="images/slider-nuestrared/gandhi.png" alt="Gandhi" class="img-responsive">

								</div>

							</div>

							<div class="item">

								<div class="col-sm-12">

									<h2 class="text-center"><?=$txt['nav'][1] ?></h2>

									<img src="images/slider-nuestrared/bruma.png" alt="Bruma" class="img-responsive">

								</div>

								<div class="col-sm-12">

									<h2 class="text-center color-4"><?=$txt['nav'][2] ?></h2>

									<img src="images/slider-nuestrared/ozonum.png" alt="Ozonum" class="img-responsive">

								</div>

							</div>

							<div class="item">

								<div class="col-sm-12">

									<h2 class="text-center"><?=$txt['nav'][1] ?></h2>

									<img src="images/slider-nuestrared/lilium.png" alt="Lilium" class="img-responsive">

								</div>

								<div class="col-sm-12">

									<h2 class="text-center color-4"><?=$txt['nav'][2] ?></h2>

									<img src="images/slider-nuestrared/paidos.png" alt="Paidos" class="img-responsive">

								</div>

							</div>

						</div>

					</div>

					

				</div>

			</div>

			

		</section>

		<section id="que-estas-esperando" class="banda bg-4">	

			<div class="container">

				<div class="row">



					<div class="col-xs-12 text-center">



						<h6 class="inline-block color-2"><?=$txt[SECCION.'_que-estas-esperando'][0] ?></h6>

						<br class="hidden-lg">

						<a href="<?=url('librerias')?>" class="btn-md btn-orange"><b><?=$txt['gral'][1] ?></b></a>



					</div>



				</div>

			</div>



		</section>

		<section id="novedades" class="bg-3 banda">	



			<div class="container">	



				<div class="row">	





						<div class="col-xs-12 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">	



								<h2 class="h2 color-3 text-center"><?=$txt['gral'][4] ?></h2>



						</div>



				</div>



				<div class="row contenedor-modulos">



					<?php



					$novedades = Novedad::obtener('ultimas',3);



					foreach($novedades as $i => $n){



						include('templates/novedad.php');



					} ?>



				</div>



				<div class="row text-center">



						<a href="<?=url('novedades')?>" class="btn btn-md btn-transparent wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms"><b><?=$txt['gral'][5] ?></b></a>



				</div>



			</div>



		</section>



	</article>







<?php include('includes/footer.php'); ?>