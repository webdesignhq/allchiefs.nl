<?php
/* 
Template Name: About us
*/

get_header();
?>
<div id="about-us" class="py-5"  style="background: linear-gradient(
		90deg, var(--white-color) 45%, var(--sand-25) 20%, var(--sand-25) 50%);">
    <div class="container-xxl">
        <div class="row pt-5">
            <div class="col-6" >
                <img src="http://localhost/allchiefs.nl/wp-content/uploads/2021/10/ALLCHIEFS_WORKSHOP_DSC_4026.jpg" alt="" style="width: 100%; object-fit: cover;">
            </div>
            <div class="col-5 offset-1" >
                <h2>Unieke kijk op consultrancy</h2>
                <p class="mt-4">AllChiefs weet als geen ander dat mensen de sleutel zijn tot succes voor iedere organisatie en uiteindelijk een betere wereld. We brengen mensen samen, dagen uit, ondersteunen en versnellen. Samen bouwen we aan duurzame organisaties die toekomstbestendig zijn. Impact maken met de juiste balans tussen mens, planeet en resultaat.</p>

            </div>
        </div>
    </div>
</div>

<div id="section-2">
    <div class="container-xxl">
        <div class="row">
                <div class="col-4">
                    <h2>Unieke kijk op consultrancy</h2>
                    <p class="mt-4">AllChiefs weet als geen ander dat mensen de sleutel zijn tot succes voor iedere organisatie en uiteindelijk een betere wereld. We brengen mensen samen, dagen uit, ondersteunen en versnellen. Samen bouwen we aan duurzame organisaties die toekomstbestendig zijn. Impact maken met de juiste balans tussen mens, planeet en resultaat.</p>
                </div>
                <div class="col-6 offset-2">
                    <img src="http://localhost/allchiefs.nl/wp-content/uploads/2021/10/ALLCHIEFS_WORKSHOP_DSC_4026.jpg" alt="" style="width: 100%; object-fit: cover;">
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
            <div class="col-12 d-flex flex-wrap justify-content-between">
            <?php if (have_posts()) : ?>     
		        <?php  
					$args = array(
						'post_type'      => 'chief',
						'posts_per_page' => 10,
					);

					$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php global $post; ?>
					<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>

                    <div class="chief" style="background-image: url('<?php echo $backgroundImg[0]; ?>'); background-size: cover;">

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