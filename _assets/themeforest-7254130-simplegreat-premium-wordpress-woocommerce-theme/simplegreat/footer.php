<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package SimpleGreat
 */
?>
<?php 
global $theme_options;

?>
<?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
<div class="footer-sidebar sidebar container">
  <ul id="footer-sidebar">
    <?php dynamic_sidebar( 'footer-sidebar' ); ?>
  </ul>
</div>
<?php endif; ?>
<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
<div class="footer-sidebar-2 sidebar container footer-container">
  <ul id="footer-sidebar-2">
    <?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
  </ul>
</div>
<?php endif; ?>
<?php if(isset($theme_options['footer_show_twitter']) && $theme_options['footer_show_twitter']): ?>

<div class="twitter-posts">
        <script type="text/javascript">
        (function($){
        $(document).ready(function() {
          
          // Show twitter after 1 second to not freeze the other page scripts
          setTimeout(initTwitter, 1000);

          function initTwitter()
          {
            $('#twitter_update_list').tweet({
             modpath: '<?php echo get_template_directory_uri();?>/js/twitter/index.php',
             count: <?php echo $theme_options['footer_twitter_tweets_count']; ?>,
             username: "<?php echo $theme_options['footer_twitter_username']; ?>",
             template: "<i class='fa fa-twitter'></i> {text}<span class='created'>{time}</span>",
             loading_text: '<div class="twitter-icon"><i class="fa fa-twitter"></i> <?php _e("Loading...", "simplegreat"); ?></div>',

            });
            
            $('.twitter-posts .bxslider ul').bxSlider({
              mode: 'vertical',
                    auto: true,
              controls: false,
                    pager: false
              });
          }
          
        });
        })(jQuery);
        </script>
        <ul id="twitter_update_list" class="bxslider"></ul>
</div>
<?php endif; ?>
<div class="footer-social">
   <span>
<?php

$social_services_arr = Array("facebook", "vk","twitter", "google-plus", "linkedin", "dribbble", "instagram", "tumblr", "pinterest", "vimeo-square", "youtube", "skype");

foreach( $social_services_arr as $ss_data ){
  if(isset($theme_options[$ss_data]) && (trim($theme_options[$ss_data])) <> '') {
    $social_service_url = $theme_options[$ss_data];
    $social_service = $ss_data;
    echo '<a href="'.$social_service_url.'" target="_blank"><i class="fa fa-'.$social_service.'"></i></a>';
  }
}

?>
  </span>
</div>


<footer>
<div class="container">
<div class="row">
    <div class="col-md-6">
    <p class="copyright"><?php echo $theme_options['footer_copyright_editor']; ?></p>
    </div>
    <div class="col-md-6">
  <div class="payment-icons">
  <?php
if(isset($theme_options['footer_payment_icons'])) {
  foreach( $theme_options['footer_payment_icons'] as $footer_payment_icon ){

    echo '<img src="'.get_stylesheet_directory_uri().'/img/payment/'.$footer_payment_icon.'.png" alt="'.$footer_payment_icon.'"/>';
  }
}

?>
  </div>
  </div>
</div>
</div>
<a id="top-link" href="#top"></a>
</footer>
<?php wp_footer(); ?>

</body>
</html>