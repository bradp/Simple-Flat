<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package simpleflat
 */

get_header(); ?>

	<div id="primary">
		<div id="content" role="main">

			<article id="post-0" class="post not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'simpleflat' ); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					
					<?php do_action('simpleflat_before_404'); ?>
					
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'simpleflat' ); ?></p>

					<?php get_search_form(); ?>

				<?php do_action('simpleflat_after_404'); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 .post .not-found -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>