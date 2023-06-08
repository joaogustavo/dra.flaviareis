<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Tema_Desenvolvido
 */

get_header(); ?>

<style type="text/css">
@import url("<?=get_template_directory_uri()?>/404.css");
</style>

<div id="primary" class="content-area conteudos">
  <main id="main" class="site-main" role="main">
    <section class="error-404 not-found">
        <h1 class="page-title">Oops! P&aacute;gina n&atilde;o encontrada...</h1>
      <!-- .page-header -->
      <div class="page-content"></div>
      <a href="<?=esc_url( home_url( '/' ) ); ?>" class="btn btn-success" role="button"><i class="fa fa-home" aria-hidden="true"></i> Ir para a p&aacute;gina inicial</a>
      <!-- .page-content --> 
    </section>
    <!-- .error-404 --> 
  </main>
  <!-- #main --> 
</div>
<!-- #primary -->
<?php
get_footer();

