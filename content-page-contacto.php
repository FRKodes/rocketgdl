<?php
/**
 * The template used for displaying contact page
 *
 * @package storefront
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<h2>Contáctanos</h2>

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

			<div class="col-xs-12 col-sm-12 text-center item-person">
				<h2 class="azul-02">Ing. Oscar Sahagún Jiménez </h2>
				<p class="charge">Gerente General </p>
				<p class="email"><a href="mailto:oscar.sahagun@rocketgdl.com">oscar.sahagun@rocketgdl.com</a></p>
			</div>

			<div class="col-xs-12 col-sm-12 text-center item-person">
				<h2 class="azul-02">Ing. Omar Fabián Sahagún Jiménez </h2>
				<p class="charge">Gerente de Ventas</p>
				<p class="email"><a href="mailto:omar.sahagun@rocketgdl.com">omar.sahagun@rocketgdl.com</a></p>
			</div>

			<div class="col-xs-12 col-sm-12 text-center item-person">
				<h2 class="azul-02">Lic. MKT Paulina Trujillo Flores</h2>
				<p class="charge">Administrativo</p>
				<p class="email"><a href="mailto:paulina.Trujillo@rocketgdl.com">paulina.Trujillo@rocketgdl.com</a></p>
			</div>

		</div>

		<div class="row">
			
			<div class="col-xs-12 col-md-10 ml-auto mr-auto form-container">
				<div class="left"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-header-rocket-gdl.svg" alt=""></div>
				<div class="right">
					<h2 class="gris-01">MÁNDANOS UN MENSAJE</h2>
					<form action="/sendmail" id="contactForm" method="post">
						<div class="form-group">
							<input type="text" name="nombre" class="form-control" placeholder="Nombre*" data-validate="required">
						</div>
						<div class="form-group">
							<input type="text" name="telefono" class="form-control" placeholder="Teléfono / Celular*" data-validate="required">
						</div>
						<div class="form-group">
							<input type="text" name="email" class="form-control" placeholder="Email*" data-validate="required|email">
						</div>
						<div class="form-group">
							<input type="text" name="comentario" class="form-control" placeholder="Comentario">
						</div>
						<div class="form-group text-right">
							<input type="submit" class="btn btn-primary send-btn" value="ENVIAR MENSAJE">
						</div>
						<div class="sent_mail_alert">¡Gracias! <br><br>Tu correo se ha enviado con éxito, nos pondremos en contacto contigo a la brevedad.</div>
					</form>
				</div>
				
				
			</div>

		</div>

	</div>

</article><!-- #post-## -->
