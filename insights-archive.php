<?php
/* Template Name: Insight Archive */

get_header();
?>
<?php the_content();?>
<div id="cases" class="pt-5" style="background: linear-gradient(
		270deg, var(--white-color) 30%, var(--sand-25) 20%, var(--sand-25) 50%);">
	<div id="filters">
		<div class="container-xxl">
			<div class="row">
				<div class="col-lg-4 col-12">
					<span>Per expertise</span>
					<?php
						$args = array(
						'orderby'                  => 'name',
						'order'                    => 'ASC',
						'hide_empty'               => 1,
						'hierarchical'             => 1,
						'pad_counts'               => false );
						$categories = get_categories($args);
					?>
				<ul class="cat-list">
						<?php 
						foreach ($categories as $category) {
						?>
							<li>
								<a class="cat-list_item" href="#!" data-slug="<?php echo $category->slug ?>" data-type="">
							 	<?php echo $category->name ?>
								</a>
						 	</li>
							<?php
						}
						?>
				</ul>	
					
				</div>
				<div class="col-5"> <span>Type</span> 
					<ul class="cat-list">
					
					</ul>	
				</div>
				<div class="col-3"> <span>Zoekding</span> </div>
			</div>	
		</div>
	</div>

	<div id="cases">
		<div class="container-xxl">
			<div class="row flex-wrap justify-content-between" id="response">
			<?php if (have_posts()) : ?>     
		<?php  
					$args = array(
						'posts_per_page' => 8,
					);

					$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php global $post; ?>
					<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
					<div class="position-relative post-container my-lg-5 my-2">
						<div class="post clickable me-lg-4">
							<img class="post-image" src="<?php echo $backgroundImg[0]; ?>" style="width: 100%; height: 200px; object-fit: cover;"></img>
							<h3 class="post-title mt-lg-4 m-0 mt-2"><?php echo get_the_title(); ?></h3>
							<p class="post-exerpt m-0"><?php echo the_content(); ?></p>
							<a class="d-none" href="<?php echo get_permalink();?>"> </a>
						</div>
					</div> 
					<?php endwhile; ?>

					<?php else: ?>
						<p>Sorry, er zijn geen producten gevonden<p>
					<?php endif 

					// wp_reset_query();
				?>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();

?>