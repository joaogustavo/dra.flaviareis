<?php
/* Template Name: Clientes */
 get_header(); ?>

<div id="titulos" class="col-sm-12 col-md-12 col-lg-12 clearfix">
  <div class="col-sm-12 col-md-12 col-lg-12 titulos">
    <h1>Clientes</h1>
  </div>
</div>

<div class="conteudos">
  <div class="wrap">

    <?php $cliente = new WP_Query( array( 'post_type'=>'cliente','orderby' => 'date','order' => 'DESC', 'posts_per_page' => '500' ) ); ?>
    <?php if( $cliente->have_posts() ) : while( $cliente->have_posts() ) : $cliente->the_post(); ?>

    <article class="col-xs-12 col-sm-3 cliente text-center" data-mh="nome" title="<?php the_title(); ?>">      
      <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-responsive"><br>
      <h3 class="oculto"><?php the_title(); ?></h3>
    </article>
    <?php endwhile; endif; ?>

  </div>
</div>

<?php include'inc/paginacao-navegacao.php' ?>

<script src="<?=get_template_directory_uri()?>/js/jquery-1.11.2.js"></script><!-- JS Modaal -->
<script src="<?=get_template_directory_uri()?>/js/modaal.js"></script>

<?php get_footer(); ?>

