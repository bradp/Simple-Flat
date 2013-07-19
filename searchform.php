<?php
/**
 * The template for displaying search forms in simpleflat
 *
 * @package simpleflat
 */
?>
<?php do_action('simpleflat_before_search_form'); ?>
	<form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s" class="screen-reader-text"><?php _ex( 'Search', 'assistive text', 'simpleflat' ); ?></label>
		<input type="search" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'simpleflat' ); ?>" />
		<input type="submit" class="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'simpleflat' ); ?>" />
	</form>
<?php do_action('simpleflat_after_search_form'); ?>