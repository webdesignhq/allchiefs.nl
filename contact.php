<?php
/* Template Name: Contact */

get_header();
?>
<div id="contact" class="pt-5 pb-5 mb-5">
	<div class="container-xxl">
		<div class="col-12 d-lg-flex d-block flex-row align-items-center ">
			<div class="d-flex flex-column p-5">
				<h2>Verruim je blik</h2>
				<p><?php the_content(); ?></p>
				<?php
						$socials_rows = get_field('social_media', 'option');
							if($socials_rows)
							{
								foreach($socials_rows as $row)
								{
									$image = $row['icon'];
									echo '<a class="me-3 social-link" href="'. $row['link'] .'"><img src="'. $image .'"> '. $row['text'] . '</a>';
								}
							}
					?>
					<a href="#" class="btn btn-primary mt-4">Zoek een speciek persoon</a>
			</div>
			<div class="col-md-6 contactimg">
				<img src="<?php echo get_template_directory_uri(); ?>/img/rotterdam-top-view.jpg"/>
			</div>
		</div>
	</div>
</div>

<div id="locations" class="pt-5 pb-5">
	<div class="container-xxl">
		<div class="col-12 my-5 d-lg-flex d-block flex-row">
			<div class="p-5 contactblock d-flex flex-column pb-4">
				<img class="contactblock-inner pb-4" style="width:100%;" src="http://localhost/allchiefs.nl/wp-content/themes/allchiefs.nl/img/rotterdam-top-view.jpg">
				<h3>Allchiefs HQ</h3>
				<p>Groot Handelsgebouw<br>
				Unit: A3.202<br>
				Stationsplein 45<br>
				3013 AK Rotterdam</p>
				
			</div>
			<div class="p-5 contactblock">
					<img class="contactblock-inner d-flex flex-column pb-4" style="width:100%;" src="http://localhost/allchiefs.nl/wp-content/themes/allchiefs.nl/img/rotterdam-top-view.jpg">
				<h3>Allchiefs HUB</h3>
				<p>Groot Handelsgebouw<br>
				Unit: A3.202<br>
				Stationsplein 45<br>
				3013 AK Rotterdam</p>
			</div>
			<div class="p-5 contactblock">
				<img class="contactblock-inner d-flex flex-column  pb-4" style="width:100%;" src="http://localhost/allchiefs.nl/wp-content/themes/allchiefs.nl/img/rotterdam-top-view.jpg">
				<h3>Allchiefs HUB</h3>
				<p>Groot Handelsgebouw<br>
				Unit: A3.202<br>
				Stationsplein 45<br>
				3013 AK Rotterdam</p>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();

?>