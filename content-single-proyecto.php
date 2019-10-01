<?php
/**
 * The template used for displaying projects page
 *
 * @package storefront
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-12 text-center m-top-40"><?php the_title('<h1 class="azul-02 mayus">', '</h1>') ?></div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-12 text-center cliente"><?php the_field('cliente') ?></div>
		</div>
	</div>

	<?php
	/**
	 * Functions hooked in to storefront_page add_action
	 *
	 * @hooked storefront_page_header          - 10
	 * @hooked storefront_page_content         - 20
	 */
	do_action( 'storefront_page' );
	?>

</article><!-- #post-## -->
