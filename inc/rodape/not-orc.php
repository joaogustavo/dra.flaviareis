<div class="col-xs-12 not-orc">
  <!-- noticia rodape -->
  <div class="col-xs-12 col-sm-6 rodape-not-container">
    <div class="rodape-not-titulo">Inform<span>ativos</span></div>

    <?php $noticia = new WP_Query( array( 'post_type'=>'noticia','orderby' => 'date','order' => 'DESC' ) ); ?>
    <?php if( $noticia->have_posts() ) : while( $noticia->have_posts() ) : $noticia->the_post(); ?>

    <div class="rodape-not">
      <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
        <div class="rodape-not-data"><?php the_time('d') ?> <div><?php the_time('m') ?></div> <?php the_time('y') ?></div>
        <div class="rodape-not-img">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-responsive">
        </div>
        <div class="rodape-not-tit"><?php the_title(); ?>...</div>
      </a>
    </div>
    <?php endwhile; endif; ?>
  </div>
  <!-- orcamento rodape -->
  <div class="col-xs-12 col-sm-6 rodape-orc">
    <a href="orcamento" title="Faça um orçamento online">
      <img src="<?=get_template_directory_uri()?>/img/icone-orcamento.png" alt="" class="hvr-shrink img-responsive">
    </a>
  </div>
</div>
<div class="clearfix"></div>