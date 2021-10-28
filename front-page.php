<?php
/* Template Name: Homepagina */

get_header();
?>
<?php is_front_page(); ?>
<div id="banner">
	<div class="container-xxl">
		<div class="row">
			<div class="col-md-8">
				<div class="bannercontent text-left p-4">
					<h1>Consultancy <br> with a heartbeat</h1>
					<span>Alles wat hier staat is slechts om een indruk te geven van het grafische effect van tekst op deze plek. </span>
				</div>
			</div>
		</div>
	</div>
	<div class="bannerblocks">
		<div class="container-xxl">
			<div class="row">
				<div class="col-md-3">
					<span>People</span>
					<p>Alles wat hier staat is slechts om <br> een indruk te geven</p>
					<a href="<?php echo get_template_directory_uri(); ?>/wat-we-doen/#people" class="read-more">Lees meer</a>
				</div>
				<div class="col-md-3">
					<span>Sustainability</span>
					<p>Alles wat hier staat is slechts om <br> een indruk te geven</p>
					<a href="<?php echo get_template_directory_uri(); ?>/wat-we-doen/#sustainability" class="read-more">Lees meer</a>
				</div>
				<div class="col-md-3">
					<span>Fit for Future</span>
					<p>Alles wat hier staat is slechts om <br> een indruk te geven</p>
					<a href="<?php echo get_template_directory_uri(); ?>/wat-we-doen/#fitforfuture" class="read-more">Lees meer</a>
				</div>
				<div class="col-md-3">
					<span>Data</span>
					<p>Alles wat hier staat is slechts om <br> een indruk te geven</p>
					<a href="<?php echo get_template_directory_uri(); ?>/wat-we-doen/#data" class="read-more">Lees meer</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="about" class="mb-5">
	<div class="container-xxl">
		<div class="row align-items-center justify-content-between">
			<div class="col-lg-6 col-lg-offset-1 aboutimg">
				<img src="<?php echo get_template_directory_uri(); ?>/img/rotterdam-top-view.jpg"/>
			</div>
			<div class="col-lg-5">
				<h2>Sta vandaag klaar voor de dag van morgen</h2>
				<p>Wij zetten jou aan het stuur van je eigen verandering. Door verbinding maken we impact. Onze Chiefs excelleren op people, customers, performance en ecosystems en vooral waar deze samen komen. Wij zijn scherp en blikverruimend. Voor ons telt alleen het optimale resultaat.</p>
			</div>
		</div>
	</div>
</div>

<div id="excellences" class="pt-5 pb-5">
	<div class="container-xxl">
		<div class="row">
			<div class="col-md-12">
			<span>Excellences</span>
				<h3>Hoe we organisaties helpen</h3>
			</div>
		</div>
	</div>
</div>

<div id="slider" class="pt-5 pb-5">
	<div class="container-xxl">
		<div class="row">
			<div class="col-md-12">
				<div class="slider slider-for">
				<div><img class="slider-logo" src="https://allchiefs.nl/wp-content/uploads/2019/04/Lease-plan-logo-website.png"></div>
				<div><img class="slider-logo" src="https://allchiefs.nl/wp-content/uploads/2019/04/Lease-plan-logo-website.png"></div>
				<div><img class="slider-logo" src="https://allchiefs.nl/wp-content/uploads/2019/04/Lease-plan-logo-website.png"></div>
				<div><img class="slider-logo" src="https://allchiefs.nl/wp-content/uploads/2019/04/Lease-plan-logo-website.png"></div>
			</div>
			<div class="slider slider-nav">
				<div><h3><span>Patiëntenspreiding op basis van data</span></h3><p>AllChiefs weet als geen ander dat mensen de sleutel zijn tot succes voor iedere organisatie en uiteindelijk een betere wereld. We brengen mensen samen, dagen uit, ondersteunen en versnellen.</p></div>
				<div><h3><span>Patiëntenspreiding op basis van data</span></h3><p>AllChiefs weet als geen ander dat mensen de sleutel zijn tot succes voor iedere organisatie en uiteindelijk een betere wereld. We brengen mensen samen, dagen uit, ondersteunen en versnellen.</p></div>
				<div><h3><span>Patiëntenspreiding op basis van data</span></h3><p>AllChiefs weet als geen ander dat mensen de sleutel zijn tot succes voor iedere organisatie en uiteindelijk een betere wereld. We brengen mensen samen, dagen uit, ondersteunen en versnellen.</p></div>
				<div><h3><span>Patiëntenspreiding op basis van data</span></h3><p>AllChiefs weet als geen ander dat mensen de sleutel zijn tot succes voor iedere organisatie en uiteindelijk een betere wereld. We brengen mensen samen, dagen uit, ondersteunen en versnellen.</p></div>
			</div>
			</div>
		</div>
	</div>
</div>
<div id="whoweare" class="pt-5 pb-5">
	<div class="container-xxl">
		<div class="row align-items-center justify-content-between">
			<div class="col-lg-5">
				<h2>Wie we zijn</h2>
				<p>AllChiefs weet als geen ander dat mensen de sleutel zijn tot succes voor iedere organisatie en uiteindelijk een betere wereld. We brengen mensen samen, dagen uit, ondersteunen en versnellen. Samen bouwen we aan duurzame organisaties die toekomstbestendig zijn. Impact maken met de juiste balans tussen mens, planeet en resultaat.</p>
			</div>
			<div class="col-lg-6 whoweareimg">
				<img src="<?php echo get_template_directory_uri(); ?>/img/rotterdam-top-view.jpg"/>
			</div>
		</div>
	</div>
</div>
<div id="insights" class="pt-5 pb-5">
	<div class="container-fluid">
		<div class="row">
			<?php  
				$args = array(
					'post_type'      => 'post',
					'posts_per_page' => 4
				);

				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
					 <div class="col-md-3" style="height: 600px; background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover;">
						<?php global $post; ?>
						 <a href="<?php echo get_permalink();?>"> <?php echo get_the_title(); ?> 		</a>
					</div>
		
				<?php endwhile;

				wp_reset_query();
			?>
		</div>
	</div>
</div>
<?php
get_footer();

?>