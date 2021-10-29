<?php
/* Template Name: Case Archive */

get_header();
?>
<?php the_content();?>
<div id="content">
	<div class="row content">
		<div class="medium-12 columns">
			<div class="columns">
			<?php while ( have_posts() ) : the_post(); ?>

				<article class="<?php post_class(); ?>">
					<h1><?php the_title(); ?></h1>
					<div class="post-content">
						<?php the_content(); ?>
					</div>
					<a href="<?php the_permalink(); ?>">Lees meer</a>
				</article>
			<?php endwhile; // end of the loop. ?>
				 
				<p align="center"><?php posts_nav_link(); ?></p>
			</div>
		
		</div>
	</div>	
</div>	
	

<?php
get_footer();

?>