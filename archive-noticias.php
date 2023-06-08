<?php
/* Template Name: Notícias */
 get_header(); ?>

<div id="titulos" class="col-sm-12 col-md-12 col-lg-12 clearfix">
  <div class="col-sm-12 col-md-12 col-lg-12 titulos">
    <h1>Notícias</h1>
  </div>
</div>

<div class="conteudos">
  <div class="wrap">
    <?php $noticia = new WP_Query( array( 'post_type'=>'noticia','orderby' => 'date','order' => 'DESC' ) ); ?>
    <?php if( $noticia->have_posts() ) : while( $noticia->have_posts() ) : $noticia->the_post(); ?>

        
    <div class="col-xs-12 col-sm-4 noticia" data-mh="nome">
      <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
        <div class="noticia-img">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-responsive">
          <span class="noticia-data"><?php the_time('d/m\/Y\ ') ?></span>
        </div>
        <h3 class="noticia-titulo"><?php the_title(); ?></h3>
      </a>
    </div>        
    <?php endwhile; endif; ?>
  </div>
</div>

<?php include'inc/paginacao-navegacao.php' ?>

<script src="<?=get_template_directory_uri()?>/js/jquery-1.11.2.js"></script><!-- JS Modaal -->
<script src="<?=get_template_directory_uri()?>/js/modaal.js"></script>

<?php get_footer(); ?>

