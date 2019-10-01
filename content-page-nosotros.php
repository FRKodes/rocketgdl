<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package storefront
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<h2>Rocket Construction & Engineering</h2>

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
			<div class="col-xs-12 col-sm-6 about-us-block">
				<div class="inner mision">
					<h2 class="title-about-us">Misión</h2>
					<p>
						Comprometernos con nuestros clientes con una ejecución correcta del programa de seguridad y el cumplimiento de los más altos estándares de calidad enfocados en la normatividad aplicable en materia de seguridad, manteniendo un ambiente laboral sano y comprometido.
					</p>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-6 about-us-block">
				<div class="inner vision">
					<h2 class="title-about-us">Visión</h2>
					<p>Posicionarnos como empresa líder a través de la entrega y dedicación en cada uno de nuestros proyectos, comprometiéndonos a tener operaciones seguras, para proteger la vida y la salud de todos nuestros empleados, sus activos y el medio ambiente, orientándonos hacia la meta de cero accidentes.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<h2>Nuestros Valores</h2>
			</div>
			<div class="col-xs-12 col-sm-12">
				
				<div class="values-carousel">
					
					<div class="item">
						<div class="icon"><span class="icon-pasion"></span></div>
						<h3 class="title">PASIÓN</h3>
						<p>Disfrutamos lo que hacemos y nos ilusionamos con cada proyecto encomendado. </p>
					</div>
					
					<div class="item">
						<div class="icon"><span class="icon-compromiso"></span></div>
						<h3 class="title">COMPROMISO</h3>
						<p>Los objetivos de nuestros clientes los hacemos nuestros dejando todo lo demás para enfocarnos en sus necesidades. </p>
					</div>

					<div class="item">
						<div class="icon"><span class="icon-excelencia"></span></div>
						<h3 class="title">EXCELENCIA</h3>
						<p>Buscamos la perfección en cada trabajo ejecutado. </p>
					</div>

					<div class="item">
						<div class="icon"><span class="icon-eficiencia"></span></div>
						<h3 class="title">EFICIENCIA</h3>
						<p>Realizamos los trabajos utilizando el mínimo recurso y en el menor tiempo posible. </p>
					</div>

					<div class="item">
						<div class="icon"><span class="icon-inovacion"></span></div>
						<h3 class="title">INNOVACIÓN</h3>
						<p>cambiamos, evolucionamos hacemos cosas nuevas adoptando las nuevas tecnologías de la industria mejorando día a día nuestros servicios. </p>
					</div>

					<div class="item">
						<div class="icon"><span class="icon-seguridad"></span></div>
						<h3 class="title">SEGURIDAD</h3>
						<p>Comprometidos con nuestros trabajadores brindándoles capacitaciones y asesorías constantes para mejorar el desarrollo de cada proyecto.</p>
					</div>
					
				</div>
			</div>
			
		</div>
	</div>

</article><!-- #post-## -->
