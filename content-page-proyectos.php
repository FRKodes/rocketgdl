<?php
/**
 * The template used for displaying projects page
 *
 * @package storefront
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<h2>Proyectos Exitosos</h2>

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

			<?php $args = array('post_type' => 'proyecto', 'post_status' => 'publish', 'posts_per_page' => 12 );

			$my_query = new WP_Query( $args );

			while ( $my_query->have_posts() ) : $my_query->the_post();?>

				<div class="col-xs-12 col-sm-6 col-md-4 item proyecto-item">

					<div class="foto-proyecto" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
						<a href="<?php the_permalink() ?>"><?php the_title( '<h3>', '</h3>');?></a>
					</div>

					<div class="info">
						<p class="cliente mayus"><?php the_field('cliente'); ?></p>
					</div>

				</div><?php 
			endwhile;
			wp_reset_query(); ?>

		</div>

	</div>

</article><!-- #post-## -->
