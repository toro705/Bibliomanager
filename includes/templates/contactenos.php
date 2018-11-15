		<section id="ingrese-su-catalogo" class="banda bg-4">	
			<div class="container">
				<div class="row">

					<div class="col-xs-12 text-center">
						<?php 
							if (SECCION == 'editoriales') 
						{ ?>
						<h6 class="inline-block color-2 text-left"><?=$txt['contactenosinclude'][0] ?></h6>
						<?php } ?>
						<?php 
							if (SECCION == 'librerias') 
						{ ?>
						<h6 class="inline-block color-2 text-left"><?=$txt['contactenosinclude'][1] ?></h6>
						<?php } ?>
						<br class="hidden-lg">
						<a href="<?=url('contacto')?>" class="btn-md btn-orange"><b><?=$txt['gral'][9] ?></b></a>

					</div>

				</div>
			</div>

		</section>
