<?php
/**
 * WP Theme Header
 *
 * Displays all of the <head> section
 *
 * @package SimpleGreat
 */
global $theme_options;

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php bloginfo('name'); ?> <?php is_home() ? bloginfo('description') : wp_title( '|', true, 'left' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php echo body_class(); ?>>
<?php do_action( 'before' ); ?>

<?php if((isset($theme_options['sideblock_show_facebook'])) && ($theme_options['sideblock_show_facebook'])): ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="widget_facebook_right">
  <div id="facebook_icon"></div>
  <div class="facebook_box">
   <div class="fb-like-box" data-href="https://www.facebook.com/<?php if(isset($theme_options['facebook_gid'])) { echo $theme_options['facebook_gid']; } ?>" data-width="237" data-height="389" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
 
  </div>
</div>
<?php endif; ?>

<?php if(isset($theme_options['sideblock_show_custom']) && $theme_options['sideblock_show_custom']): ?>
<div class="widget_custom_box_left">
<div id="custom_box_icon"></div>
<div class="custom_box">
  <?php if(isset($theme_options['sideblock_custom_content'])) { echo $theme_options['sideblock_custom_content']; } ?>
</div>
</div>
<?php endif; ?>
<div class="header-menu-bg" data-290="position:fixed;" data-0="position:static;">
  <div class="header-menu">
    <div class="container">

    <?php
      wp_nav_menu(array(
        'theme_location'  => 'top',
        'menu_class'      => 'links'
        ));
    ?>
    <?php if(isset($theme_options['shop_disable_cartbox']) && !$theme_options['shop_disable_cartbox']): ?>
    <?php if (class_exists('Woocommerce')): ?>
    <?php global $woocommerce; ?>
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
    <?php endif; ?>
    <?php endif; ?>
    </div>

    

  </div>
</div>
<!--placeholder div to prevent jumpy content when nav gets pinned-->
<div style="padding:1em;display:none;" data-top-top="display:none;" data-290="display:block;" data-anchor-target=".header-menu-bg">&nbsp;</div>

  <header>
    <div class="logo"><a class="logo-link" href="<?php echo site_url(); ?>"><img src="<?php echo get_header_image(); ?>" alt=""></a></div>
    <div class="tagline"><?php bloginfo('description'); ?></div>
  </header>
  <div id="navbar" class="navbar navbar-default clearfix">
    <div class="navbar-inner">
      <div class="container">
        <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
        <?php if(!is_plugin_active('mega_main_menu/mega_main_menu.php')): ?> 
        <div class="navbar-toggle" data-toggle="collapse" data-target=".collapse">
          <?php _e( 'Menu', 'simplegreat' ); ?>
        </div>
        <?php endif; ?> 
        <?php
          wp_nav_menu(array(
            'theme_location'  => 'primary',
            'container_class' => 'navbar-collapse collapse',
            'menu_class'      => 'nav',
            'walker'          => new description_walker
            ));
          if (class_exists('Woocommerce')) {
            //echo get_product_search_form();
            echo do_shortcode('[yith_woocommerce_ajax_search]');
          }
        ?>
      </div>
    </div>
  </div>
  