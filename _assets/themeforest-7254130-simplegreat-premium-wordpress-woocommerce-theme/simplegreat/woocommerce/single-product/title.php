<?php
/**
 * Single Product title
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

global $theme_options;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>
<div class="page-item-title">
	<h1 class="page-title"><?php the_title(); ?></h1>
</div>
<?php /*<h1 itemprop="name" class="product_title entry-title"><?php the_title(); ?></h1>*/ ?>
<?php if(isset($theme_options['shop_social_buttons_enable']) && $theme_options['shop_social_buttons_enable']): ?>
<div class="post-social">
<a title="<?php _e("Share this", 'simplegreat'); ?>" href="#" class="facebook-share"> <i class="fa fa-facebook"></i> <span class="count">0</span></a>
<a title="<?php _e("Tweet this", 'simplegreat'); ?>" href="#" class="twitter-share"> <i class="fa fa-twitter"></i> <span class="count">0</span></a>
<a title="<?php _e("Pin this", 'simplegreat'); ?>" href="#" class="pinterest-share"> <i class="fa fa-pinterest"></i> <span class="count">0</span></a>
</div>
<?php endif; ?>