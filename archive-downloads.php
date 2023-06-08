<?php
/* Template Name: Downloads */
 get_header(); ?>

<div id="titulos" class="col-sm-12 col-md-12 col-lg-12 clearfix">
  <div class="col-sm-12 col-md-12 col-lg-12 titulos">
    <h1>Downloads</h1>
  </div>
</div>

<div class="conteudos">
  <div class="wrap">

    <?php $download = new WP_Query( array( 'post_type'=>'download','orderby' => 'date','order' => 'DESC', 'posts_per_page' => '500' ) ); ?>
    <?php if( $download->have_posts() ) : while( $download->have_posts() ) : $download->the_post(); ?>

    <article class="col-xs-12 col-sm-2 download text-center" data-mh="nome">
      <a href="<?php the_field('download_url'); ?>" title="Baixar <?php the_title(); ?>" target="_blank">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-thumbnail img-responsive">
        <h3 class="download-titulo"><?php the_title(); ?></h3>
      </a>
    </article>    
    
    <?php endwhile; endif; ?>

  </div>
</div>

<?php include'inc/paginacao-navegacao.php' ?>

<script src="<?=get_template_directory_uri()?>/js/jquery-1.11.2.js"></script><!-- JS Modaal -->
<script src="<?=get_template_directory_uri()?>/js/modaal.js"></script>

<?php get_footer(); ?>

