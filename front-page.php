<?php
/* Template Name: Homepagina */

get_header();
?>
<?php is_front_page(); ?>
<div id="banner" style="position: relative;">
<div class="overlay"></div>
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
			<div class="row bannerblocks-slider">
				<div class="col-md-3 bannerblock">
					<span>People</span>
					<p>Alles wat hier staat is slechts om <br> een indruk te geven</p>
					<a href="<?php echo get_template_directory_uri(); ?>/wat-we-doen/#people" class="read-more">Lees meer</a>
				</div>
				<div class="col-md-3 bannerblock">
					<span>Sustainability</span>
					<p>Alles wat hier staat is slechts om <br> een indruk te geven</p>
					<a href="<?php echo get_template_directory_uri(); ?>/wat-we-doen/#sustainability" class="read-more">Lees meer</a>
				</div>
				<div class="col-md-3 bannerblock">
					<span>Fit for Future</span>
					<p>Alles wat hier staat is slechts om <br> een indruk te geven</p>
					<a href="<?php echo get_template_directory_uri(); ?>/wat-we-doen/#fitforfuture" class="read-more">Lees meer</a>
				</div>
				<div class="col-md-3 bannerblock">
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
				<img src="https://server1.webdesignhq.cloud.shockmedia.nl/~allchiefs/wp-content/uploads/2021/11/ALLCHIEFS_DSC_9271-1-scaled.jpg"/>
			</div>
			<div class="col-lg-5">
				<h2>Sta vandaag klaar voor de dag van morgen</h2>
				<p class="mt-4">Wij zetten jou aan het stuur van je eigen verandering. Door verbinding maken we impact. Onze Chiefs excelleren op people, customers, performance en ecosystems en vooral waar deze samen komen. Wij zijn scherp en blikverruimend. Voor ons telt alleen het optimale resultaat.</p>
			</div>
		</div>
	</div>
</div>

<div id="excellences" class="pt-5 pb-5">
	<div class="container-xxl excellence__head">
		<div class="row">
			<div class="col-md-4">
			<span class="section__title">Excellences</span>
				<h3 class="section__subtitle">Hoe we organisaties helpen</h3>
			</div>
			<div class="col-md-7 offset-1">
				<p class="section-p">
				AllChiefs weet als geen ander dat mensen de sleutel zijn tot succes voor iedere organisatie en uiteindelijk een betere wereld. We brengen mensen samen, dagen uit, ondersteunen en versnellen. Samen bouwen we aan duurzame organisaties die toekomstbestendig zijn. Impact maken met de juiste balans tussen mens, planeet en resultaat.
				</p>
			</div>
		</div>
	</div>

	<?php  
				$args = array(
					'post_type'      => 'page',
					'posts_per_page' => -1,
					'post_parent'	 => 10,
					'orderby' => 'publish_date',
   					 'order' => 'ASC'
				
				);

				$loop = new WP_Query( $args );
				$i;
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php global $post; ?>
				<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
				<?php $icon = get_field('icon_excellence', $post->ID); ?>
				<div id="sec-<?php echo $post->post_name; ?>" style="background-color:<?php echo get_field('bgcolor_excellence'); ?>;">
					<div class="container-xxl">
						<div class="row">
							<div class="col-md-3">
								<div class="col-md-4 box-<?php echo $post->post_name; ?>">
									<img src="<?php echo $icon; ?>" class="excellence__icon"/>
								</div>
							</div>
							<div class="col-md-7 offset-1">
								<h4><?php echo $post->post_title; ?></h4> 
								<p><?php echo get_field('excellence_description', $post->ID); ?></p>
								<a href="<?php echo get_permalink($post->ID); ?>" class="btn btn-primary" style="background-color:<?php echo get_field('color_excellence', $post->ID); ?>;"><?php echo $post->post_title; ?></a>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile;

				wp_reset_query();
			?>

</div>



<div id="slider" class="">
		<div class="row">
			<div class="col-md-12">
				<div class="slider slider-for">
				<?php  
				$args = array(
					'post_type'      => 'case',
					'posts_per_page' => -1,
					'order' => 'ASC'
				);

				$loop = new WP_Query( $args );
				$i;
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php global $post; ?>
				<?php $icon = get_field('case_logo', $post->ID); ?>

					<div><img class="slider-logo" src="<?php echo $icon; ?>"></div>
					
				<?php endwhile;

				wp_reset_query();
			?>
				</div>

				<div class="slider slider-nav">
					<?php  
						$args = array(
							'post_type'      => 'case',
							'posts_per_page' => -1,
							'order' => 'ASC'
						);

						$loop = new WP_Query( $args );
						$i;
						while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php global $post; ?>
						<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

							<div class="d-flex flex-row justify-content-between">
								<div class="col-4">
									<img class="" style="width: 75%; height: 100%; object-fit: cover;" src="<?php echo $img[0]; ?>">
								</div>
								<div class="col-8 d-flex flex-column justify-content-center">
									<h3 class="slidertitle"><span><?php echo $post->post_title; ?></span></h3>
									<p class="slidertext"><?php echo $post->post_content; ?></p>
									<a class="sliderlink" href="<?php echo get_permalink($post->ID); ?>">Lees verder ></a>
								</div>
							</div>

						<?php endwhile;

						wp_reset_query();
					?>

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
				<img src="https://server1.webdesignhq.cloud.shockmedia.nl/~allchiefs/wp-content/uploads/2021/10/ALLCHIEFS_WORKSHOP_DSC_4026.jpg"/>
			</div>
		</div>
	</div>
</div>

<?php $backgroundImg ?>

<div id="insights" class="my-5" style="background: url('<?php echo get_template_directory_uri(); ?>/img/rotterdam-top-view.jpg')">
	<div class="container-fluid">
		<div class="row flex-nowrap">
			<?php  
				$args = array(
					'post_type'      => 'post',
					'posts_per_page' => 4
				);

				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php global $post; ?>
				<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
				<div class="col-md-3 position-relative insight-container">
					<div class="insight clickable" style="height: 600px; background-image: url(''); background-size: cover;">
						<p class="insight-image"><?php echo $backgroundImg[0]; ?></p>
						<p class="insight-title"><?php echo get_the_title(); ?></p>
						<p class="insight-exerpt"><?php echo get_the_content(); ?></p>
						<a class="d-none" href="<?php echo get_permalink();?>"> </a>
					</div>
					<!-- <div class="insight-content">
						 <a href="<?php echo get_permalink();?>"> <?php echo get_the_title(); ?></a>
					</div> -->
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