<?php
/** 
 * Plugin recomendations
 **/

require_once ('class-tgm-plugin-activation.php');

add_action( 'tgmpa_register', 'simplegreat_register_required_plugins' );

function simplegreat_register_required_plugins() {

    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        
        array(
            'name'                  => 'SimpleGreat Visual Page Builder', // The plugin name
            'slug'                  => 'js_composer', // The plugin slug (typically the folder name)
            'source'                => get_stylesheet_directory() . '/inc/plugins/js_composer.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '4.7.4', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'                  => 'Revolution Slider', // The plugin name
            'slug'                  => 'revslider', // The plugin slug (typically the folder name)
            'source'                => get_stylesheet_directory() . '/inc/plugins/revslider.zip', // The plugin source
            'required'              => true, // If false, the plugin is only 'recommended' instead of required
            'version'               => '4.6', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'                  => 'SimpleGreat Mega Main Menu', // The plugin name
            'slug'                  => 'mega_main_menu', // The plugin slug (typically the folder name)
            'source'                => get_stylesheet_directory() . '/inc/plugins/mega_main_menu.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '2.0.2', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'                  => 'WooCommerce', // The plugin name
            'slug'                  => 'woocommerce', // The plugin slug (typically the folder name)
            'source'                => get_stylesheet_directory() . '/inc/plugins/woocommerce.2.3.3.zip', // The plugin source
            'required'              => true, // If false, the plugin is only 'recommended' instead of required
            'version'               => '2.3.3', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'                  => 'WooCommerce WishList', // The plugin name
            'slug'                  => 'yith-woocommerce-wishlist', // The plugin slug (typically the folder name)
            'source'                => get_stylesheet_directory() . '/inc/plugins/yith-woocommerce-wishlist.1.1.1.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '1.1.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'                  => 'WooCommerce QuickView', // The plugin name
            'slug'                  => 'woo_quickview', // The plugin slug (typically the folder name)
            'source'                => get_stylesheet_directory() . '/inc/plugins/woo_quickview.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '3.0.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'                  => 'WooCommerce Ajax Search', // The plugin name
            'slug'                  => 'yith-woocommerce-ajax-search', // The plugin slug (typically the folder name)
            'source'                => get_stylesheet_directory() . '/inc/plugins/yith-woocommerce-ajax-search.100.1.1.1.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '100.1.1.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'                  => 'WooCommerce CloudZoom', // The plugin name
            'slug'                  => 'cloud-zoom-for-woocommerce', // The plugin slug (typically the folder name)
            'source'                => get_stylesheet_directory() . '/inc/plugins/cloud-zoom-for-woocommerce.0.1.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '0.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        
        array(
            'name'                  => 'SimpleGreat Translation Manager', // The plugin name
            'slug'                  => 'loco-translate', // The plugin slug (typically the folder name)
            'source'                => get_stylesheet_directory() . '/inc/plugins/loco-translate.1.4.5.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '1.4.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),

        array(
            'name'                  => 'PrettyPhoto Lightbox', // The plugin name
            'slug'                  => 'prettyphoto', // The plugin slug (typically the folder name)
            'source'                => get_stylesheet_directory() . '/inc/plugins/prettyphoto.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '1.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),


        array(
            'name'                  => 'Contact Form 7', // The plugin name
            'slug'                  => 'contact-form-7', // The plugin slug (typically the folder name)
            'source'                => get_stylesheet_directory() . '/inc/plugins/contact-form-7.3.8.1.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '3.8.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        
        array(
            'name'                  => 'Regenerate Thumbnails', // The plugin name
            'slug'                  => 'regenerate-thumbnails', // The plugin slug (typically the folder name)
            'source'                => get_stylesheet_directory() . '/inc/plugins/regenerate-thumbnails.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '2.2.4', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),
        
        array(
            'name'                  => 'Simple WP Retina', // The plugin name
            'slug'                  => 'simple-wp-retina', // The plugin slug (typically the folder name)
            'source'                => get_stylesheet_directory() . '/inc/plugins/simple-wp-retina.1.1.1.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '1.1.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        )

    );

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'domain'            => 'simplegreat',           // Text domain - likely want to be the same as your theme.
        'default_path'      => '',                          // Default absolute path to pre-packaged plugins
        'parent_menu_slug'  => 'themes.php',                // Default parent menu slug
        'parent_url_slug'   => 'themes.php',                // Default parent URL slug
        'menu'              => 'install-required-plugins',  // Menu slug
        'has_notices'       => true,                        // Show admin notices or not
        'is_automatic'      => false,                       // Automatically activate plugins after installation or not
        'message'           => '',                          // Message to output right before the plugins table
        'strings'           => array(
            'page_title'                                => __( 'Install Required Plugins', 'simplegreat' ),
            'menu_title'                                => __( 'Install Plugins', 'simplegreat' ),
            'installing'                                => __( 'Installing Plugin: %s', 'simplegreat' ), // %1$s = plugin name
            'oops'                                      => __( 'Something went wrong with the plugin API.', 'simplegreat' ),
            'notice_can_install_required'               => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
            'notice_can_install_recommended'            => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_install'                     => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
            'notice_can_activate_required'              => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
            'notice_can_activate_recommended'           => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_activate'                    => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
            'notice_ask_to_update'                      => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_update'                      => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
            'install_link'                              => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
            'activate_link'                             => _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
            'return'                                    => __( 'Return to Required Plugins Installer', 'simplegreat' ),
            'plugin_activated'                          => __( 'Plugin activated successfully.', 'simplegreat' ),
            'complete'                                  => __( 'All plugins installed and activated successfully. %s', 'simplegreat' ), // %1$s = dashboard link
            'nag_type'                                  => 'updated' // Determines admin notice type - can only be 'updated' or 'error'
        )
    );

    tgmpa( $plugins, $config );

}

register_sidebar(
  array(
    'name' => __( 'Left/Right sidebar', 'simplegreat' ),
    'id' => 'main-sidebar',
    'description' => __( 'Widgets in this area will be shown in the left or right site column.', 'simplegreat' )
  )
);

register_sidebar(
  array(
    'name' => __( 'Woocommerce sidebar', 'simplegreat' ),
    'id' => 'shop-sidebar',
    'description' => __( 'Widgets in this area will be shown in the left or right column on shop pages.', 'simplegreat' )
  )
);

register_sidebar(
  array(
    'name' => __( 'Footer 3 column sidebar', 'simplegreat' ),
    'id' => 'footer-sidebar',
    'description' => __( 'Widgets in this area will be shown in site footer in 3 column.', 'simplegreat' )
  )
);

register_sidebar(
  array(
    'name' => __( 'Footer 4 column sidebar', 'simplegreat' ),
    'id' => 'footer-sidebar-2',
    'description' => __( 'Widgets in this area will be shown in site footer in 4 column.', 'simplegreat' )
  )
);

add_filter('widget_text', 'do_shortcode');

/*
* WooCommerce ajax add to cart
*/
// Ensure cart contents update when products are added to the cart via AJAX
add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

function woocommerce_header_add_to_cart_fragment( $fragments ) {
  global $woocommerce;
  ob_start();
  ?>
  <div class="shopping-cart">
      
      <div class="shopping-cart-title">
        <span></span><a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'simplegreat'); ?>"><?php echo sprintf(_n('%d item - ', '%d items - ', $woocommerce->cart->cart_contents_count, 'simplegreat'), $woocommerce->cart->cart_contents_count);?> <?php echo $woocommerce->cart->get_cart_total(); ?></a>
      </div>
      <a class="shopping-cart-icon" href="<?php echo $woocommerce->cart->get_cart_url(); ?>"></a>
      <div class="shopping-cart-content">
      <?php if ( sizeof( $woocommerce->cart->get_cart() ) > 0 ) : ?>
   
      <?php foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $cart_item ) : $_product = $cart_item['data'];
      if ( ! apply_filters('woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) || ! $_product->exists() || $cart_item['quantity'] == 0 ) continue;
      $product_price = get_option( 'woocommerce_display_cart_prices_excluding_tax' ) == 'yes' || $woocommerce->customer->is_vat_exempt() ? $_product->get_price_excluding_tax() : $_product->get_price();
      $product_price = apply_filters( 'woocommerce_cart_item_price_html', woocommerce_price( $product_price ), $cart_item, $cart_item_key );
      ?>
      <div class="shopping-cart-product clearfix">
        <div class="shopping-cart-product-image">
        <a href="<?php echo get_permalink( $cart_item['product_id'] ); ?>"><?php echo $_product->get_image(); ?></a>
        </div>
        <div class="shopping-cart-product-title">
        <a href="<?php echo get_permalink( $cart_item['product_id'] ); ?>"><?php echo apply_filters('woocommerce_widget_cart_product_title', $_product->get_title(), $_product ); ?></a>
        </div>
        <div class="shopping-cart-product-price">
        <?php echo $woocommerce->cart->get_item_data( $cart_item ); ?><span class="quantity"><?php printf( '%s &times; %s', $cart_item['quantity'], $product_price ); ?></span></li>
        </div>
      </div>
      <?php endforeach; ?>
      <a class="view-cart" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'simplegreat'); ?>"><?php _e('View cart', 'simplegreat'); ?></a> <a class="view-cart" href="<?php echo $woocommerce->cart->get_checkout_url(); ?>" title="<?php _e('Checkout', 'simplegreat'); ?>"><?php _e('Checkout', 'simplegreat'); ?></a>
      <?php else : ?><div class="empty"><?php _e('No products in the cart.', 'simplegreat'); ?></div>
      <?php endif; ?>
      
      </div>
    </div>
  <?php
  $fragments['.shopping-cart'] = ob_get_clean();
  return $fragments;
}

// Customisation Menu Link
class description_walker extends Walker_Nav_Menu{
      function start_el(&$output, $item, $depth = 0, $args = Array(), $current_object_id = 0 ){
           global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
           $class_names = $value = '';
           $classes = empty( $item->classes ) ? array() : (array) $item->classes;
           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
          
           $add_class = '';
           
           $post = get_post($item->object_id);          

               $class_names = ' class="'.$add_class.' '. esc_attr( $class_names ) . '"';
               $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
               $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
               $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
               $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';

             
               
                    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

                if (is_object($args)) {
                    $item_output = $args->before;
                    $item_output .= '<a'. $attributes .'>';
                    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID );
                    $item_output .= $args->link_after;
                    $item_output .= '</a>';
                    $item_output .= $args->after;
                    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

                    
                }
                
           
      // LI fix
               
     }
}


/** 
* Favicon, Google Fonts and custom styles
**/
function simplegreat_js_settings() {
    global $theme_options;

   
    ?>
    <script>
    (function($){
    $(document).ready(function() {

        <?php if(isset($theme_options['enable_fixed_menu']) && $theme_options['enable_fixed_menu']): ?>

        window.onload = function() {
          skrollr.init({
            forceHeight: false
          });
        }
        <?php endif; ?>

        <?php if(isset($theme_options['revolution_fullwidth']) && $theme_options['revolution_fullwidth']): ?>

        $('.homepage .wpb_revslider_element').addClass('fullwidth-rev-slider');

        <?php endif; ?>

        
        <?php if(isset($theme_options['shop_show_more_enable']) && $theme_options['shop_show_more_enable']): ?>
        
        $(".products-module").each(function(){

          var product_module = $(this);

          $(this).find($(".products")).after( "<div class='hidethisblock'></div>" );

          $(this).find($(".products .product")).each(function( index ) {
            //console.log( index + ": " + $( this ).text() );
            if(index > 3) {
              product_module.find($(".hidethisblock")).append($(this));
            }
          });

          $(this).show();

        });

        $(".show-more-button").show();

        // Show more
        $(".show-more-button").live('click', function(event) {
           
            event.preventDefault();

            var i = 0;
            
            var parent_container = $(this).prev();

            parent_container.find($('.hidethisblock .product')).each(function(){
              if(i < 4) {

              $(this).hide().appendTo(parent_container.find($('.products'))).slideDown();
              
              }
              i++;
              
            });
          
            $('html, body').delay(500).animate({

              scrollTop: parent_container.find($('.products-module ul > .product')).last().offset().top
              
          }, 500);
               
            if(parent_container.find($('.hidethisblock .product')).length == 0) {
              $(this).fadeOut();
            }
              
        });
        <?php else: ?>

        $(".products-module").show();

        <?php endif; ?>



        <?php if(isset($theme_options['enable_parallax']) && $theme_options['enable_parallax']): ?>
  
        $('.parallax').each(function(){
           $(this).parallax("50%", 0.1);
        });

        <?php endif; ?>
        

    });
    })(jQuery);
    </script>
    
  
    <?php
   
}
add_action( 'wp_head' , 'simplegreat_js_settings' );

function simplegreat_custom_favicon() {
    global $theme_options;

    if(isset($theme_options['favicon_image']) && $theme_options['favicon_image']['url'] <> '') {
      echo '<link rel="icon" type="image/png" href="'.$theme_options['favicon_image']['url'].'" />';
    }
}
add_action( 'wp_head' , 'simplegreat_custom_favicon' );

function simplegreat_google_fonts() {
    global $theme_options;
    ?>

    <link href='//fonts.googleapis.com/css?family=<?php if(isset($theme_options['header_font'])) { echo $theme_options['header_font']['font-family']; } ?>:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic<?php if(isset($theme_options['font_cyrillic_enable']) && ($theme_options['font_cyrillic_enable'])) { echo '&subset=cyrillic'; } ?>' rel='stylesheet' type='text/css'>
    <?php if($theme_options['header_font']['font-family'] <> $theme_options['body_font']['font-family']): ?>
    <link href='//fonts.googleapis.com/css?family=<?php echo $theme_options['body_font']['font-family']; ?><?php if(isset($theme_options['font_cyrillic_enable']) && ($theme_options['font_cyrillic_enable'])) { echo '&amp;subset=latin,cyrilic'; } ?>' rel='stylesheet' type='text/css'>
    <?php endif; ?>
    <?php
}
add_action( 'wp_head' , 'simplegreat_google_fonts' );


function simplegreat_custom_styles() {
    global $theme_options;
    ?>
    
    <style type="text/css">
    <?php if(isset($theme_options['shop_catalog_mode_enable']) && $theme_options['shop_catalog_mode_enable']): ?>
    .shopping-cart, 
    .add_to_cart_button, 
    .single_add_to_cart_button, 
    .quantity,
    .link-checkout,
    .add_to_cart {
        display: none!important;
    }
    <?php endif; ?>

    <?php if(isset($theme_options['shop_hide_wishlist']) && $theme_options['shop_hide_wishlist']): ?>
    .yith-wcwl-add-to-wishlist,
    .link-wishlist {
        display: none!important;
    }
    <?php endif; ?>

    <?php if(isset($theme_options['logo_bg_image']) && $theme_options['logo_bg_image']['url'] <> ''): ?>
      
    header {
        background-image: url("<?php echo $theme_options['logo_bg_image']['url']; ?>");
        background-repeat: <?php echo $theme_options['logo_bg_image_repeat']; ?>;
        background-position: <?php echo $theme_options['logo_bg_image_position_x']; ?> <?php echo $theme_options['logo_bg_image_position_y']; ?>;
        background-size: <?php echo $theme_options['logo_bg_image_size']; ?>;
    }
    
    <?php endif; ?>

    /**
    * Custom CSS
    **/
    <?php if(isset($theme_options['custom_css_code'])) { echo $theme_options['custom_css_code']; } ?>
    
    
    /** 
    * Theme Google Font
    **/
    
    h1, h2, h3, h4, h5, h6 {
        font-family: '<?php echo str_replace("+"," ", $theme_options['header_font']['font-family']); ?>';
    }
    h1 {
        font-size: <?php echo $theme_options['header_font']['font-size']; ?>px;
    }
    body {
        font-family: '<?php echo str_replace("+"," ", $theme_options['body_font']['font-family']); ?>';
        font-size: <?php echo $theme_options['body_font']['font-size']; ?>px;
    }
    /**
    * Colors and color skins
    */
    <?php
    if(!isset($theme_options['color_skin_name'])) {
        $color_skin_name = 'none';
    }
    else {
        $color_skin_name = $theme_options['color_skin_name'];
    }
    // Use panel settings
    if($color_skin_name == 'none') {

        $theme_body_color = $theme_options['theme_body_color'];
        $theme_main_color = $theme_options['theme_main_color'];
        $theme_button_hover_color = $theme_options['theme_button_hover_color'];
        $theme_menu_color = $theme_options['theme_menu_color'];
        $theme_menu_link_color = $theme_options['theme_menu_link_color'];
        $theme_menu_separator_color = $theme_options['theme_menu_separator_color'];
        $theme_logo_bg_color = $theme_options['theme_logo_bg_color'];
        $theme_cat_menu_bg_color = $theme_options['theme_cat_menu_bg_color'];
        $theme_cat_menu_border_color = $theme_options['theme_cat_menu_border_color'];
        $theme_cat_menu_link_color = $theme_options['theme_cat_menu_link_color'];
        $theme_cat_submenu_1lvl_bg_color = $theme_options['theme_cat_submenu_1lvl_bg_color'];
        $theme_cat_submenu_1lvl_link_color = $theme_options['theme_cat_submenu_1lvl_link_color'];
        $theme_cat_submenu_2lvl_bg_color = $theme_options['theme_cat_submenu_2lvl_bg_color'];
        $theme_cat_submenu_2lvl_link_color = $theme_options['theme_cat_submenu_2lvl_link_color'];
        $theme_footer_color = $theme_options['theme_footer_color'];
        $theme_footer_link_color = $theme_options['theme_footer_link_color'];
        $theme_footer_header_color = $theme_options['theme_footer_header_color'];
        $theme_title_color = $theme_options['theme_title_color'];
        $theme_widget_title_color = $theme_options['theme_widget_title_color'];
        $theme_product_hover_border_color = $theme_options['theme_product_hover_border_color'];
        
    }
    // Default skin
    if($color_skin_name == 'default') {

        $theme_body_color = '#F6F7F8';
        $theme_main_color = '#C2A26F';
        $theme_button_hover_color = '#3D4445';
        $theme_menu_color = '#4A5456';
        $theme_menu_link_color = '#FFFFFF';
        $theme_menu_separator_color = '#556163';
        $theme_logo_bg_color = '#FFFFFF';
        $theme_cat_menu_bg_color = '#FFFFFF';
        $theme_cat_menu_border_color = '#EAE9E9';
        $theme_cat_menu_link_color = '#000000';
        $theme_cat_submenu_1lvl_bg_color = '#4A5456';
        $theme_cat_submenu_1lvl_link_color = '#A3A8A9';
        $theme_cat_submenu_2lvl_bg_color = '#3D4445';
        $theme_cat_submenu_2lvl_link_color = '#A3A8A9';
        $theme_footer_color = '#4A5456';
        $theme_footer_link_color = '#A3A8A9';
        $theme_footer_header_color = '#F6F7F8';
        $theme_title_color = '#000000';
        $theme_widget_title_color = '#000000';
        $theme_product_hover_border_color = '#EAE9E9';

    }
    // Green skin
    if($color_skin_name == 'green') {

        $theme_body_color = '#F6F7F8';
        $theme_main_color = '#65a83b';
        $theme_button_hover_color = '#1f8549';
        $theme_menu_color = '#20691c';
        $theme_menu_link_color = '#FFFFFF';
        $theme_menu_separator_color = '#20851c';
        $theme_logo_bg_color = '#FFFFFF';
        $theme_cat_menu_bg_color = '#FFFFFF';
        $theme_cat_menu_border_color = '#EAE9E9';
        $theme_cat_menu_link_color = '#000000';
        $theme_cat_submenu_1lvl_bg_color = '#498a21';
        $theme_cat_submenu_1lvl_link_color = '#FFFFFF';
        $theme_cat_submenu_2lvl_bg_color = '#3c7319';
        $theme_cat_submenu_2lvl_link_color = '#FFFFFF';
        $theme_footer_color = '#2c6e46';
        $theme_footer_link_color = '#80b55a';
        $theme_footer_header_color = '#F6F7F8';
        $theme_title_color = '#000000';
        $theme_widget_title_color = '#000000';
        $theme_product_hover_border_color = '#f6faf2';

    }
    // Blue skin
    if($color_skin_name == 'blue') {

        $theme_body_color = '#e6f3fa';
        $theme_main_color = '#65abd4';
        $theme_button_hover_color = '#367ea8';
        $theme_menu_color = '#205878';
        $theme_menu_link_color = '#FFFFFF';
        $theme_menu_separator_color = '#4e8aad';
        $theme_logo_bg_color = '#FFFFFF';
        $theme_cat_menu_bg_color = '#FFFFFF';
        $theme_cat_menu_border_color = '#EAE9E9';
        $theme_cat_menu_link_color = '#000000';
        $theme_cat_submenu_1lvl_bg_color = '#276a91';
        $theme_cat_submenu_1lvl_link_color = '#FFFFFF';
        $theme_cat_submenu_2lvl_bg_color = '#367ea8';
        $theme_cat_submenu_2lvl_link_color = '#FFFFFF';
        $theme_footer_color = '#276a91';
        $theme_footer_link_color = '#58a9cc';
        $theme_footer_header_color = '#F6F7F8';
        $theme_title_color = '#000000';
        $theme_widget_title_color = '#000000';
        $theme_product_hover_border_color = '#58a9cc';

    }
    // Red skin
    if($color_skin_name == 'red') {

        $theme_body_color = '#F6F7F8';
        $theme_main_color = '#b84d4d';
        $theme_button_hover_color = '#9c3a3a';
        $theme_menu_color = '#4f1a1a';
        $theme_menu_link_color = '#FFFFFF';
        $theme_menu_separator_color = '#9c3a3a';
        $theme_logo_bg_color = '#FFFFFF';
        $theme_cat_menu_bg_color = '#FFFFFF';
        $theme_cat_menu_border_color = '#EAE9E9';
        $theme_cat_menu_link_color = '#000000';
        $theme_cat_submenu_1lvl_bg_color = '#732c2c';
        $theme_cat_submenu_1lvl_link_color = '#FFFFFF';
        $theme_cat_submenu_2lvl_bg_color = '#731f1f';
        $theme_cat_submenu_2lvl_link_color = '#FFFFFF';
        $theme_footer_color = '#8c2b2b';
        $theme_footer_link_color = '#c45858';
        $theme_footer_header_color = '#F6F7F8';
        $theme_title_color = '#000000';
        $theme_widget_title_color = '#000000';
        $theme_product_hover_border_color = '#c45858';

    }
    // Black skin
    if($color_skin_name == 'black') {

        $theme_body_color = '#f5f5f5';
        $theme_main_color = '#787878';
        $theme_button_hover_color = '#303030';
        $theme_menu_color = '#000000';
        $theme_menu_link_color = '#FFFFFF';
        $theme_menu_separator_color = '#363636';
        $theme_logo_bg_color = '#FFFFFF';
        $theme_cat_menu_bg_color = '#FFFFFF';
        $theme_cat_menu_border_color = '#EAE9E9';
        $theme_cat_menu_link_color = '#000000';
        $theme_cat_submenu_1lvl_bg_color = '#3d3d3d';
        $theme_cat_submenu_1lvl_link_color = '#FFFFFF';
        $theme_cat_submenu_2lvl_bg_color = '#2e2e2e';
        $theme_cat_submenu_2lvl_link_color = '#FFFFFF';
        $theme_footer_color = '#303030';
        $theme_footer_link_color = '#A3A8A9';
        $theme_footer_header_color = '#F6F7F8';
        $theme_title_color = '#000000';
        $theme_widget_title_color = '#000000';
        $theme_product_hover_border_color = '#d1d1d1';

    }

    // Pink skin
    if($color_skin_name == 'pink') {

        $theme_body_color = '#f5f5f5';
        $theme_main_color = '#fa5ffa';
        $theme_button_hover_color = '#000000';
        $theme_menu_color = '#a639a6';
        $theme_menu_link_color = '#FFFFFF';
        $theme_menu_separator_color = '#ca6dd6';
        $theme_logo_bg_color = '#FFFFFF';
        $theme_cat_menu_bg_color = '#FFFFFF';
        $theme_cat_menu_border_color = '#EAE9E9';
        $theme_cat_menu_link_color = '#000000';
        $theme_cat_submenu_1lvl_bg_color = '#a639a6';
        $theme_cat_submenu_1lvl_link_color = '#FFFFFF';
        $theme_cat_submenu_2lvl_bg_color = '#8c238c';
        $theme_cat_submenu_2lvl_link_color = '#FFFFFF';
        $theme_footer_color = '#a639a6';
        $theme_footer_link_color = '#e5b1f5';
        $theme_footer_header_color = '#F6F7F8';
        $theme_title_color = '#000000';
        $theme_widget_title_color = '#000000';
        $theme_product_hover_border_color = '#eec8f0';

    }

    // Orange skin
    if($color_skin_name == 'orange') {

        $theme_body_color = '#f5f5f5';
        $theme_main_color = '#f5d556';
        $theme_button_hover_color = '#f5c800';
        $theme_menu_color = '#2b2b2b';
        $theme_menu_link_color = '#FFFFFF';
        $theme_menu_separator_color = '#f5c800';
        $theme_logo_bg_color = '#FFFFFF';
        $theme_cat_menu_bg_color = '#FFFFFF';
        $theme_cat_menu_border_color = '#EAE9E9';
        $theme_cat_menu_link_color = '#000000';
        $theme_cat_submenu_1lvl_bg_color = '#bd9d33';
        $theme_cat_submenu_1lvl_link_color = '#FFFFFF';
        $theme_cat_submenu_2lvl_bg_color = '#ab8b22';
        $theme_cat_submenu_2lvl_link_color = '#f5e6ae';
        $theme_footer_color = '#d4af28';
        $theme_footer_link_color = '#f5e6ae';
        $theme_footer_header_color = '#F6F7F8';
        $theme_title_color = '#000000';
        $theme_widget_title_color = '#000000';
        $theme_product_hover_border_color = '#edd69f';

    }
    // Fencer skin
    if($color_skin_name == 'fencer') {

        $theme_body_color = '#F1F3F4';
        $theme_main_color = '#26CDB3';
        $theme_button_hover_color = '#000000';
        $theme_menu_color = '#242424';
        $theme_menu_link_color = '#FFFFFF';
        $theme_menu_separator_color = '#616161';
        $theme_logo_bg_color = '#FFFFFF';
        $theme_cat_menu_bg_color = '#FFFFFF';
        $theme_cat_menu_border_color = '#EAE9E9';
        $theme_cat_menu_link_color = '#000000';
        $theme_cat_submenu_1lvl_bg_color = '#141414';
        $theme_cat_submenu_1lvl_link_color = '#FFFFFF';
        $theme_cat_submenu_2lvl_bg_color = '#333333';
        $theme_cat_submenu_2lvl_link_color = '#FFFFFF';
        $theme_footer_color = '#26CDB3';
        $theme_footer_link_color = '#c7f5ed';
        $theme_footer_header_color = '#F6F7F8';
        $theme_title_color = '#000000';
        $theme_widget_title_color = '#000000';
        $theme_product_hover_border_color = '#26cdb4';

    }
    // Perfectum skin
    if($color_skin_name == 'perfectum') {

        $theme_body_color = '#F1F3F4';
        $theme_main_color = '#F2532F';
        $theme_button_hover_color = '#000000';
        $theme_menu_color = '#F5F5F5';
        $theme_menu_link_color = '#4f4f4f';
        $theme_menu_separator_color = '#9c9c9c';
        $theme_logo_bg_color = '#FFFFFF';
        $theme_cat_menu_bg_color = '#FFFFFF';
        $theme_cat_menu_border_color = '#EAE9E9';
        $theme_cat_menu_link_color = '#000000';
        $theme_cat_submenu_1lvl_bg_color = '#e8e8e8';
        $theme_cat_submenu_1lvl_link_color = '#3b3b3b';
        $theme_cat_submenu_2lvl_bg_color = '#f7f7f7';
        $theme_cat_submenu_2lvl_link_color = '#3b3b3b';
        $theme_footer_color = '#FAFAFA';
        $theme_footer_link_color = '#F2532F';
        $theme_footer_header_color = '#030303';
        $theme_title_color = '#000000';
        $theme_widget_title_color = '#000000';
        $theme_product_hover_border_color = '#F2532F';

    }
    // Metro skin
    if($color_skin_name == 'metro') {

        $theme_body_color = '#F7F7F9';
        $theme_main_color = '#008C8D';
        $theme_button_hover_color = '#6CBE42';
        $theme_menu_color = '#414E5B';
        $theme_menu_link_color = '#ffffff';
        $theme_menu_separator_color = '#707e8c';
        $theme_logo_bg_color = '#FFFFFF';
        $theme_cat_menu_bg_color = '#6CBE42';
        $theme_cat_menu_border_color = '#6CBE42';
        $theme_cat_menu_link_color = '#ffffff';
        $theme_cat_submenu_1lvl_bg_color = '#58BAE9';
        $theme_cat_submenu_1lvl_link_color = '#ffffff';
        $theme_cat_submenu_2lvl_bg_color = '#FFAA31';
        $theme_cat_submenu_2lvl_link_color = '#ffffff';
        $theme_footer_color = '#1F2B36';
        $theme_footer_link_color = '#ffffff';
        $theme_footer_header_color = '#E27043';
        $theme_title_color = '#000000';
        $theme_widget_title_color = '#000000';
        $theme_product_hover_border_color = '#008C8D';

    }
    ?>
    a,
    a:hover, 
    a:focus,
    .page-header-title a:hover,
    .header-menu li a:hover,
    .navbar .nav li.link-blog > a,
    .nav .sub-menu li a:hover,
    .nav .children li a:hover,
    .homepage-about-block h2.post-title a:hover,
    .navigation-paging a,
    .widget_product_categories .children a:hover,
    .woocommerce .woocommerce-breadcrumb a,
    .woocommerce .star-rating,
    .woocommerce .products .product h3:hover,
    .page-404 h1 span,
    .container .wpb_toggle:before,
    .container #content h4.wpb_toggle:before {
        color: <?php echo $theme_main_color; ?>;
    }
    a.btn,
    .btn,
    .btn:focus, 
    input[type="submit"],
    .btn-primary,
    .btn-primary:focus,
    .shopping-cart .shopping-cart-title,
    .shopping-cart .shopping-cart-icon:hover,
    .shopping-cart .view-cart,
    .navbar-toggle,
    .homepage-about-block .wpb_column:nth-child(2) .wpb_text_column:nth-child(2) a:hover,
    .yith-wcwl-add-button a,
    .blog-post .post-date,
    .blog-post .post-format,
    .blog-post .format-quote blockquote,
    .widget_custom_box_left #custom_box_icon,
    .footer-social a:hover,
    #top-link,
    .navigation-paging a:hover,
    .sidebar .widget_calendar th,
    .sidebar .widget_calendar tfoot td,
    .woocommerce span.onsale, 
    .woocommerce-page span.onsale,
    .woocommerce .widget_layered_nav ul li.chosen a, 
    .woocommerce-page .widget_layered_nav ul li.chosen a,
    .woocommerce .widget_layered_nav_filters ul li a, 
    .woocommerce-page .widget_layered_nav_filters ul li a,
    .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, 
    .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle,
    .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
    .woocommerce-page .widget_price_filter .ui-slider .ui-slider-range,
    .woocommerce #content input.button, 
    .woocommerce #respond input#submit, 
    .woocommerce a.button, 
    .woocommerce button.button, 
    .woocommerce input.button, 
    .woocommerce-page #content input.button, 
    .woocommerce-page #respond input#submit, 
    .woocommerce-page a.button, 
    .woocommerce-page button.button, 
    .woocommerce-page input.button,
    .woocommerce a.added_to_cart, .woocommerce-page a.added_to_cart,
    .woocommerce a.button.add_to_cart_button:hover,
    .woocommerce #content input.button.alt:hover, 
    .woocommerce #respond input#submit.alt:hover, 
    .woocommerce a.button.alt:hover, 
    .woocommerce button.button.alt:hover, 
    .woocommerce input.button.alt:hover, 
    .woocommerce-page #content input.button.alt:hover, 
    .woocommerce-page #respond input#submit.alt:hover, 
    .woocommerce-page a.button.alt:hover, 
    .woocommerce-page button.button.alt:hover, 
    .woocommerce-page input.button.alt:hover,
    .woocommerce .quantity .plus:hover,
    .woocommerce .quantity .minus:hover,
    .woocommerce div.product .woocommerce-tabs ul.tabs li:not(.active):hover, 
    .woocommerce #content div.product .woocommerce-tabs ul.tabs li:not(.active):hover, 
    .woocommerce-page div.product .woocommerce-tabs ul.tabs li:not(.active):hover, 
    .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li:not(.active):hover,
    .show-more-button,
    .wpb_button,
    .comment-meta .reply a,
    .woocommerce ul.products li.product .onsale, 
    .woocommerce-page ul.products li.product .onsale, 
    .woocommerce span.onsale, .woocommerce-page span.onsale,
    .woocommerce .shop-product .summary .yith-wcwl-wishlistexistsbrowse a, 
    .woocommerce .shop-product .summary .yith-wcwl-wishlistaddedbrowse a,
    .tp-button.big,
    .jckqvBtn:hover,
    #jckqv .button:hover,
    #jckqv .onsale {
        background-color: <?php echo $theme_main_color; ?>;
    }
    .shopping-cart .shopping-cart-content,
    .homepage-about-block .wpb_column:nth-child(2) .wpb_text_column:nth-child(2) a:hover,
    .widget_custom_box_left .custom_box,
    .navigation-paging a,
    .sidebar .widget_calendar tbody td a,
    .woocommerce .widget_layered_nav ul li.chosen a, 
    .woocommerce-page .widget_layered_nav ul li.chosen a,
    .woocommerce .widget_layered_nav_filters ul li a, 
    .woocommerce-page .widget_layered_nav_filters ul li a,
    blockquote {
        border-color: <?php echo $theme_main_color; ?>;
    }
    .header-menu-bg {
        background-color: <?php echo $theme_menu_color; ?>;
    }
    .header-menu li a {
        color: <?php echo $theme_menu_link_color; ?>;
    }
    .footer-container {
        background-color: <?php echo $theme_footer_color; ?>;
    }
    body {
        background-color: <?php echo $theme_body_color; ?>;
    }
    .page-item-title h1 {
        color: <?php echo $theme_title_color; ?>;
    }
    .sidebar .widgettitle {
        color: <?php echo $theme_widget_title_color; ?>;
    }
    .btn:hover,
    input[type="submit"]:hover,
    .shopping-cart .shopping-cart-icon,
    .shopping-cart .view-cart:hover,
    .navbar-toggle:hover,
    .homepage-about-block .wpb_column:nth-child(2) .wpb_text_column:nth-child(2),
    .yith-wcwl-add-button a:hover,
    .custom-footer-contact .contact-icon,
    .footer-social a,
    #top-link:hover,
    .woocommerce a.add_to_cart_button,
    .woocommerce #content input.button.alt, 
    .woocommerce #respond input#submit.alt, 
    .woocommerce a.button.alt, 
    .woocommerce button.button.alt, 
    .woocommerce input.button.alt, 
    .woocommerce-page #content input.button.alt, 
    .woocommerce-page #respond input#submit.alt,
    .woocommerce-page a.button.alt, 
    .woocommerce-page button.button.alt, 
    .woocommerce-page input.button.alt,
    .woocommerce #content input.button:hover, 
    .woocommerce #respond input#submit:hover, 
    .woocommerce a.button:hover, 
    .woocommerce button.button:hover, 
    .woocommerce input.button:hover,
    .woocommerce-page #content input.button:hover, 
    .woocommerce-page #respond input#submit:hover, 
    .woocommerce-page a.button:hover, 
    .woocommerce-page button.button:hover, 
    .woocommerce-page input.button:hover,
    .woocommerce .shop-product .summary .yith-wcwl-wishlistexistsbrowse a:hover,
    .woocommerce .shop-product .summary .yith-wcwl-wishlistaddedbrowse a:hover,
    .woocommerce .quantity input.qty,
    .woocommerce .quantity .minus,
    .woocommerce .quantity .plus,
    .woocommerce div.product .woocommerce-tabs ul.tabs li, 
    .woocommerce #content div.product .woocommerce-tabs ul.tabs li, 
    .woocommerce-page div.product .woocommerce-tabs ul.tabs li, 
    .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li,
    .show-more-button:hover,
    .tp-leftarrow:hover,
    .tp-rightarrow:hover,
    .tp-button.big:hover,
    .jckqvBtn,
    #jckqv .button {
        background-color: <?php echo $theme_button_hover_color; ?>;
    }
    .navbar {
        background-color: <?php echo $theme_cat_menu_bg_color; ?>;
    }
    .navbar .nav li a {
        color: <?php echo $theme_cat_menu_link_color; ?>;
    }
    .nav .sub-menu li a, 
    .nav .children li a,
    .navbar .nav > li > a:hover {
        background-color: <?php echo $theme_cat_submenu_1lvl_bg_color; ?>;
    }
    .nav .sub-menu li a, 
    .nav .children li a {
        color: <?php echo $theme_cat_submenu_1lvl_link_color; ?>;
    }
    .nav .sub-menu li li a,
    .nav .children li li a {
        background-color: <?php echo $theme_cat_submenu_2lvl_bg_color; ?>;
    }
    .nav .sub-menu li li a,
    .nav .children li li a {
        color: <?php echo $theme_cat_submenu_2lvl_link_color; ?>;
    }
    .footer-container a,
    .footer-container {
        color: <?php echo $theme_footer_link_color; ?>;
    }
    .footer-container h2.widgettitle {
        color: <?php echo $theme_footer_header_color; ?>;
    }
    .header-menu li a {
        border-color: <?php echo $theme_menu_separator_color; ?>;
    }
    .navbar,
    .autocomplete-suggestions {
        border-color: <?php echo $theme_cat_menu_border_color; ?>;
    }   
    header {
        background-color: <?php echo $theme_logo_bg_color; ?>;
    }
    .woocommerce ul.products li.product:hover {
        border-color: <?php echo $theme_product_hover_border_color; ?>;
    }
    <?php if(isset($theme_options['megamenu_override']) && $theme_options['megamenu_override']): ?>
    /* 
    *   Mega menu styles overrides
     */
    #mega_main_menu.primary > .menu_holder > .mmm_fullwidth_container {
        background: none;
    }
    #mega_main_menu.primary {
        min-height: 58px;
    }
    /* Reset - current/hover item */
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link, 
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:hover, 
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:focus, 
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link, 
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link {
        background: none;
        color: <?php echo $theme_cat_menu_link_color; ?>;
    }
    /* Hover top menu item text */
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link, 
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:hover, 
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:focus, 
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *, 
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link, 
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link * {
        color: #fff;
    }
    /* Current top menu item */
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link *, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link * {
        color: <?php echo $theme_main_color; ?>;
    }
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:not(.nav_search_box):hover {
        background-color: <?php echo $theme_cat_submenu_1lvl_bg_color; ?>;
    }
    /* Menu items */
    #mega_main_menu.primary > .menu_holder > .menu_inner > .nav_logo > .mobile_toggle > .mobile_button, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link .link_text, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.nav_search_box *, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li .post_details > .post_title, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li .post_details > .post_title > .item_link {
        font-weight: bold;
        font-size: 12px;
        text-transform: uppercase;
    }
    /* Reset - all items */
    #mega_main_menu.primary.primary_style-buttons > .menu_holder > .menu_inner > .nav_logo > .mobile_toggle, 
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link {
        background: none;
    }
    #mega_main_menu.primary > .menu_holder > .menu_inner > .nav_logo > .mobile_toggle > .mobile_button, 
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link, 
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link * {
        color: <?php echo $theme_cat_menu_link_color; ?>;
        text-transform: uppercase;
        font-weight: bold;
    }
    /* Item separator */
    #mega_main_menu.direction-horizontal > .menu_holder > .menu_inner > ul > li {
        padding-top: 4px;
        padding-bottom: 4px;
    }
    #mega_main_menu.direction-horizontal > .menu_holder > .menu_inner .nav_logo {
        padding-top: 4px;
        padding-bottom: 4px;
    }
    #mega_main_menu > .menu_holder > .menu_inner > ul > li.nav_search_box {
        margin-top: 4px;
    }
    #mega_main_menu.direction-horizontal > .menu_holder > .menu_inner > ul > li:first-child {
        border-left: 0;
    }
    #mega_main_menu.direction-horizontal > .menu_holder > .menu_inner > ul > li.nav_search_box {
        border: 0;
    }
    #mega_main_menu.direction-horizontal > .menu_holder > .menu_inner > ul > li > .item_link:before, #mega_main_menu.direction-horizontal > .menu_holder > .menu_inner > .nav_logo:before, #mega_main_menu.direction-horizontal > .menu_holder > .menu_inner > ul > li.nav_search_box:before {
        background-image: none;
    }
   
    /* Text and links color */
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li .post_details > .post_icon > i, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li .mega_dropdown .item_link *, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li .mega_dropdown a, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li .mega_dropdown a *, #mega_main_menu.primary ul li.default_dropdown .mega_dropdown > li > .item_link *, #mega_main_menu.primary ul li.multicolumn_dropdown .mega_dropdown > li > .item_link #mega_main_menu.primary ul li.grid_dropdown .mega_dropdown > li > .item_link *, #mega_main_menu.primary ul li li .post_details a {
        color: inherit;
    }
     /* Submenu Item hover */
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li .mega_dropdown .item_link:hover, 
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li .mega_dropdown .item_link:focus, 
    #mega_main_menu.primary ul li.default_dropdown .mega_dropdown > li:hover > .item_link, 
    #mega_main_menu.primary ul li.default_dropdown .mega_dropdown > li.current-menu-item > .item_link, 
    #mega_main_menu.primary ul li.multicolumn_dropdown .mega_dropdown > li > .item_link:hover, 
    #mega_main_menu.primary ul li.multicolumn_dropdown .mega_dropdown > li.current-menu-item > .item_link, 
    #mega_main_menu.primary ul li.post_type_dropdown .mega_dropdown > li:hover > .item_link, 
    #mega_main_menu.primary ul li.post_type_dropdown .mega_dropdown > li > .item_link:hover, 
    #mega_main_menu.primary ul li.post_type_dropdown .mega_dropdown > li.current-menu-item > .item_link, 
    #mega_main_menu.primary ul li.grid_dropdown .mega_dropdown > li:hover > .processed_image, 
    #mega_main_menu.primary ul li.grid_dropdown .mega_dropdown > li:hover > .item_link, 
    #mega_main_menu.primary ul li.grid_dropdown .mega_dropdown > li > .item_link:hover, 
    #mega_main_menu.primary ul li.grid_dropdown .mega_dropdown > li.current-menu-item > .item_link, 
    #mega_main_menu.primary ul li.post_type_dropdown .mega_dropdown > li > .processed_image:hover {
       background: none;
    }

    #mega_main_menu > .menu_holder > .menu_inner > ul > li.widgets_dropdown .mega_dropdown > li > .item_link, #mega_main_menu > .menu_holder > .menu_inner > ul > li.multicolumn_dropdown .mega_dropdown > li > .item_link {
        border: none;
    }
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li .mega_dropdown .item_link *, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li .mega_dropdown .item_link *, #mega_main_menu.primary ul li.default_dropdown .mega_dropdown > li > .item_link *, #mega_main_menu.primary ul li.default_dropdown .mega_dropdown > li.current-menu-item > .item_link *, #mega_main_menu.primary ul li.multicolumn_dropdown .mega_dropdown > li > .item_link *, #mega_main_menu.primary ul li.multicolumn_dropdown .mega_dropdown > li.current-menu-item > .item_link *, #mega_main_menu.primary ul li.post_type_dropdown .mega_dropdown > li > .item_link *, #mega_main_menu.primary ul li.post_type_dropdown .mega_dropdown > li.current-menu-item > .item_link *, #mega_main_menu.primary ul li.grid_dropdown .mega_dropdown > li > .item_link *, #mega_main_menu.primary ul li.grid_dropdown .mega_dropdown > li a *, #mega_main_menu.primary ul li.grid_dropdown .mega_dropdown > li.current-menu-item > .item_link *, #mega_main_menu.primary ul li.post_type_dropdown .mega_dropdown > li > .processed_image > .cover > a > i,
    #mega_main_menu > .menu_holder > .menu_inner > ul > li.default_dropdown.drop_to_right .mega_dropdown li > .item_link:before {
        color: <?php echo $theme_cat_submenu_1lvl_link_color; ?>;
    }
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li .mega_dropdown * {
        color: <?php echo $theme_cat_submenu_1lvl_link_color; ?>;
    }
    /* Submenu hover color */
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li .mega_dropdown .item_link:hover *, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li .mega_dropdown .item_link:focus *, #mega_main_menu.primary ul li.default_dropdown .mega_dropdown > li:hover > .item_link *, #mega_main_menu.primary ul li.default_dropdown .mega_dropdown > li.current-menu-item > .item_link *, #mega_main_menu.primary ul li.multicolumn_dropdown .mega_dropdown > li > .item_link:hover *, #mega_main_menu.primary ul li.multicolumn_dropdown .mega_dropdown > li.current-menu-item > .item_link *, #mega_main_menu.primary ul li.post_type_dropdown .mega_dropdown > li:hover > .item_link *, #mega_main_menu.primary ul li.post_type_dropdown .mega_dropdown > li.current-menu-item > .item_link *, #mega_main_menu.primary ul li.grid_dropdown .mega_dropdown > li:hover > .item_link *, #mega_main_menu.primary ul li.grid_dropdown .mega_dropdown > li a:hover *, #mega_main_menu.primary ul li.grid_dropdown .mega_dropdown > li.current-menu-item > .item_link *, #mega_main_menu.primary ul li.post_type_dropdown .mega_dropdown > li > .processed_image:hover > .cover > a > i {
        color: <?php echo $theme_main_color; ?>;
    }

    /* Drop down menus */
    #mega_main_menu > .menu_holder > .menu_inner > ul > li.default_dropdown > ul, #mega_main_menu > .menu_holder > .menu_inner > ul > li.default_dropdown li > ul, #mega_main_menu > .menu_holder > .menu_inner > ul > li.multicolumn_dropdown > ul, #mega_main_menu > .menu_holder > .menu_inner > ul > li.widgets_dropdown > ul, #mega_main_menu > .menu_holder > .menu_inner > ul > li.post_type_dropdown > ul, #mega_main_menu > .menu_holder > .menu_inner > ul > li.grid_dropdown > ul, #mega_main_menu > .menu_holder > .menu_inner > ul > li.post_type_dropdown .mega_dropdown > li.post_item .post_details, #mega_main_menu > .menu_holder > .menu_inner > ul > li.grid_dropdown .mega_dropdown > li .post_details {
        box-shadow: none;
    }
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.default_dropdown .mega_dropdown, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .mega_dropdown, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li .mega_dropdown > li .post_details {
        background-color: <?php echo $theme_cat_submenu_1lvl_bg_color; ?>;
    }
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.default_dropdown:not(.multicolumn_dropdown) .mega_dropdown .mega_dropdown, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:not(.multicolumn_dropdown) > .mega_dropdown .mega_dropdown, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:not(.multicolumn_dropdown) .mega_dropdown .mega_dropdown > li:not(.multicolumn_dropdown) .post_details {
        background-color: <?php echo $theme_cat_submenu_2lvl_bg_color; ?>;
    }
    #mega_main_menu > .menu_holder > .menu_inner > ul > li.default_dropdown .mega_dropdown > li > .item_link {
        border: none;
        padding: 15px;
    }
    #mega_main_menu > .menu_holder > .menu_inner > ul > li.multicolumn_dropdown .mega_dropdown > li > .item_link {
        padding: 10px 15px;
    }
    /* Search box */
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.nav_search_box > #mega_main_menu_searchform {
        background-color: <?php echo $theme_main_color; ?>;
    }
    #mega_main_menu > .menu_holder > .menu_inner > .mega_main_menu_ul > li.multicolumn_dropdown > .mega_dropdown > .menu-item-object-product_cat > a > .link_content > .link_text {
        font-weight: bold;
    }
    #mega_main_menu {
        margin-right: 210px;
    }
    #mega_main_menu.direction-horizontal > .menu_holder > .menu_inner > ul > li.nav_search_box {
        width: auto;
        padding-right: 0;
    }
    #mega_main_menu.direction-horizontal > .menu_holder > .menu_inner > ul > li.nav_search_box * {
        font-weight: normal;
    }
    #mega_main_menu.direction-horizontal > .menu_holder > .menu_inner > ul > li.nav_search_box strong {
        font-weight: bold;
    }
    .navbar {
        padding-bottom: 0!important;
    }
    #mega_main_menu .nav_logo {
        border-bottom: 1px solid <?php echo $theme_cat_menu_border_color; ?>;
    }
    #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.nav_search_box .field, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.nav_search_box *, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li .icosearch {
        color: inherit;
    }
    #mega_main_menu > .menu_holder > .menu_inner > ul > li.submenu_full_width > .mega_dropdown {
        width: 1170px!important;
    }
    @media (max-width: 1200px) {
        #mega_main_menu > .menu_holder > .menu_inner > ul > li.submenu_full_width > .mega_dropdown {
            width: 970px!important;
        }
    }
    @media (max-width: 992px)  { 
        #mega_main_menu > .menu_holder > .menu_inner > ul > li.submenu_full_width > .mega_dropdown {
            width: 100%!important;
        }
        #mega_main_menu {
            margin-right: 0;
        }
        .navbar #searchform {
            float: none;
            margin: 10px auto;
            display: block;
            text-align: center;
        }
    }
    @media (max-width: 767px)  {
        .navbar #searchform {
            float: none;
            padding: 0;
            text-align: center;
        }
        #mega_main_menu.direction-horizontal > .menu_holder > .menu_inner > ul > li.nav_search_box {
            padding-top: 0;
            margin-top: 0;
            margin-bottom: 10px;
        }
        #mega_main_menu > .menu_holder > .menu_inner > ul > li > .item_link:after {
            right: 5px;
        }
        #mega_main_menu > .menu_holder > .menu_inner > ul > li.multicolumn_dropdown .mega_dropdown > li > .item_link {
            padding: 10px 0!important;
        }

    }
    
    <?php endif; ?>
    </style>
    <script>

    <?php if(isset($theme_options['custom_js_code'])) { echo $theme_options['custom_js_code']; } ?>
    </script>
    <?php
}
add_action( 'wp_head' , 'simplegreat_custom_styles' );
