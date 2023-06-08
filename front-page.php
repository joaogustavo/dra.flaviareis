<?php /* Template Name: 1-HOME */
get_header(); ?>

<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/home.css">

<main class="col-md-12 clearfix wrap corpo">
  <!-- video -->
  <?php get_template_part ('inc/home/video') ?>
  <div class="clearfix"></div>
  <!-- servicos chamada -->
    <?php get_template_part ('inc/home/servico') ?>
    <div class="clearfix"></div>
  <!-- servicos -->
    <?php get_template_part ('inc/home/servicos') ?>
    <div class="clearfix"></div>
  <!-- depoimentos -->
    <?php get_template_part ('inc/home/depoimentos') ?>
    <div class="clearfix"></div>
  <!-- /.conteudos -->
</main>
<!-- /.corpo -->
<?php get_footer(); ?>
<script>    
  //depoimentos
  $(document).ready(function(){
      $('#depoimentos').slick({     
      dots: true,
      autoplay: true,
      slidesToShow: 1,
      arrows: true,
      cssEase: 'ease-in-out',
      prevArrow: '<span title="Anterior" class="slick-nav-esq wow fadeInRight"></span>',
      nextArrow: '<span title="Pr&oacute;ximo" class="slick-nav-dir wow fadeInLeft"></span>'
      });//slick
    });
</script>