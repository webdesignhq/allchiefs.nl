<?php
/*  Template Name: About us */
get_header(); ?>

<div id="about-us" class="py-5"  style="background: linear-gradient(-90deg, var(--white-color) 40%, var(--sand-25) 15%, var(--sand-25) 55%);">
    <div class="container-xxl">
        <div class="row py-5">
        <div class="col-lg-5 col-12 d-flex flex-column justify-content-center content-height" >
               <?php the_content(); ?>

            </div>
            <div class="offset-lg-1 col-lg-6 col-12" >
                <img src="https://server1.webdesignhq.cloud.shockmedia.nl/~allchiefs/wp-content/uploads/2021/12/8457-scaled.jpg" alt="" class="h-100" style="width: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</div>

<div id="section-2">
    <div class="container-xxl">
        <div class="row">
            <div class="col-12 d-flex flex-column">
                <h2 class="text-center">Onze kernwaarden</h2>
            </div>
            <div class="col-12 d-flex flex-lg-row flex-column d-flex">
				<?php
					$args = array(
					'post-type' => 'kernwaarde',
						'posts_per_page' => 4,
					);

					$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php global $post; ?>
					
					<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
					<div class="position-relative post-container my-lg-5 my-2">
						<div class="post clickable me-lg-4">
							<img class="post-image" src="<?php echo $img[0]; ?>" style="width: 100%; height: 200px; object-fit: cover;"/>
							<h3 class="post-title mt-lg-4 m-0 mt-2"><?php echo get_the_title(); ?></h3>
							<p class="post-exerpt m-0"><?php echo the_content(); ?></p>
							<a class="d-none" href="<?php echo get_permalink();?>">Lees meer</a>
						</div>
					</div> 
					<?php endwhile; ?>
            </div>
        </div>
    </div>
</div>


<div id="section-3" style="background-color: var(--sand-25); padding-bottom: 110px;">
    <div class="container-xxl">
        <div class="row">
            <div class="col-12 d-flex flex-column">
                <h2>De reis van Allchiefs</h2>
            </div>
                 <div class="slidertrip">
		        <?php  
					$args = array(
						'post_type'      => 'kernwaarde',
						'posts_per_page' => 4,
					);

					$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
					<?php global $post; ?>

                    <div>
						<span><?php echo $post->post_title; ?></span>
						<img class="post-image" src="<?php echo $img[0]; ?>" style="width: 100%; height: 200px; object-fit: cover;"/>
						<h3><?php echo $post->post_title; ?></h3>
						<p><?php echo $post->post_content; ?></p>
                    </div>
                <?php endwhile; ?>
			</div>
        </div>
    </div>
</div>

<div id="section-4" style="padding: 110px 0;">
    <div class="container-xxl">
        <div class="row">
            <h2>Chiefs</h2>
            <div class="col-12 d-flex flex-wrap justify-content-between position-relative">   
		        <?php  
					$args = array(
						'post_type'      => 'chief',
						'posts_per_page' => -1,
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