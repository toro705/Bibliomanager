<?php

	include_once('includes/config/inicio.php');


  //////////////////////////////////
 /// Configuración de la página ///
//////////////////////////////////

    define('SECCION', 'novedades-ficha');

    if(! isset($_GET['id'])){
        error_404();
    }

    $filtros = array('id' => $_GET['id']);
    if(isset($_GET['vp'])){
        $filtros = array_merge($filtros, array('vp' => true));
    }

    $novedad = Novedad::obtener( $filtros );

    if(! $novedad){
        error_404();
    }

    define('URL_SECCION', $novedad->url);

    $metas = array(
        'titulo'        => $novedad->titulo,
        'descripcion'   => $novedad->bajada,
        'img'           =>'',
		'slider' 		=> $txt['novedades_metas'][2]
    );

/// Fin Configuración de la página //

	include('includes/header.php');

?>

	<article>
		<section id="novedades-ficha" class="banda">	
			<div class="container">	
				<div class="row">
					<div class="col-xs-12">
						<a href="<?=url('novedades')?>" class="btn-volver paragraph-2"><i class="fa fa-chevron-left" aria-hidden="true"></i> <?=$txt['gral'][8] ?></a>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h2 class="color-3"><?=$novedad->titulo?></h2>
						<div class="ficha__imagen">
							<img class="img-responsive" src="<?=$novedad->foto->src('654x545')?>">
						</div>
						<div class="paragraph-2 line-24"><?=$novedad->cuerpo?></div>
					</div>
					<div class="col-md-4 col-md-offset-1 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="500ms">
						<?php
						$novedades = Novedad::obtener('ultimas',3);
						foreach($novedades as $i => $n){
							if($n->id == $novedad->id){
								continue;
							}
							include('templates/novedad.php');
						} ?>
					</div>
				</div>
				<div class="clearfix"></div>
				<hr class="footer-divider">
			</div>
		</section>
	</article>

<?php include('includes/footer.php'); ?>