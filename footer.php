<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">
			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' );
			?>


			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-lg-4">

						<h2>MENÚ</h2>

						<?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
							<nav class="footer-navigation"> <?php
								wp_nav_menu(
									array(
										'theme_location' => 'footer-menu',
										'menu_class'     => 'footer-menu',
										'depth'          => 1,
									)
								);?>
							</nav>
						<?php endif; ?>
					</div>

					<div class="col-xs-12 col-sm-4 col-lg-4"></div>

					<div class="col-xs-12 col-sm-4 col-lg-4">
						<ul class="social">
							<li><a href="https://www.facebook.com/Rocket-Automation-Systems-1627478324238229/" target="_blank"><span class="icon-fb azul-02"></span> Rocket Automation Systems</a></li>
							<li><a href="tel:013926880121" target="_blank"><span class="icon-phone azul-02"></span> 01 (392) 6880 121</a></li>
							<li><a href="https://api.whatsapp.com/send?phone=523921004015" target="_blank"><span class="icon-whatsapp azul-02"></span> (392) 1004 015</a></li>
							<li><span class="icon-pin azul-02"></span> Chaconia #116 Jardines del Rosario, Ocotlán Jalisco. MX</li>
						</ul>
					</div>
				</div>
			</div>


		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
