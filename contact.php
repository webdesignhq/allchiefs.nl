<?php
/* Template Name: Contact */

get_header();
?>
<div id="contact" class="pt-5 pb-5 mb-5">
	<div class="container-xxl">
		<div class="col-12 d-lg-flex d-block flex-row align-items-center ">
			<div class="d-flex flex-column p-lg-5">
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
			<div class="col-md-6 contactimg mt-5 mt-lg-0">
				<img src="https://server1.webdesignhq.cloud.shockmedia.nl/~allchiefs/wp-content/uploads/2021/11/ALLCHIEFS_DSC_9018-1-scaled.jpg"/>
			</div>
		</div>
	</div>
</div>

<div id="locations" class="py-lg-5 py-0">
	<div class="container-xxl">
		<div class="col-12 my-5 d-lg-flex d-block flex-row">
			<div class="p-5 contactblock d-flex flex-column pb-4">
				<img class="contactblock-inner pb-4" style="width:100%;" src="https://server1.webdesignhq.cloud.shockmedia.nl/~allchiefs/wp-content/uploads/2021/11/ALLCHIEFS_DSC_8951-scaled.jpg">
				<h3>Allchiefs HQ</h3>
				<p>Groot Handelsgebouw<br>
				Unit: A3.202<br>
				Stationsplein 45<br>
				3013 AK Rotterdam</p>
				
			</div>
			<div class="p-5 contactblock">
					<img class="contactblock-inner d-flex flex-column pb-4" style="width:100%;" src="https://server1.webdesignhq.cloud.shockmedia.nl/~allchiefs/wp-content/uploads/2021/11/ALLCHIEFS_DSC_8951-scaled.jpg">
				<h3>Allchiefs HUB</h3>
				<p>Groot Handelsgebouw<br>
				Unit: A3.202<br>
				Stationsplein 45<br>
				3013 AK Rotterdam</p>
			</div>
			<div class="p-5 contactblock">
				<img class="contactblock-inner d-flex flex-column  pb-4" style="width:100%;" src="https://server1.webdesignhq.cloud.shockmedia.nl/~allchiefs/wp-content/uploads/2021/11/ALLCHIEFS_DSC_8951-scaled.jpg">
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