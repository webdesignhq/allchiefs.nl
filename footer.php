<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Adinda Media
 * @since 1.0.0
 */

?>
<footer>
	<div id="footer">
		<div class="container">
			<div class="row pt-5 pb-5">
				<div class="col-md-4 small-12 columns">
					<div class="custom_logo">
						<?php 
							if ( function_exists( 'the_custom_logo' ) ) {
								 the_custom_logo();
								}
							?>
					</div>
					<span>consultancy <br>with a heartbeat</span>
				</div>
				<div class="col-md-8 small-12 columns">
					<h3>Waar zijn wij te vinden?</h3>
					<div class="container">
						<div class="row">
						<ul>
							<li>Straatnaam 1A</li>
							<li>0000AA Plaats</li>
						</ul>

						<ul>
							<li>Straatnaam 1A</li>
							<li>0000AA Plaats</li>
							<li>(op afspraak)</li>
						</ul>

						<ul>
							<li><a class="contact" href="#">0523 615323</a></li>
							<li><a href="mailto:info@allchiefs.nl">info@allchiefs.nl</a></li>
						</ul>
						</div>
					</div>
				</div>
			
				<div class="col-md-3">
					
				</div>
			</div>
		</div>
	</div>
	<div id="copyright">
		<div class="row">
			<div class="col-md-12 columns">
				<p class="text-white">Copyright &copy; - <?php echo date('Y') ?></p>
			</div>
		</div>
	</div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
</body>

<?php wp_footer(); ?>

