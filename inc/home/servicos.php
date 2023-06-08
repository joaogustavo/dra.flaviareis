<div class="servicos-container-geral">
  <div class="servicos-container">
    <div class="col-xs-12 col-sm-4 servicos-cabecalho"><h2 class="servicos-titulo">Terceirização<br> em TI</h2></div>  
    <div class="col-xs-12 col-sm-8 servicos">
      <?php $servico = new WP_Query( array( 'post_type'=>'servico','orderby' => 'date','order' => 'ASC', 'posts_per_page'=>'500' ) ); ?>
      <?php if( $servico->have_posts() ) : while( $servico->have_posts() ) : $servico->the_post(); ?>
      <!-- servico -->
      <div class="col-xs-6 col-sm-6 servico wow bounceInUp">
        <a href="<?php echo esc_url( the_permalink() ); ?>" class="hvr-reveal" title="<?php the_title(); ?>">
          <!-- ICONE DO SERVICO -->
          <?php if( get_field('servico_icone') ) { ?>          
                <span class="col-xs-3 servico-icone" style="background: url(<?php the_field('servico_icone'); ?>) no-repeat center center;background-size: /*contain*/;min-height:55px;" data-mh="nome"></span>
                <?php } else { ?>
              <div class="col-xs-3 servico-icone" style="min-height:55px;text-align:center;padding:15px 0; color:#cecece;border:solid 1px #cecece;border-radius:5px;" data-mh="nome"><i class="fa fa-spinner fa-pulse fa-fw"></i><br><small style="font-family:'Roboto',sans-serif;font-size:10px;line-height:1px!important;">sem ícone</small></div>
              <?php } ?>
          <!-- TITULO DO SERVICO -->
          <h3 class="col-xs-9 servico-menu-titulo" data-mh="nome">
            <?php the_title(); ?>
            <!-- SUBTITULO DO SERVICO -->
            <?php if( get_field('servico_subtitulo') ) : ?>          
            <div><?php the_field('servico_subtitulo'); ?></div>
            <?php endif; ?>
          </h3>
        </a>
      </div>
      <?php endwhile; endif; ?>
      <div class="col-xs-6 col-sm-6 servicos-link wow fadeInRight">
        <a href="servicos" title="Conheça os serviços" class="servicos-bt hvr-wobble-horizontal">
          <img src="<?php echo get_template_directory_uri(); ?>/img/home-bt-saiba-mais.png" alt="Conheça os serviços prestados...">
        </a>
      </div> 
    </div>
  </div>
</div>