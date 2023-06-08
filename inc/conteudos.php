<section class="col-sm-12 col-md-12 col-lg-12 corpo">
  <?php while ( have_posts() ) : the_post(); ?>
  <?php if( is_single() ){ ?>
  <h2>
    <?php the_title() ?>
  </h2>
  <?php } ?>
  <?php if( get_the_content() ){ ?>
  <?php the_content(); ?>
  <?php } else { ?>
  <p>EM BREVE</P>
  <?php } ?>
  <?php endwhile; ?>
</section>
