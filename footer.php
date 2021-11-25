<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage HQonline
 * @since 1.0.0
 */

?>
<footer>
	<div id="footer">
		<div class="container-xxl">
			<div class="row py-lg-5">
				<div class="col-md-4 small-12 columns">
					<div class="custom_logo">
						<?php 
							if ( function_exists( 'the_custom_logo' ) ) {
								 the_custom_logo();
								}
							?>
					</div>
					<span class="slogan">consultancy <br>with a heartbeat</span>
				</div>
				<div class="col-md-8 small-12 columns mt-5">
					<h3 class="pb-3">Waar zijn we te vinden?</h3>
					<div class="container p-0">
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<ul>
									<li><strong>AllChiefs HQ</strong></li>
								</ul>
								<ul>
									<li>Stationsplein 45</li>
									<li>Unit A3.202</li>
									<li>3013 AK Rotterdam</li>
								</ul>

								<ul>
									<li><a class="contact" href="#">+31(0)10 310 08</a></li>
									<li><a href="mailto:info@allchiefs.nl">info@allchiefs.nl</a></li>
								</ul>
							</div>
							<div class="col-lg-6 col-md-12">
							<ul>
								<li><strong>AllChiefs HUB</strong></li>
							</ul>
							<ul>
								<li>Stationsplein 45</li>
								<li>Unit A3.202</li>
								<li>3013 AK Rotterdam</li>
							</ul>

							<ul>
								<li><a class="contact" href="#">+31(0)10 310 08</a></li>
								<li><a href="mailto:info@allchiefs.nl">info@allchiefs.nl</a></li>
							</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-xxl">
			<div class="row">
				<div class="col-12 copyright">
					<p>Copyright &copy; - <?php echo date('Y') ?> - Algemene voorwaarden - Privacyverklaring - Disclaimer</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/ScrollTrigger.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/ScrollMagic.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js" integrity="sha512-eP6ippJojIKXKO8EPLtsUMS+/sAGHGo1UN/38swqZa1ypfcD4I0V/ac5G3VzaHfDaklFmQLEs51lhkkVaqg60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
</body>

<?php wp_footer(); ?>

