<?php $ultima = new WP_Query( array( 'post_type'=>'ultimas','posts_per_page'   => 1,'orderby' => 'date','order' => 'DESC' ) ); ?>
  <?php if( $ultima->have_posts() ) : while( $ultima->have_posts() ) : $ultima->the_post(); ?>
<div class="ultima-edicao desktop" style="background: url(<?php the_post_thumbnail_url() ?>) no-repeat left top; background-size:cover;">  
  <a href="<?php the_field('issuu_url'); ?>" target="_blank" title="Ler Edi&ccedil;&atilde;o: <?php echo esc_html( the_title() ); ?>">
        <div class="ultima-edicao-titulo">Edi&ccedil;&atilde;o</div>
        <span class="ultima-edicao-nome"><?php echo esc_html( the_title() ); ?></span>
  </a>
    <?php endwhile; endif; ?>
</div>