<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
  
get_header();
global $post;
?>
<div id="insights">
    <div class="container-lg">
        <div class="row">
            <p class="content"><?php the_content(); ?></p>
        </div>
    </div>

        <div class="row" id="insight__quote">
            <div class="container-lg">
                <p>Clients & Expertisegebieden</p>
                <?php $categories = get_the_category($post->ID) ;
                        foreach ($categories as $category){
                            if($category->parent < 1 && $category->slug != 'chiefs'){
                                ?> <span class="expertise" style="background-color: var( <?php if($category->slug === 'people'){  ?> --people-color <?php } else if($category->slug === 'sustainability'){  ?> --sustainability-color <?php } else if($category->slug === 'data'){  ?> --data-color <?php } else if($category->slug === 'fit-for-future'){  ?> --fitforfuture-color <?php } ?> );"> <?php echo $category->name; ?> </span> <?php
                            }
                        }
                ?>
            </div>
        </div>

    <div class="container-lg">
        <div class="row content__after">
                <p><?php echo get_field('chief_content'); ?> </p>
        </div>
    </div>
	
	 <div class="container-lg">
        <div class="row content__after">
                <p>Uitgevoerde projecten</p>
        </div>
    </div>
        <div id="contact__block">
            <div class="header__overlay">
                <div class="container-lg text-center">
                    <p class="contact__block--title">Kennismaken met <?php echo the_title(); ?>?</p>
                    <p class="contact__block--subtitle mt-4">Plan een afspraak in via onderstaande knop</p>
                    <a href="" class="btn btn-primary mt-4">Maak kennis met <?php echo the_title(); ?></a>
                </div>
            </div>
        </div>
            
    </div>
</div> 
<?php get_footer(); ?>