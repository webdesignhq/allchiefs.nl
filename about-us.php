<?php
/* 
Template Name: About us
*/

get_header();
?>
<div id="about-us" class="py-lg-5 py-0"  style="background: linear-gradient(
		90deg, var(--white-color) 45%, var(--sand-25) 20%, var(--sand-25) 50%);">
    <div class="container-xxl">

        <div class="row py-5">
        <div class="col-5 offset-1 d-flex flex-column justify-content-center content-height" >
                <h2>Unieke kijk op consultancy</h2>
                <p class="mt-4 col-10">AllChiefs weet als geen ander dat mensen de sleutel zijn tot succes voor iedere organisatie en uiteindelijk een betere wereld. We brengen mensen samen, dagen uit, ondersteunen en versnellen. Samen bouwen we aan duurzame organisaties die toekomstbestendig zijn. Impact maken met de juiste balans tussen mens, planeet en resultaat.</p>

            </div>
            <div class="col-6" >
                <img src="https://server1.webdesignhq.cloud.shockmedia.nl/~allchiefs/wp-content/uploads/2021/11/ALLCHIEFS_WORKSHOP_DSC_4026-scaled.jpg" alt="" class="h-100" style="width: 100%; object-fit: cover;">
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
                 <div class="col-12 d-flex flex-column">
                     <?php if (have_posts()) : ?>     
		        <?php  
					$args = array(
						'post_type'      => 'kernwaarde',
						'posts_per_page' => 4,
					);

					$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php global $post; ?>

                    <div class="chief flex-column d-flex">
                            <h3><?php echo $post->post_title; ?></h3>
                            <p><?php echo $post->post_content; ?></p>
                    </div>

                    <?php endwhile; ?>

                    <?php else: ?>
                        <p>Sorry, er zijn geen kernwaarden gevonden<p>
                    <?php endif 

                    // wp_reset_query();
                    ?>
                    
                </div>
            </div>
    </div>
</div>

<div id="section-3" style="background: linear-gradient(
		270deg, var(--white-color) 55%, var(--sand-25) 20%, var(--sand-25) 50%);">
    <div class="container-xxl">
        <div class="row">
            <h2>Chiefs</h2>
            <div class="col-12 d-flex flex-wrap justify-content-between position-relative">
            <?php if (have_posts()) : ?>     
		        <?php  
					$args = array(
						'post_type'      => 'chief',
						'posts_per_page' => -1,
					);

					$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php global $post; ?>
					<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>

                    <div class="chief" style="background-image: url('<?php echo $backgroundImg[0]; ?>'); background-size: cover;">
                        <div class="chief__information p-5">
                            <h3><?php echo $post->post_title; ?></h3>
                            <p><?php echo $post->post_content; ?></p>
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
											$output .= '<a class="btn btn-primary" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
									}
									echo trim( $output, $separator );
							}?>
                        </div>
                    </div>

                    <?php endwhile; ?>

                    <?php else: ?>
                        <p>Sorry, er zijn geen chiefs gevonden<p>
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