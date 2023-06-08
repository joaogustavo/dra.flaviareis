<?php get_header(); ?>

<div id="titulos" class="col-sm-12 col-md-12 col-lg-12 clearfix">
  <div class="col-sm-12 col-md-12 col-lg-12 titulos">
    <h1><?php echo esc_html( the_title() ); ?></h1>
  </div>
</div>

<div class="conteudos">
  <div class="wrap">
    <?php while ( have_posts() ) : the_post(); //INÍCIO DO LOOP 
          $categoria = get_the_category();
          $nomeCategoria = $categoria[0]->cat_name;
    ?>


        <article class="col-xs-12 col-sm-8 col-md-8 interna-link nopaddl">
          
          <?php if( has_post_thumbnail( $post_id )){ ?>
              <?php the_post_thumbnail( 'post', array( 'class'=>'img-responsive' ) ); ?>
            <?php } ?>
          <div class="imprensa-single-data">Publicado em <?php the_time('d/m\/Y\. ') ?> <span class="blog-categoria"><i class="fa fa-bookmark-o" aria-hidden="true"></i><?php echo $nomeCategoria; ?></span></div>
          <h2 class="imprensa-single-titulo"><?php echo esc_html( the_title() ); ?></h2>
          <div class="clearfix"></div>
          <div class="imprensa-artigo"><?php the_content(); ?></div>
        </article>        
    <?php endwhile; //FINAL DO LOOP ?>    
  </div>



  <div class="imprensa-single-outros-header col-xs-12 col-sm-4 col-md-4 col-lg-4">
    <h4>Posts Recentes</h4> <a href="../blog" class="imprensa-single-link" title="ver todos">[+]</a>
  </div> 
  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 nopadding wrap outros-artigos">
    <?php $currentID = get_the_ID(); $blog = new WP_Query( array( 'posts_per_page'   => 8, 'post__not_in' => array($currentID),'orderby' => 'date','order' => 'DESC' ) ); ?>
    <?php if( $blog->have_posts() ) : while( $blog->have_posts() ) : $blog->the_post(); 
          $categoria = get_the_category();
          $nomeCategoria = $categoria[0]->cat_name;
          ?>


        <div class="interna-link">
          <a href="<?php the_permalink(); ?>" title="<?php echo esc_html( the_title() ); ?>">       
            <div class="col-xs-12 col-sm-6 imprensa-img">
              <div style="background-image:url(<?php the_post_thumbnail_url(); ?>);"></div>
            </div>
            <div class="imprensa-single-data"><?php the_time('d/m\/Y\ ') ?><span class="blog-categoria"><i class="fa fa-bookmark-o" aria-hidden="true"></i><?php echo $nomeCategoria; ?></span></div>
            <div class="col-xs-12 col-sm-6 imprensa-single-outros-titulo"><?php echo esc_html( the_title() ); ?></div>
            <div class="clearfix imprensa-single-outros-divisao"></div>
          </a>
        </div>        
    <?php endwhile; endif; ?>
  </div>

  </div>

<?php //include'inc/paginacao-navegacao.php' ?>


<script src="<?=get_template_directory_uri()?>/js/jquery-1.11.2.js"></script><!-- JS Modaal -->
<script src="<?=get_template_directory_uri()?>/js/modaal.js"></script>
<script>
$('.video').modaal({
  type: 'video'
});
</script><!-- script Modaal -->
<?php get_footer(); ?>

