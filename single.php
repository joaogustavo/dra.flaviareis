<?php get_header(); ?>


<div class="container">

  <?php if( have_posts() ){
          while( have_posts() ){
            the_post(); ?>
          <div class="row archive-publicacoes">
            <a href="<?php the_permalink() ?>">   
              <div class="col-md-12">                    
                      <h3><?php echo esc_html( the_title() ); ?></h3>
                      <p><?php echo esc_html( the_content() ); ?> </p>
              </div>
            </a> 
          </div>

  <?php }
      } ?>

</div>             
         
        
<script src="<?=get_template_directory_uri()?>/js/jquery-1.11.2.js"></script><!-- JS Modaal -->
<script src="<?=get_template_directory_uri()?>/js/modaal.js"></script>
<script>
$(".inline").modaal();
</script><!-- script Modaal -->
<?php get_footer(); ?>
