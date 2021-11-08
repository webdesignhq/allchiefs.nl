<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
  
get_header(); ?>
<div id="insights">
    <div class="container-lg">
        <div class="row">
            <p class="post__date"><?php echo get_the_date(); ?></p>
            <h2><?php echo get_field('insight_subtitle'); ?> </h2>
            <p class="content"><?php echo get_field('insight_content_1'); ?> </p>
        </div>
    </div>

        <div class="row" id="insight__quote">
            <div class="container-lg">
                <p>"<?php echo get_field('insight_quote'); ?>"</p>
            </div>
        </div>

    <div class="container-lg">
        <div class="row content__after">
                <p><?php echo get_field('insight_content_2'); ?> </p>
        </div>
    </div>

        <div class="row content__conclusion">
            <div class="container-lg">
                <h2><?php echo get_field('insight_conclusion'); ?></h2>
                <p><?php echo get_field('insight_conclusion_content'); ?> </p>
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
            
    </div>
</div> 
<?php get_footer(); ?>