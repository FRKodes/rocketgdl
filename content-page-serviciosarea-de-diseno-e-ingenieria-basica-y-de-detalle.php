<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package storefront
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 text-center icon-title-container">
				<span class="icon-diseno-ing azul-02 inner-icon-page"></span>
				<?php the_title('<h1 class="azul-02 mayus">','</h1>') ?>
			</div>
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
	

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<?php include('content-carousel.php'); ?>
			</div>
		</div>

	</div>

</article><!-- #post-## -->

