<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package SimpleGreat
 */

get_header(); 

global $theme_options;

$search_sidebarposition = $theme_options['search_sidebar_position'];

if(is_active_sidebar( 'main-sidebar' ) && ($search_sidebarposition <> 'disable') ) {
	$span_class = 'col-md-9';
}
else {
	$span_class = 'col-md-12';
}

?>
<div class="content-block">
<div class="container">
	<div class="row">
<?php if ( is_active_sidebar( 'main-sidebar' ) && ( $search_sidebarposition == 'left')) : ?>
		<div class="col-md-3 main-sidebar sidebar">
		<ul id="main-sidebar">
		  <?php dynamic_sidebar( 'main-sidebar' ); ?>
		</ul>
		</div>
		<?php endif; ?>
		<div class="<?php echo $span_class; ?>">
		<div class="page-item-title">
			<h1><?php printf( __( 'Search Results for: %s', 'simplegreat' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</div>
<?php /* Start the Loop */ ?>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'search' ); ?>

					<?php endwhile; ?>

					<?php simplegreat_content_nav( 'nav-below' ); ?>

				<?php else : ?>

					<?php get_template_part( 'no-results', 'search' ); ?>

				<?php endif; ?>
</div>
		<?php if ( is_active_sidebar( 'main-sidebar' ) && ( $search_sidebarposition == 'right')) : ?>
		<div class="col-md-3 main-sidebar sidebar">
		<ul id="main-sidebar">
		  <?php dynamic_sidebar( 'main-sidebar' ); ?>
		</ul>
		</div>
		<?php endif; ?>
	</div>
</div>
</div>
<?php get_footer(); ?>