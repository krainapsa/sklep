<?php
/**
 * @package SimpleGreat
 */
?>

<div class="content-block blog-post clearfix">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
				<div class="post-date-wrapper">
					<div class="post-date"><span class="day"><?php the_time('d'); ?></span><span class="month"><?php the_time('M'); ?></span></div>
					<div class="post-format"></div>
				</div>
				<div class="post-content-wrapper">
					<div class="post-content">
						<h1 class="entry-title post-header-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
						<div class="post-info">
						<span><?php _e("Posted by ",'simplegreat'); the_author(); _e(" at ",'simplegreat'); the_time('H:i'); ?></span>
						<?php 
							$post_classes = get_post_class();

							if($post_classes[4] == 'format-chat') {
								echo ' | <span class="post-on">'.__("Chat on ", 'simplegreat');
								the_time('j F');
								echo '</span>';
							}
						?>
						<?php
								/* translators: used between list items, there is a space after the comma */
								$categories_list = get_the_category_list( __( ', ', 'simplegreat' ) );
								if ( $categories_list ) :
							?>
							
							 | <span><?php printf( __( '%1$s', 'simplegreat' ), $categories_list ); ?></span>
							
							<?php endif; // End if categories ?> | 
							<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
							<span><?php comments_popup_link( __( 'Leave a comment', 'simplegreat' ), __( '1 Comment', 'simplegreat' ), __( '% Comments', 'simplegreat' ) ); ?></span>
							<?php endif; ?>
							
							
							<?php edit_post_link( __( 'Edit', 'simplegreat' ), ' | <span class="edit-link">', '</span>' ); ?>
						</div>
						
							<?php 
							if ( has_post_thumbnail() ): // check if the post has a Post Thumbnail assigned to it.
							?>
							<div class="blog-post-thumb text-center">
							<a href="<?php the_permalink(); ?>" rel="bookmark">
							<?php the_post_thumbnail('blog-thumb'); ?>
							</a>
							</div>
							<?php endif; ?>
						
						
							<div class="entry-content">
								<?php the_content( __( 'Continue reading...', 'simplegreat' ) ); ?>
								<?php
									wp_link_pages( array(
										'before' => '<div class="page-links">' . __( 'Pages:', 'simplegreat' ),
										'after'  => '</div>',
									) );
								?>
							</div><!-- .entry-content -->
							 <?php
								/* translators: used between list items, there is a space after the comma */
								$tags_list = get_the_tag_list( '', __( ', ', 'simplegreat' ) );
								if ( $tags_list ) :
							?>
							
							<span class="tags">
								 <?php printf( __( 'Tags: %1$s', 'simplegreat' ), $tags_list ); ?>
							</span>
							<?php endif; // End if $tags_list ?>

						
						</div>
		
				</div>
			
		
	</article>
</div>