<?php
/**
 * oTema functions and definitions.
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Tema_Desenvolvido
 */


if ( ! function_exists( 'tema_setup' ) ) :

function tema_setup() {

	load_theme_textdomain( 'goTemas', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_image_size( 'post-noticia',      360,  190, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary'             => esc_html__( 'Primary',             'goTemas' ),
	) );


	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );
}

/* NOTICIAS */
function noticias() {

	$labels = array(
		'name'                => __( 'Not&iacute;cias', 'text-domain' ),
		'singular_name'       => __( 'Not&iacute;cia', 'text-domain' ),
		'add_new'             => _x( 'Nova Not&iacute;cia', 'text-domain', 'text-domain' ),
		'add_new_item'        => __( 'Nova Not&iacute;cia', 'text-domain' ),
		'edit_item'           => __( 'Editar Not&iacute;cia', 'text-domain' ),
		'new_item'            => __( 'Nova Not&iacute;cia', 'text-domain' ),
		'view_item'           => __( 'Ver Not&iacute;cia', 'text-domain' ),
		'search_items'        => __( 'Buscar Publicações', 'text-domain' ),
		'not_found'           => __( 'Não existem Publicações cadastradas', 'text-domain' ),
		'not_found_in_trash'  => __( 'Não existem itens na Lixeira', 'text-domain' ),
		'parent_item_colon'   => __( 'Parent Not&iacute;cia:', 'text-domain' ),
		'menu_name'           => __( 'Not&iacute;cias', 'text-domain' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 28,
		'menu_icon'           => 'dashicons-megaphone',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array( 'title', 'editor', 'thumbnail' )
	);

	register_post_type( 'noticia', $args );
}
add_action( 'init', 'noticias' );


/* ESPECIALIDADES */
function especialidades() {

	$labels = array(
		'name'                => __( 'Especialidades', 'text-domain' ),
		'singular_name'       => __( 'Especialidade', 'text-domain' ),
		'add_new'             => _x( 'Nova Especialidade', 'text-domain', 'text-domain' ),
		'add_new_item'        => __( 'Nova Especialidade', 'text-domain' ),
		'edit_item'           => __( 'Editar Especialidade', 'text-domain' ),
		'new_item'            => __( 'Nova Especialidade', 'text-domain' ),
		'view_item'           => __( 'Ver Especialidade', 'text-domain' ),
		'search_items'        => __( 'Buscar Publicações', 'text-domain' ),
		'not_found'           => __( 'Não existem Publicações cadastradas', 'text-domain' ),
		'not_found_in_trash'  => __( 'Não existem itens na Lixeira', 'text-domain' ),
		'parent_item_colon'   => __( 'Parent Especialidade:', 'text-domain' ),
		'menu_name'           => __( 'Especialidades', 'text-domain' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => true,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 28,
		'menu_icon'           => 'dashicons-image-filter',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array( 'title', 'editor' )
	);

	register_post_type( 'especialidade', $args );
}
add_action( 'init', 'especialidades' );


/* final */
endif;
add_action( 'after_setup_theme', 'tema_setup' );

/* listando os especialidades como menu */
function listar_especialidades(){ ?>

	<?php $listar_especialidades = new WP_Query( array( 'post_type'=>'especialidade', 'orderby'=>'title', 'order'=>'ASC', 'posts_per_page'=>'500' ) ); ?>
	<ul class="menu-interno">
	  <?php if( $listar_especialidades->have_posts() ) : while( $listar_especialidades->have_posts() ) : $listar_especialidades->the_post(); ?>
		<li>
			<a href="<?php echo esc_url( the_permalink() ); ?>">
			  <!-- ICONE DA ESPECIALIDADE -->
			  <?php if( get_field('especialidade_icone') ) { ?>          
                <span class="col-xs-3 especialidade-icone" style="background: url(<?php the_field('especialidade_icone'); ?>) no-repeat center center;background-size: contain;min-height:55px;" data-mh="nome"></span>
                <?php } else { ?>
              <div class="col-xs-3 especialidade-icone" style="min-height:55px;text-align:center;padding:15px 0; color:#cecece;border:solid 1px #cecece;border-radius:5px;" data-mh="nome"><i class="fa fa-spinner fa-pulse fa-fw"></i><br><small style="font-family:'Roboto',sans-serif;font-size:10px;line-height:1px!important;">sem ícone</small></div>
              <?php } ?>			  			  
              <!-- TITULO DA ESPECIALIDADE -->
			  <span class="col-xs-9 especialidade-menu-titulo" data-mh="nome">
			    <?php the_title(); ?>			    
              </span>
			</a>
		</li>
	  <?php endwhile; endif; wp_reset_postdata(); ?>
	</ul>
	
<?php }


/*  */
function post_remove ()      //creating functions post_remove for removing menu item
{ 
   remove_menu_page('edit.php');
   remove_menu_page('edit-comments.php');
}

add_action('admin_menu', 'post_remove');   //adding action for triggering function call

/*  */
function my_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'my_admin_bar_render' );

/* limite caracteres posts */
function custom_excerpt_length( $length ) {
	return 23;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more($more) {
	return '...';
}
 
add_filter('excerpt_more', 'new_excerpt_more');


/**
 * content width in pixels, based on the theme's design and stylesheet.
 */
function tema_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tema_content_width', 640 );
}
add_action( 'after_setup_theme', 'tema_content_width', 0 );

/**
 * widget area.
 */
function tema_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'goTemas' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tema_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tema_scripts() {

	$url_template   = get_template_directory_uri();
	$url_stylesheet = get_stylesheet_uri();

	//css	
	wp_enqueue_style( 'wp-bootstrap',       get_template_directory_uri()."/css/bootstrap.min.css" );
	wp_enqueue_style( 'wp-modaal',          get_template_directory_uri()."/css/modaal.css" );
	wp_enqueue_style( 'wp-layout',          get_stylesheet_uri() );
	wp_enqueue_style( 'wp-slick',           "//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" );

	//footer
	wp_enqueue_script( 'wp-jquery',       "{$url_template}/js/jquery-1.9.1.min.js",                                          array(), '1.9.1',  true );
	wp_enqueue_script( 'wp-bootstrap',    "{$url_template}/js/bootstrap.min.js",                                             array(), false,    true );
	wp_enqueue_script( 'wp-script-img',   "{$url_template}/js/responsive-img.min.js",                                        array(), false,    true );
	wp_enqueue_script( 'wp-plugin-js',    "https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js",   array(), false,    true );
	wp_enqueue_script( 'wp-script',       "{$url_template}/js/app.js",                                                       array(), true,     true );
	wp_enqueue_script( 'wp-modaal',       "{$url_template}/js/modaal.js",                                                    array(), false,    true );
	wp_enqueue_script( 'wp-mh',           "{$url_template}/js/jquery.matchHeight.js",                                        array(), false,    true );
	wp_enqueue_script( 'wp-mg',           "//code.jquery.com/jquery-migrate-1.2.1.min.js",                                   array(), false,    true );
	wp_enqueue_script( 'wp-sk',           "//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js",                              array(), false,    true );
	wp_enqueue_script( 'wp-wow',          "{$url_template}/js/wow.min.js",                                                   array(), false,    true );
	wp_enqueue_script( 'wp-wow2',         "{$url_template}/js/wow.init.js",                                                  array(), false,    true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tema_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/* FAVICON */
function favicon() {
	$url_template = get_template_directory_uri();

print "<!-- favicon -->
<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"{$url_template}/favicon/apple-touch-icon-57x57.png\">
<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"{$url_template}favicon/apple-touch-icon-60x60.png\">
<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{$url_template}/favicon/apple-touch-icon-72x72.png\">
<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{$url_template}/favicon/apple-touch-icon-76x76.png\">
<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{$url_template}/favicon/apple-touch-icon-114x114.png\">
<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{$url_template}/favicon/apple-touch-icon-120x120.png\">
<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{$url_template}/favicon/apple-touch-icon-144x144.png\">
<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{$url_template}/favicon/apple-touch-icon-152x152.png\">
<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{$url_template}/favicon/apple-touch-icon-180x180.png\">
<link rel=\"icon\" type=\"image/png\" href=\"{$url_template}/favicon/favicon-32x32.png\" sizes=\"32x32\">
<link rel=\"icon\" type=\"image/png\" href=\"{$url_template}/favicon/android-chrome-192x192.png\" sizes=\"192x192\">
<link rel=\"icon\" type=\"image/png\" href=\"{$url_template}/favicon/favicon-16x16.png\" sizes=\"16x16\">
<link rel=\"manifest\" href=\"{$url_template}/favicon/manifest.json\">
<link rel=\"mask-icon\" href=\"{$url_template}/favicon/safari-pinned-tab.svg\" color=\"#bb520f\">
<link rel=\"shortcut icon\" href=\"{$url_template}/favicon/favicon.ico\">
<meta name=\"msapplication-TileColor\" content=\"#801a19\">
<meta name=\"msapplication-TileImage\" content=\"{$url_template}/favicon/mstile-144x144.png\">
<meta name=\"msapplication-config\" content=\"{$url_template}/favicon/browserconfig.xml\">
<meta name=\"theme-color\" content=\"#801a19\">
";
}

/*
    STYLE LOGIN
*/

function custom_login_css() {
echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/style.css"/>';
}
add_action('login_head', 'custom_login_css');

/*Função que altera a URL, trocando pelo endereço do seu site*/
function my_login_logo_url() {
return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

/*Função que adiciona o nome do seu site, no momento que o mouse passa por cima da logo*/
function my_login_logo_url_title() {
return '« Voltar para Página Inicial';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
