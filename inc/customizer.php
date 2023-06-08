<?php
/**
 * Gizele Zanato Theme Customizer.
 *
 * @package Tema_Desenvolvido
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tema_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'tema_customize_register' );





/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function tema_customize_preview_js() {
	wp_enqueue_script( 'tema_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'tema_customize_preview_js' );

// VIDEO HOME

function VideoHome( $wp_customize ) {
  
class VideoHome extends WP_Customize_Control {
  public $type = 'textarea';
  public function render_content() {
?>

  <label>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <textarea rows="4" style="width:100%;" placeholder="texto"<?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
  </label>

<?php
  }
}
$wp_customize->add_setting('videohome', array('default' => 'http://dfcb.github.io/BigVideo.js/vids/dock.mp4',));
$wp_customize->add_control(new VideoHome($wp_customize, 'videohome', array(
  'label' => 'Vídeo institucional (Home)',
  'section' => 'videohome',
  'settings' => 'videohome',
)));
$wp_customize->add_section('videohome' , array(
  'title' => __('Vídeo Institucional (Home)','Vid'),
));
}
add_action( 'customize_register', 'VideoHome' );



// REMOVENDO SECOES NO PERSONALIZAR

function mytheme_customize_register( $wp_customize ) {
  $wp_customize->remove_section( 'title_tagline');
  $wp_customize->remove_section( 'colors');
  $wp_customize->remove_section( 'header_image');
  $wp_customize->remove_section( 'background_image');
  //$wp_customize->remove_panel  ( 'nav_menus');
  $wp_customize->remove_section( 'static_front_page');
  $wp_customize->remove_panel  ( 'widgets' );
  $wp_customize->remove_section( 'custom_css');

}
add_action( 'customize_register', 'mytheme_customize_register',50 );
