<?php
/* Template Name: Especialidade */
 get_header(); ?>

<div id="titulos" class="col-sm-12 col-md-12 col-lg-12 clearfix">
  <div class="col-sm-12 col-md-12 col-lg-12 titulos">
    <h1>Especialidades</h1>
  </div>
</div>

<div class="conteudos">
  <div class="col-sm-4 servicos-nav">
    <div class="mobile">
      <a href="#exibirEspecialidade" class="fullscreen btn-group"><span class="btn btn-default"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span><span class="btn btn-default">Ver Especialidades</span></a>
      <div id="exibirEspecialidade" class="well hidden">
        <?php listar_especialidades(); ?>
      </div>
    </div>

    <div class="desktop">
      <?php listar_especialidades(); ?>
    </div>
  </div>          
  <div class="col-sm-8 servico-conteudo">
    <?php if( have_posts() ) : ?>
    <?php the_post(); ?>
    <div class="servico-header">
      <a href="<?php echo esc_url( home_url('/especialidades') ); ?>" class="servico-link-pg">Especialidades</a>
      <i class="fa fa-angle-double-right" aria-hidden="true"></i>
      <h3 class="servico-single-titulo"><?php the_title(); ?></h3>
    </div>
    <div class="clearfix"></div>
    <?php the_content(); ?>
    <?php endif; wp_reset_postdata();?>
  </div>
</div>

<?php //include'inc/paginacao-navegacao.php' ?>

<script src="<?=get_template_directory_uri()?>/js/jquery-1.11.2.js"></script><!-- JS Modaal -->
<script src="<?=get_template_directory_uri()?>/js/modaal.js"></script>

<?php get_footer(); ?>

