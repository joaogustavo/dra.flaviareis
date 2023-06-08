<!-- busca -->
<div id="busca" class="area-busca">
	<form id="buscaForm" role="searchbim" method="get" class="" action="<?php echo esc_url( home_url( '/' ) ); ?>" title="Digite e pressione enter para pesquisar...">
	  <input type="search" class="" id="buscaCampo" value="<?php echo get_search_query(); ?>" name="s" />
	  <button type="submit" id="buscaBt"><span id="hidden"><?php echo _x( '<i class="fa fa-search hvr-grow" aria-hidden="true"></i>', 'submit button', 'twentysixteen' ); ?></span></button>
	</form>
</div>
