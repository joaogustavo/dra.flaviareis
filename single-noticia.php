<?php get_header(); ?>

<div id="titulos" class="col-sm-12 col-md-12 col-lg-12 clearfix">
  <div class="col-sm-12 col-md-12 col-lg-12 titulos">
    <h1>Notícias</h1>
  </div>
</div>

<div class="conteudos">
  <div class="wrap">
    <?php while ( have_posts() ) : the_post(); //INÍCIO DO LOOP ?>


        <article class="col-xs-12 col-sm-8 col-md-8 interna-link nopaddl">
          <div class="noticia-single-header" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat left center; background-size: cover;">            
            <h2 class="noticia-single-titulo"><?php echo esc_html( the_title() ); ?></h2>
          </div>
          <div class="noticia-single-data">Publicado em <?php the_time('d/m\/Y\. ') ?></div>          
          <div class="clearfix"></div>
          <div class="noticia-artigo"><?php the_content(); ?></div>
        </article>        
    <?php endwhile; //FINAL DO LOOP ?>    
  </div>



  <div class="noticia-single-outras-header col-xs-12 col-sm-4 col-md-4 col-lg-4">
    <h4>Notícias Recentes</h4> <a href="noticias" class="noticia-single-link" title="ver todas">[+]</a>
  </div> 
  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 nopadding wrap outras-noticias">
    <?php $currentID = get_the_ID(); $noticia = new WP_Query( array( 'post_type'=>'noticia','posts_per_page'   => 8, 'post__not_in' => array($currentID),'orderby' => 'date','order' => 'DESC' ) ); ?>
    <?php if( $noticia->have_posts() ) : while( $noticia->have_posts() ) : $noticia->the_post(); ?>
        
        <?php if( have_posts() ){ ?>
        <div class="interna-link">
          <a href="<?php the_permalink(); ?>" title="<?php echo esc_html( the_title() ); ?>">       
            <div class="col-xs-12 col-sm-6 not-img">
              <div style="background-image:url(<?php the_post_thumbnail_url(); ?>);"></div>
            </div>
            <div class="noticia-single-data"><?php the_time('d/m\/Y\ ') ?></div>
            <div class="col-xs-12 col-sm-6 noticia-single-outras-titulo"><?php echo esc_html( the_title() ); ?></div>
            <div class="clearfix noticia-single-outras-divisao"></div>
          </a>
        </div>
        <?php } else { ?>
        <div class="interna-link text-center uppercase">
          Não existem mais notícias publicadas
        </div>
        <?php } ?>
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
<script>    
  //loja banners
  $(document).ready(function(){
      $('#adsloja').slick({
      arrows: false,
      autoplay: true,
      centerMode: true,
      centerPadding: 0,
      cssEase: 'ease-in-out',
      dots: false,
      fade: true,
      slidesToShow: 1,
      });//slick
    });
</script>