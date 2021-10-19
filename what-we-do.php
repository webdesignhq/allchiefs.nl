<?php
/* Template Name: Wat we doen */

get_header();
?>
<div id="whatwedo" class="pt-5 pb-5 mb-5">
	<div class="container-xxl">
		<div class="row align-items-center justify-content-between">
			<div class="col-md-5">
				<h2>Ontdek jouw<br>nieuwe perspectief</h2>
				<p class="pt-4 pb-4">AllChiefs weet als geen ander dat mensen de sleutel zijn tot succes voor iedere organisatie en uiteindelijk een betere wereld. We brengen mensen samen, dagen uit, ondersteunen en versnellen. Samen bouwen we aan duurzame organisaties die toekomstbestendig zijn. Impact maken met de juiste balans tussen mens, planeet en resultaat.</p>
				<button type="button" class="btn btn-primary people-big">People</button> <button type="button" class="btn btn-primary sustainability-big">Sustainability</button> <button type="button" class="btn btn-primary">Fit for Future</button> <button type="button" class="btn btn-primary">Data</button>
			</div>
			<div class="col-md-6 whatwedoimg">
				<img src="<?php echo get_template_directory_uri(); ?>/img/rotterdam-top-view.jpg"/>
			</div>
		</div>
	</div>
</div>

<div id="people" class="pt-5 pb-5 mt-5">
	<div class="container-xxl">
		<div class="row">
			<div class="col-md-6">
				<h2>People</h2>
			</div>
			<div class="col-md-6">
				<p class="pb-4">AllChiefs weet als geen ander dat mensen de sleutel zijn tot succes voor iedere organisatie en uiteindelijk een betere wereld. We brengen mensen samen, dagen uit, ondersteunen en versnellen. Samen bouwen we aan duurzame organisaties die toekomstbestendig zijn. Impact maken met de juiste balans tussen mens, planeet en resultaat.</p>
				<button type="button" class="btn btn-primary people-bg">Meer over people</button>
			</div>
			<div class="col-md-12"> 
			<ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item" role="presentation">
				<button class="nav-link active" id="solutions-tab" data-bs-toggle="tab" data-bs-target="#solutions" type="button" role="tab" aria-controls="solutions" aria-selected="true">Oplossingen</button>
			  </li>
			  <li class="nav-item" role="presentation">
				<button class="nav-link" id="clientcases-tab" data-bs-toggle="tab" data-bs-target="#clientcases" type="button" role="tab" aria-controls="clientcases" aria-selected="false">Client cases</button>
			  </li>
			  <li class="nav-item" role="presentation">
				<button class="nav-link" id="chiefs-tab" data-bs-toggle="tab" data-bs-target="#chiefs" type="button" role="tab" aria-controls="chiefs" aria-selected="false">Chiefs</button>
			  </li>
			</ul>
			<div class="tab-content pt-5 pb-5 ps-2" id="myTabContent">
			  <div class="tab-pane fade show active" id="solutions" role="tabpanel" aria-labelledby="solutions-tab">
					<?php  
							$args = array(
								'post_type'      => 'solution',
								'posts_per_page' => 4,
								'category' => 3,
							);

							$loop = new WP_Query( $args );

							while ( $loop->have_posts() ) : $loop->the_post(); ?>
								 <div class="col-md-3 content">
									  <?php echo get_the_post_thumbnail();?>
									<?php global $post; ?>
									 <span><a href="<?php echo get_permalink();?>"> <?php echo get_the_title(); ?> </a></span>
									 <p><?php echo get_the_excerpt(); ?></p>
								</div>
					
							<?php endwhile;

							wp_reset_query();
						?>
						</div>
				<div class="tab-pane fade" id="clientcases" role="tabpanel" aria-labelledby="clientcases-tab">Hier komen de clientcases</div>
					<div class="tab-pane fade " id="chiefs" role="tabpanel" aria-labelledby="chiefs-tab">
					<div class="container">
					<div class="row">
						<?php  
							$args = array(
								'post_type'      => 'chief',
								'posts_per_page' => 4,
								'category' => 3,
							);

							$loop = new WP_Query( $args );

							while ( $loop->have_posts() ) : $loop->the_post(); ?>
								 <div class="col-md-3 content">
									  <?php echo get_the_post_thumbnail();?>
									<?php global $post; ?>
										<span><a href="<?php echo get_permalink();?>"> <?php echo get_the_title(); ?> </a></span>
								</div>
					
							<?php endwhile;
							
							wp_reset_query();
						?>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="sustainability" class="pt-5 pb-5 mt-5">
	<div class="container-xxl">
		<div class="row">
			<div class="col-md-6">
				<h2>Sustainability</h2>
			</div>
			<div class="col-md-6">
				<p class="pb-4">AllChiefs weet als geen ander dat mensen de sleutel zijn tot succes voor iedere organisatie en uiteindelijk een betere wereld. We brengen mensen samen, dagen uit, ondersteunen en versnellen. Samen bouwen we aan duurzame organisaties die toekomstbestendig zijn. Impact maken met de juiste balans tussen mens, planeet en resultaat.</p>
				<button type="button" class="btn btn-primary sustainability-bg">Meer over sustainability</button>
			</div>
			<div class="col-md-12"> 
			<ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item" role="presentation">
				<button class="nav-link active" id="solutions-tab" data-bs-toggle="tab" data-bs-target="#solutions" type="button" role="tab" aria-controls="solutions" aria-selected="true">Oplossingen</button>
			  </li>
			  <li class="nav-item" role="presentation">
				<button class="nav-link" id="clientcases-tab" data-bs-toggle="tab" data-bs-target="#clientcases" type="button" role="tab" aria-controls="clientcases" aria-selected="false">Client cases</button>
			  </li>
			  <li class="nav-item" role="presentation">
				<button class="nav-link" id="chiefs-tab" data-bs-toggle="tab" data-bs-target="#chiefs" type="button" role="tab" aria-controls="chiefs" aria-selected="false">Chiefs</button>
			  </li>
			</ul>
			<div class="tab-content pt-5 pb-5 ps-2" id="myTabContent">
			  <div class="tab-pane fade show active" id="solutions" role="tabpanel" aria-labelledby="solutions-tab">
					<?php  
							$args = array(
								'post_type'      => 'solution',
								'posts_per_page' => 4,
								'category' => 3,
							);

							$loop = new WP_Query( $args );

							while ( $loop->have_posts() ) : $loop->the_post(); ?>
								 <div class="col-md-3 chief">
									  <?php echo get_the_post_thumbnail();?>
									<?php global $post; ?>
									 <a href="<?php echo get_permalink();?>"> <?php echo get_the_title(); ?> </a>
									 <p><?php echo get_the_excerpt(); ?></p>
								</div>
					
							<?php endwhile;

							wp_reset_query();
						?>
						</div>
				<div class="tab-pane fade" id="clientcases" role="tabpanel" aria-labelledby="clientcases-tab">Hier komen de clientcases</div>
					<div class="tab-pane fade " id="chiefs" role="tabpanel" aria-labelledby="chiefs-tab">
					<div class="container">
					<div class="row">
						<?php  
							$args = array(
								'post_type'      => 'chief',
								'posts_per_page' => 4,
								'category' => 3,
							);

							$loop = new WP_Query( $args );

							while ( $loop->have_posts() ) : $loop->the_post(); ?>
								 <div class="col-md-3 chief">
									  <?php echo get_the_post_thumbnail();?>
									<?php global $post; ?>
									 <a href="<?php echo get_permalink();?>"> <?php echo get_the_title(); ?> </a>
								</div>
					
							<?php endwhile;
							
							wp_reset_query();
						?>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="fitforfuture" class="pt-5 pb-5 mt-5">
	<div class="container-xxl">
		<div class="row">
			<div class="col-md-6">
				<h2>Fit for Future</h2>
			</div>
			<div class="col-md-6">
				<p class="pb-4">AllChiefs weet als geen ander dat mensen de sleutel zijn tot succes voor iedere organisatie en uiteindelijk een betere wereld. We brengen mensen samen, dagen uit, ondersteunen en versnellen. Samen bouwen we aan duurzame organisaties die toekomstbestendig zijn. Impact maken met de juiste balans tussen mens, planeet en resultaat.</p>
				<button type="button" class="btn btn-primary fitforfuture-bg">Meer over Fit for Future</button>
			</div>
			<div class="col-md-12"> 
			<ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item" role="presentation">
				<button class="nav-link active" id="solutions-tab" data-bs-toggle="tab" data-bs-target="#solutions" type="button" role="tab" aria-controls="solutions" aria-selected="true">Oplossingen</button>
			  </li>
			  <li class="nav-item" role="presentation">
				<button class="nav-link" id="clientcases-tab" data-bs-toggle="tab" data-bs-target="#clientcases" type="button" role="tab" aria-controls="clientcases" aria-selected="false">Client cases</button>
			  </li>
			  <li class="nav-item" role="presentation">
				<button class="nav-link" id="chiefs-tab" data-bs-toggle="tab" data-bs-target="#chiefs" type="button" role="tab" aria-controls="chiefs" aria-selected="false">Chiefs</button>
			  </li>
			</ul>
			<div class="tab-content pt-5 pb-5 ps-2" id="myTabContent">
			  <div class="tab-pane fade show active" id="solutions" role="tabpanel" aria-labelledby="solutions-tab">
					<?php  
							$args = array(
								'post_type'      => 'solution',
								'posts_per_page' => 4,
								'category' => 3,
							);

							$loop = new WP_Query( $args );

							while ( $loop->have_posts() ) : $loop->the_post(); ?>
								 <div class="col-md-3 chief">
									  <?php echo get_the_post_thumbnail();?>
									<?php global $post; ?>
									 <a href="<?php echo get_permalink();?>"> <?php echo get_the_title(); ?> </a>
									 <p><?php echo get_the_excerpt(); ?></p>
								</div>
					
							<?php endwhile;

							wp_reset_query();
						?>
						</div>
				<div class="tab-pane fade" id="clientcases" role="tabpanel" aria-labelledby="clientcases-tab">Hier komen de clientcases</div>
					<div class="tab-pane fade " id="chiefs" role="tabpanel" aria-labelledby="chiefs-tab">
					<div class="container">
					<div class="row">
						<?php  
							$args = array(
								'post_type'      => 'chief',
								'posts_per_page' => 4,
								'category' => 3,
							);

							$loop = new WP_Query( $args );

							while ( $loop->have_posts() ) : $loop->the_post(); ?>
								 <div class="col-md-3 chief">
									  <?php echo get_the_post_thumbnail();?>
									<?php global $post; ?>
									 <a href="<?php echo get_permalink();?>"> <?php echo get_the_title(); ?> </a>
								</div>
					
							<?php endwhile;
							
							wp_reset_query();
						?>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="data" class="pt-5 pb-5 mt-5">
	<div class="container-xxl">
		<div class="row">
			<div class="col-md-6">
				<h2>Data</h2>
			</div>
			<div class="col-md-6">
				<p class="pb-4">AllChiefs weet als geen ander dat mensen de sleutel zijn tot succes voor iedere organisatie en uiteindelijk een betere wereld. We brengen mensen samen, dagen uit, ondersteunen en versnellen. Samen bouwen we aan duurzame organisaties die toekomstbestendig zijn. Impact maken met de juiste balans tussen mens, planeet en resultaat.</p>
				<button type="button" class="btn btn-primary data-bg">Meer over data</button>
			</div>
			<div class="col-md-12"> 
			<ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item" role="presentation">
				<button class="nav-link active" id="solutions-tab" data-bs-toggle="tab" data-bs-target="#solutions" type="button" role="tab" aria-controls="solutions" aria-selected="true">Oplossingen</button>
			  </li>
			  <li class="nav-item" role="presentation">
				<button class="nav-link" id="clientcases-tab" data-bs-toggle="tab" data-bs-target="#clientcases" type="button" role="tab" aria-controls="clientcases" aria-selected="false">Client cases</button>
			  </li>
			  <li class="nav-item" role="presentation">
				<button class="nav-link" id="chiefs-tab" data-bs-toggle="tab" data-bs-target="#chiefs" type="button" role="tab" aria-controls="chiefs" aria-selected="false">Chiefs</button>
			  </li>
			</ul>
			<div class="tab-content pt-5 pb-5 ps-2" id="myTabContent">
			  <div class="tab-pane fade show active" id="solutions" role="tabpanel" aria-labelledby="solutions-tab">
					<?php  
							$args = array(
								'post_type'      => 'solution',
								'posts_per_page' => 4,
								'category' => 3,
							);

							$loop = new WP_Query( $args );

							while ( $loop->have_posts() ) : $loop->the_post(); ?>
								 <div class="col-md-3 chief">
									  <?php echo get_the_post_thumbnail();?>
									<?php global $post; ?>
									 <a href="<?php echo get_permalink();?>"> <?php echo get_the_title(); ?> </a>
									 <p><?php echo get_the_excerpt(); ?></p>
								</div>
					
							<?php endwhile;

							wp_reset_query();
						?>
						</div>
				<div class="tab-pane fade" id="clientcases" role="tabpanel" aria-labelledby="clientcases-tab">Hier komen de clientcases</div>
					<div class="tab-pane fade " id="chiefs" role="tabpanel" aria-labelledby="chiefs-tab">
					<div class="container">
					<div class="row">
						<?php  
							$args = array(
								'post_type'      => 'chief',
								'posts_per_page' => 4,
								'category' => 3,
							);

							$loop = new WP_Query( $args );

							while ( $loop->have_posts() ) : $loop->the_post(); ?>
								 <div class="col-md-3 chief">
									  <?php echo get_the_post_thumbnail();?>
									<?php global $post; ?>
									 <a href="<?php echo get_permalink();?>"> <?php echo get_the_title(); ?> </a>
								</div>
					
							<?php endwhile;
							
							wp_reset_query();
						?>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>





<?php
get_footer();

?>