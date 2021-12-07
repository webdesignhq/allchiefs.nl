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
							 <div class="pb-3"><?php echo get_the_post_thumbnail();?></div>
							<?php global $post; ?>
							 <span><?php echo get_the_title(); ?></span>
							 <p><?php echo get_the_excerpt(); ?></p>
							 <a href="<?php echo get_permalink();?>"> Lees meer > </a>
						</div>
			
					<?php endwhile;

					wp_reset_query();
				?>
		</div>
	</div>
</div>

<div id="excellence-cases" class="pt-5 pb-5 mt-5">
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
							  <div class="pb-3"><?php echo get_the_post_thumbnail();?></div>
							<?php global $post; ?>
							  <span><?php echo get_the_title(); ?></span>
							 <p><?php echo get_the_excerpt(); ?></p>
							 <a href="<?php echo get_permalink();?>"> Lees meer > </a>
						</div>
			
					<?php endwhile;

					wp_reset_query();
				?>
		</div>
	</div>
</div>

<div id="section-4" style="padding: 110px 0; background: linear-gradient(-90deg, var(--white-color) 40%, <?php the_field('bgcolor_excellence'); ?>  15%, <?php the_field('bgcolor_excellence'); ?> 55%);" >
    <div class="container-xxl">
        <div class="row">
            <h2>Chiefs</h2>
            <div class="col-12 d-flex flex-wrap justify-content-between position-relative">   
		        <?php  
					$args = array(
						'post_type'      => 'chief',
						'cat' => get_query_var('cat'),
						'posts_per_page' => 15,
					);

					$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php global $post; ?>
					<?php $backgroundImg = get_field('chief_img'); ?>

                    <div class="chief" style="background-image: url('<?php echo $backgroundImg; ?>'); background-size: cover;">
                        <div class="chief__information p-5">
                            <h3><?php echo $post->post_title; ?></h3>
                            <p><?php echo $post->post_excerpt; ?></p>
							<a href="mailto:<?php echo get_field('email'); ?>"> <?php echo get_field('email'); ?> </a>
 							<a href="tel:<?php echo get_field('phonenumber'); ?>"> <?php  echo get_field('phonenumber'); ?> </a>
							<?php
								$socials_rows = get_field('social_media');
									if($socials_rows)
									{
										foreach($socials_rows as $row)
										{
											$image = $row['icon_img'];
											echo '<a class="me-3 social-link" href="'. $row['icon-link'] .'"><img src="'. $image .'"></a>';
										}
									}
							?>
							<?php $categories = get_the_category();
									$separator = ' ';
									$output = '';
									if ( ! empty( $categories ) ) {
										foreach( $categories as $category ) {
											if($category->category_parent > 0) {
												if ($category->slug === 'chiefs'){
														$output .= '<a class="btn btn-primary" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
										
												}
										}
									}
									echo trim( $output, $separator );
							}?>
							  <p><a href="<?php echo $post->guid; ?>">Lees meer</a></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
            </div>
        </div>
    </div> 
</div>






<?php
get_footer();

?>