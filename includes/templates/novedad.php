<a class="modulo-novedad wow fadeIn" data-wow-duration="1000ms" data-wow-delay="<?=(300 * ($i+1))?>ms" href="<?=$n->url?>" >

	<div class="modulo-novedad__imagen">

		<img class="img-responsive" src="<?=$n->foto->src('360x300')?>">

	</div>

	<span class="modulo-novedad__titulo"><?=$n->titulo?></span>

	<div class="modulo-novedad__texto"><?=$n->bajada?></div>

	<span class="btn-plus">+</span>

</a>