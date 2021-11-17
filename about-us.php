<?php
/* 
Template Name: About us
*/

get_header();
?>
<div id="about-us" class="py-lg-5 py-0"  style="background: linear-gradient(
		90deg, var(--white-color) 45%, var(--sand-25) 20%, var(--sand-25) 50%);">
    <div class="container-xxl">
        <div class="row pt-5 py-lg-5">
            <div class="col-12 col-lg-6" >
                <img src="http://localhost/allchiefs.nl/wp-content/uploads/2021/10/ALLCHIEFS_WORKSHOP_DSC_4026.jpg" alt="" class="h-100" style="width: 100%; object-fit: cover;">
            </div>
            <div class="col-12 col-lg-5 offset-lg-1 d-flex flex-column justify-content-center content-height" >
                <h2>Unieke kijk op consultrancy</h2>
                <p class="mt-4 col-10">AllChiefs weet als geen ander dat mensen de sleutel zijn tot succes voor iedere organisatie en uiteindelijk een betere wereld. We brengen mensen samen, dagen uit, ondersteunen en versnellen. Samen bouwen we aan duurzame organisaties die toekomstbestendig zijn. Impact maken met de juiste balans tussen mens, planeet en resultaat.</p>

            </div>
        </div>
    </div>
</div>

<div id="section-2">
    <div class="container-xxl">
        <div class="row">
                <div class="col-12 col-lg-4 d-flex flex-column justify-content-center content-height">
                    <h2>Wie we zijn</h2>
                    <p class="mt-4 col-10">AllChiefs weet als geen ander dat mensen de sleutel zijn tot succes voor iedere organisatie en uiteindelijk een betere wereld. We brengen mensen samen, dagen uit, ondersteunen en versnellen. Samen bouwen we aan duurzame organisaties die toekomstbestendig zijn. Impact maken met de juiste balans tussen mens, planeet en resultaat.</p>
                    <a href="./wat-we-doen/" class="btn btn-primary people-big col-5 mt-4">Wat we doen</a>
                </div>
                <div class="col-12 col-lg-6 offset-lg-2 ">
                    <div class="h-100">
                        <img src="http://localhost/allchiefs.nl/wp-content/uploads/2021/10/ALLCHIEFS_WORKSHOP_DSC_4026.jpg" alt="" class="h-100" style="width: 100%; object-fit: cover;">
                    </div>
                    
                </div>
            </div>
            <div class="row">

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
                            <!-- foreach socialmedia link -->
                            <!-- foreach expertise -->
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