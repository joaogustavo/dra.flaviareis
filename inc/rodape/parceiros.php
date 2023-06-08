<div class="clearfix"></div>
<div class="parceiros">
  <div class="parceiros-titulo wow bounceInUp">Parceiros/Partners</div>
  <div id="parceiros" class="wow fadeInDown">
    <?php $parceiro = new WP_Query( array( 'post_type'=>'parceiro', 'orderby' => 'date','order' => 'ASC' ) ); ?>
    <?php if( $parceiro->have_posts() ) : while( $parceiro->have_posts() ) : $parceiro->the_post(); ?>
    <div class="item" data-mh="nome">
      <?php if( has_post_thumbnail( $post_id )){ the_post_thumbnail( 'post-parceiro', array( 'class'=>'img-responsive' ) ); } ?>
    </div>
    <?php endwhile; endif; ?>
  </div>
</div>
<div class="clearfix"></div>