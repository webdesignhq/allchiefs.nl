<?php
/* Template Name: Contact */

get_header();
?>
<div id="contact" class="pt-5 pb-5 mb-5">
	<div class="container-xxl">
		<div class="row align-items-center justify-content-between">
			<div class="col-md-5">
				<h2>Verruim je blik</h2>
				<p>Benieuwd naar AllChiefs of wat wij voor jou kunnen betekenen? Mail ons. Of nog beter: kom op de koffie op ons hoofdkantoor in Rotterdam of onze hub in Amsterdam.</p>
			</div>
			<div class="col-md-6 contactimg">
				<img src="<?php echo get_template_directory_uri(); ?>/img/rotterdam-top-view.jpg"/>
			</div>
		</div>
	</div>
</div>

<div id="locations" class="pt-5 pb-5">
	<div class="container-xxl">
		<div class="row align-items-center">
			<div class="col-md-4">
				<img style="width:100%;" src="http://localhost/allchiefs.nl/wp-content/themes/allchiefs.nl/img/rotterdam-top-view.jpg">
				<h3>Allchiefs HQ</h3>
				
			</div>
			<div class="col-md-4">
					<img style="width:100%;" src="http://localhost/allchiefs.nl/wp-content/themes/allchiefs.nl/img/rotterdam-top-view.jpg">
				<h3>Allchiefs HUB</h3>
			</div>
			<div class="col-md-4">
				<img style="width:100%;" src="http://localhost/allchiefs.nl/wp-content/themes/allchiefs.nl/img/rotterdam-top-view.jpg">
				<h3>Allchiefs HUB</h3>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();

?>