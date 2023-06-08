<?php
/* Template Name: Trabalhe Conosco */
 get_header(); ?>

<div id="titulos" class="col-sm-12 col-md-12 col-lg-12 clearfix">
  <div class="col-sm-12 col-md-12 col-lg-12 titulos">
    <h1>Trabalhe Conosco</h1>
  </div>
</div>

<div class="conteudos">
  <?php while ( have_posts() ) : the_post(); ?>
  <?php if( is_single() ){ ?>
  <h2>
    <?php the_title() ?>
  </h2>
  <?php } ?>
  <?php if( get_the_content() ){ ?>
  <?php the_content(); ?>
  <?php } else { ?>
  <p class="text-center">Não existem conteúdos cadastrados...</P>
  <?php } ?>
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>