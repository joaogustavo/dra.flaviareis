<!-- LOJA -->
<div class="col-xs-12 depoimentos-container">
<div class="depoimentos-titulo">O que nossos <span>clientes dizem!</span></div>
<div class="depoimentos-bg-esq"></div>
<div class="depoimentos-bg-dir"></div>
  <div id="depoimentos">
    <?php $depoimento = new WP_Query( array( 'post_type'=>'depoimento','orderby' => 'date','order' => 'ASC' ) ); ?>
    <?php if( $depoimento->have_posts() ) : while( $depoimento->have_posts() ) : $depoimento->the_post(); ?>

        
    <div class="col-xs-12 depoimento item" data-mh="nome">      
      <div class="col-xs-12 col-sm-4 depoimento-img">
        <div>
          <i class="fa fa-star-o" aria-hidden="true"></i>
          <i class="fa fa-star-o" aria-hidden="true"></i>
          <i class="fa fa-star-o" aria-hidden="true"></i>
          <i class="fa fa-star-o" aria-hidden="true"></i>
          <i class="fa fa-star-o" aria-hidden="true"></i>
        </div>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-circle img-responsive">        
      </div>
      <div class="col-xs-12 col-sm-8 depoimento-txt text-center">
        <?php the_content(); ?>
        <div class="depoimento-nome"><?php the_title(); ?></div>
        <div class="depoimento-deonde"><?php the_field('dep_loc'); ?></div>
      </div>
    </div>        
    <?php endwhile; endif; ?>
  </div>
</div>