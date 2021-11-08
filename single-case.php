<?php
/* Template Name: Case */

get_header();

?>
<div id="intro">
    <div class="row">
        <div class="container-lg">
            <h2 class="post__subtitle"><?php echo get_field( "case_titel"); ?></h2>
            <span><?php echo get_field( "case_inleiding"); ?></span>
        </div>
    </div>
</div>
<div id="team" class="my-5">
            <div class="container-lg">
                <div class="row">
                    <div class="col-6">
                        <h3>Het team</h3>
                        <div class="team__member"></div>
                        <div class="team__member"></div>
                        <div class="team__member"></div>
                    </div>
                    <div class="col-6">
                        <h3>Expertisegebieden</h3>
                        <div class="expertise__area"></div>
                        <div class="expertise__area"></div>
                    </div>
                </div>
            </div>
</div>

<div id="quote" class="my-5">
    <div class="container-lg" style="position: relative">
        <img src="<?php echo get_template_directory_uri(); ?>/img/allchiefs-corner-right.png" style="position: absolute; width: 4%; right: 0; top: 40px;" />
        <p>“<?php echo get_field( "case_quote"); ?>”</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/allchiefs-corner-left.png" style="transform: rotate(270deg); position: absolute; width: 4%; left: -4%;
        bottom: -12%;" />
    </div>
</div>

<div id="content__1" class="my-5 case__content">
    <div class="container-lg">
        <span>1. <h2>Uitdaging</h2></span>
        <p><?php echo get_field( "uitdaging_content" ); ?></p>
    </div>
</div>

<div id="content__2" class="my-5 case__content">
    <div class="container-lg">
        <span>2. <h2>Aanpak</h2></span>
        <p><?php echo get_field( "uitdaging_content_2"); ?></p>
    </div>
</div>

<div id="content__3" class="my-5 case__content">
    <div class="container-lg">
        <span>3. <h2>Resultaat</h2></span>
        <p><?php echo get_field( "uitdaging_content_3"); ?></p>
    </div>
</div>

<div id="contact__block">
    <div class="header__overlay">
        <div class="container-lg text-center">
            <p class="contact__block--title">Geïnteresseerd</p>
            <p class="contact__block--subtitle mt-4">Judith & Margit praten graag met je verder</p>
            <a href="" class="btn btn-primary mt-4">Plan een afspraak</a>
        </div>
    </div>
</div>

<div id="related_cases">
        <h2>Lees meer ...</h2>

            <div class="case__slider">
            <?php
                    $related_query = new WP_Query(array(
                        'post_type' => 'case',
                        'category__in' => wp_get_post_categories(get_the_ID()),
                        'post__not_in' => array(get_the_ID()),
                        'posts_per_page' => 6,
                        'orderby' => 'date',
                    ));

                    while ($related_query->have_posts()) : $related_query->the_post();
                    global $post;
                ?>
                    <div class="case__slide p-5 ps-0">
                        <?php echo get_the_post_thumbnail();?>
                        <span><p>Case study</p></span>
                        <h4><?php echo get_the_title(); ?></h4>
                    </div>
                <?php endwhile; 
                    wp_reset_query();
                ?>
            </div>
            <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                
            </div>
</div>
<?php
get_footer();

?>