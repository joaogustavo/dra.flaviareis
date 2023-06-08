<!-- topo -->
<header id="topo" class="col-md-12">
  <h1 class="oculto">Ion Tecnologia</h1>
  <div class="col-md-12 topo">
    <!-- logo -->
    <span class="col-xs-4 col-sm-4 col-md-5" id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Ir para a p&aacute;gina inicial" class="logo">Ion Tecnologia</a></span>
    <!-- contatos -->
    <div class="topo-contatos">
      <a href="tel:+556234567800" title="Telefone Ion Tecnologia" class="topo-tel"><span>62</span> 3456-7800</a>
      <a href="orcamento" title="Orçamento Online" class="topo-orcamento hvr-buzz-out">
        <img src="<?=get_template_directory_uri()?>/img/orcamento-img-atendente.png" alt="" class="img-responsive">
        <img src="<?=get_template_directory_uri()?>/img/orcamento-txt.png" alt="" class="img-responsive">
      </a>
    </div>
    <!-- chamada do menu mobile -->
    <a href="#navegacao" class="mobile fullscreen ic-menu"><span>Abrir Menu Mobile</span></a>
      <!-- navegacao menu -->
    <div class="navegacao" id="navegacao">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'lista-menu' ) ); ?>      
    </div>
  </div>
</header>