<?php
/**
 * The template for displaying search forms.
 *
 * @package Anther
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'anther' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'anther' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'anther' ); ?>" />
	</label>
	<button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo esc_html_x( 'Search', 'submit button', 'anther' ); ?></span></button>
</form>
