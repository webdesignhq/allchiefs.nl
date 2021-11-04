<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
  
get_header(); ?>
  <div class="container-lg">
  <div class="row">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
  
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
  
            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called called content-___.php
             * (where ___ is the post format) and that will be used instead.
             */
            get_template_part( 'content', get_post_format() );
  
          
            // Previous/next post navigation.
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'hqonline' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'hqonline' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'hqonline' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'hqonline' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
            ) );
  
        // End the loop.
        endwhile;
        ?>

        <div id="related">
            <h2>Gerelateerde berichten</h2>
            <div class="row">
            <?php
                $related_query = new WP_Query(array(
                    'post_type' => 'post',
                    'category__in' => wp_get_post_categories(get_the_ID()),
                    'post__not_in' => array(get_the_ID()),
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                ));

                while ($related_query->have_posts()) : $related_query->the_post();
                global $post;
            ?>

                <div class="col-md-3 position-relative insight-container">
					<div class="insight clickable" style="height: 275px; background-image: url(''); background-size: cover;">
						<p class="insight-image"><?php echo $backgroundImg[0]; ?></p>
						<p class="insight-title"><?php echo get_the_title(); ?></p>
						<p class="insight-exerpt"><?php echo get_the_content(); ?></p>
						<a class="d-none" href="<?php echo get_permalink();?>"> </a>
					</div>
					<!-- <div class="insight-content">
						 <a href="<?php echo get_permalink();?>"> <?php echo get_the_title(); ?></a>
					</div> -->
				</div> 
				<?php endwhile;

				wp_reset_query();
			?>
        </div>
        </div>
  
        </main><!-- .site-main -->
    </div><!-- .content-area -->
	   </div>
	      </div>
  
<?php get_footer(); ?>