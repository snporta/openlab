<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage Pilcrow
 * @since Pilcrow 1.0
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="nav-above" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'pilcrow' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'pilcrow' ) . '</span>' ); ?></div>
				</div><!-- #nav-above -->

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-meta">
						<?php the_date(); ?> &middot; <?php the_time(); ?>
						<?php edit_post_link( __( 'Edit', 'pilcrow' ), '<span class="edit-link"> | ', '</span>' ); ?>
					</div><!-- .entry-meta -->

					<?php if ( comments_open() ) : ?>
					<div class="jump"><a href="<?php the_permalink(); ?>#comments"><?php _e( '<span class="meta-nav">&darr; </span>Jump to Comments', 'pilcrow' ); ?></a></div>
					<?php endif; ?>

					<h1 class="entry-title"><?php the_title(); ?></h1>

					<div class="entry entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'pilcrow' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->

					<div class="entry-links">
						<p class="comment-number"><?php comments_popup_link( __( 'Leave a Comment' ), __( '1 Comment' ), __( '% Comments' ) ); ?></p>
						<p class="entry-categories tagged"><?php printf( __( 'Filed under %s' ), get_the_category_list( ', ' ) ); ?></p>
						<p class="entry-tags tagged"><?php the_tags( __( 'Tagged as' ).' ', ', ', '<br />' ); ?></p>
					</div><!-- .entry-links -->
				</div><!-- #post-## -->

				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'pilcrow' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'pilcrow' ) . '</span>' ); ?></div>
				</div><!-- #nav-below -->

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>