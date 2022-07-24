<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */


if ( ! function_exists( 'twentytwentytwo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'twentytwentytwo_support' );

if ( ! function_exists( 'twentytwentytwo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twentytwentytwo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Custom fields abelohost
// Тип файла - select

add_action( 'woocommerce_product_options_general_product_data', function (){
    
    ?>
    <div class="options_group">
        <?php
        
        woocommerce_wp_select( array(
           'id'      => 'custom_select',
           'label'   => 'Тип продукта',
           //'name'    => 'custom_select'
           'options' => array(
              'common'   => __( 'common', 'woocommerce' ),
              'frequent' => __( 'frequent', 'woocommerce' ),
              'unusual'  => __( 'unusual', 'woocommerce' ),
              'rare'     => __( 'rare', 'woocommerce' ),
           ),
        ) );
        
        ?>
    </div>
    <?php
    
} );
// Сохраняем значения поля "Тип товара"
add_action( 
    'woocommerce_process_product_meta',
    function( $post_id ){
        
        $product = wc_get_product( $post_id );
        $select_field = isset( $_POST['custom_select'] ) ? sanitize_text_field( $_POST['custom_select'] ) : '';
        $product -> update_meta_data( 'custom_select', $select_field );
        $product -> save();
        
    }, 10, 1
);
// Объявление полей на странице товара
add_action(
    'woocommerce_single_product_summary',function(){
        ?>
        Тип продукта:
        <?php
        $product = wc_get_product();
        echo get_post_meta( $product->get_id(), 'custom_select', true );
        
    }, 35, 1
);