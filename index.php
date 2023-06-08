<?php get_header(); ?>


<div class="conteudos">

  <?php if( have_posts() ){
          while( have_posts() ){
            the_post(); ?>
          <div class="row archive-publicacoes bim">
            <a href="<?php the_permalink() ?>">   
              <div class="col-md-12">
                  <div class="col-md-3">
                    <?php if( has_post_thumbnail( $post_id )){ 
                        the_post_thumbnail( 'post-publicacoes', array( 'class'=>'img-responsive' ) );
                    } ?>
                  </div>
                  <div class="col-md-7">                    
                      <h3><?php echo esc_html( the_title() ); ?></h3>
                      <?php echo esc_html( the_excerpt() ); ?>
                  </div>               
              </div>
            </a> 
          </div>

  <?php }
      } ?>

</div>             
         
        

<?php get_footer(); ?>
