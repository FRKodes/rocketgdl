<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/**
			 * Functions hooked in to homepage action
			 *
			 * @hooked storefront_homepage_content      - 10
			 * @hooked storefront_product_categories    - 20
			 * @hooked storefront_recent_products       - 30
			 * @hooked storefront_featured_products     - 40
			 * @hooked storefront_popular_products      - 50
			 * @hooked storefront_on_sale_products      - 60
			 * @hooked storefront_best_selling_products - 70
			 */
			do_action( 'homepage' );
			?>

			<div class="container">
				
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<?php include('content-carousel.php'); ?>
					</div>
				</div>

				
				<div class="row all-width inner-banner home">
					<div class="inner-text">
						Estamos comprometidos con nuestros clientes con una ejecución correcta del programa de seguridad y el cumplimiento de los más altos estándares de calidad.
					</div>	
				</div>
				

				<div class="row">
					<div class="col-xs-12 col-sm-12">
						<h2>SOMOS UNA EMPRESA CERTIFICADA</h2>
					</div>

					<div class="col-xs-12 col-md-6 logo-iso-container">
						<span class="icon-homme-logo-iso"></span>
					</div>

					<div class="col-xs-12 col-md-6 info-iso-container">
						<p>Contamos con la certificación ISO 9001 que avala la calidad de nuestros procesos y servicios, lo cual nos permite desempeñarnos con calidad de clase mundial.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12">
						<h2>MARCAS QUE CONFÍAN EN NOSOTROS</h2>
					</div>

					<div class="col-xs-12 col-sm-12">
						<div class="marcas-carousel">
							<div class="item">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clientes-celanese-mexicana.jpg" alt="celanese mexicana">
							</div>
							<div class="item">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clientes-diageo.jpg" alt="diageo">
							</div>
							<div class="item">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clientes-don-julio.jpg" alt="don julio">
							</div>
							<div class="item">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clientes-el-nogal.jpg" alt="el nogal">
							</div>
							<div class="item">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clientes-expertos-en-ventilacion.jpg" alt="expertos en ventilacion">
							</div>
							<div class="item">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clientes-mexichem.jpg" alt="mexichem">
							</div>
							<div class="item">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clientes-proan.jpg" alt="proan">
							</div>
							<div class="item">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clientes-toray-group.jpg" alt="toray group">
							</div>
						</div>
					</div>
				</div>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
