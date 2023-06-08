<!--================================================================================
================================== CAROUSEL BOOTSTRAP ===================================-->

	<?php
		$thumb  = "";
		$banner = "";

		$indicador     = "";
		$indicador_idx = 0;

		$query = new WP_Query( array(
        'post_type' => 'slideshow',
    ));
	?>

	<?php  if ( $query->have_posts() ) { ?>
	    <?php
			while ( $query->have_posts() ) : $query->the_post();
				//the_field('slide_image');
				if( get_field('slide_image') ):

					$active     = $indicador_idx == 0 ? "active" : "";
					$imagem     = get_field('slide_image');

					$banner    .= "<div class=\"item {$active}\" ><img class=\"img-responsive\" src=\"{$imagem}\" /></div>\n";
					$indicador .= "<li data-target=\"#{$id}\" data-slide-to=\"{$indicador_idx}\" class=\"{$active}\" ></li>\n";

					$indicador_idx++;
				endif;
			endwhile;
	    ?>
	<?php } ?>

		<?php wp_reset_postdata(); ?>

		<div id="<?=$id?>" class="box-banner carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<?=$banner;?>
			</div>
			<ol class="carousel-indicators">
				<?=$indicador;?>
			</ol>
		   <a class="left carousel-control" href="#<?=$id?>" role="button" data-slide="prev">
		     <span class="glyphicon glyphicon-chevron-left" ></span>
		     <span class="sr-only">Anterior</span>
		   </a>
		   <a class="right carousel-control" href="#<?=$id?>" role="button" data-slide="next">
		     <span class="glyphicon glyphicon-chevron-right" ></span>
		     <span class="sr-only">Próximo</span>
		   </a>
		</div>
