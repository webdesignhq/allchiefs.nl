<?php
/* Template Name: Excellence */

get_header();
?>

<div style="position: absolute; right:0; margin-top: -200px;"><img src="<?php echo get_field('icon_excellence');?>"></div>
<div id="intro-excellence" class="pt-5 pb-5 mb-5" style="background: linear-gradient(90deg, var(--white-color) 40%, <?php the_field('bgcolor_excellence'); ?>  15%, <?php the_field('bgcolor_excellence'); ?> 55%);">
	<div class="container-xxl">
		<div class="row align-items-center justify-content-between">
		<div class="col-md-6 whatwedoimg">
				<img src="https://server1.webdesignhq.cloud.shockmedia.nl/~allchiefs/wp-content/uploads/2021/11/ALLCHIEFS_DSC_9377-scaled.jpg"/>
			</div>
			<div class="col-md-5">
				<h2><?php echo get_the_title(); ?></h2>
				<p><?php echo get_field('excellence_description') ?></p>
				<a href="#excellence-solutions" class="btn btn-primary people-big">Onze oplossingen</a> <a href="#client-cases" class="btn btn-primary sustainability-big">Client cases</a> <a href="#chiefs" class="btn btn-primary">Chiefs</a>
			</div>
		
		</div>
	</div>
</div>

<div id="excellence-solutions" class="mt-5" style="background-color: <?php the_field('bgcolor_excellence'); ?>;">
	<div class="container-xxl">
		<div class="row">
			<div class="col-md-6">
				<h2>Onze oplossingen</h2>
			</div>
			<div class="col-md-6">
				<p class="pb-4">AllChiefs weet als geen ander dat mensen de sleutel zijn tot succes voor iedere organisatie en uiteindelijk een betere wereld. We brengen mensen samen, dagen uit, ondersteunen en versnellen. Samen bouwen we aan duurzame organisaties die toekomstbestendig zijn. Impact maken met de juiste balans tussen mens, planeet en resultaat.</p>	
			</div>
				<?php  
					$args = array(
						'post_type'      => 'solution',
						'posts_per_page' => 4,
						'category' => 'people',
					);

					$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						 <div class="col-md-3 content">
							  <?php echo get_the_post_thumbnail();?>
							<?php global $post; ?>
							 <span><a style="color: <?php the_field('color_excellence'); ?>;" href="<?php echo get_permalink();?>"> <?php echo get_the_title(); ?> </a></span>
							 <p><?php echo get_the_excerpt(); ?></p>
						</div>
			
					<?php endwhile;

					wp_reset_query();
				?>
		</div>
	</div>
</div>

<div id="people" class="pt-5 pb-5 mt-5">
	<div class="container-xxl">
		<div class="row">
			<div class="col-md-6">
				<h2>Client cases</h2>
			</div>
			<div class="col-md-6">
				<p class="pb-4">AllChiefs weet als geen ander dat mensen de sleutel zijn tot succes voor iedere organisatie en uiteindelijk een betere wereld. We brengen mensen samen, dagen uit, ondersteunen en versnellen. Samen bouwen we aan duurzame organisaties die toekomstbestendig zijn. Impact maken met de juiste balans tussen mens, planeet en resultaat.</p>
			</div>
				<?php  
					$args = array(
						'post_type'      => 'case',
						'posts_per_page' => 4,
						'category' => 'people',
					);

					$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						 <div class="col-md-3 content">
							  <?php echo get_the_post_thumbnail();?>
							<?php global $post; ?>
							 <span><a style="color:<?php the_field('color_excellence'); ?>;" href="<?php echo get_permalink();?>"> <?php echo get_the_title(); ?> </a></span>
							 <p><?php echo get_the_excerpt(); ?></p>
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