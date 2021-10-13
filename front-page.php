<?php
/* Template Name: Homepagina */

get_header();
?>
<?php is_front_page(); ?>
<video autoplay muted loop id="videobg">
  <source src="https://allchiefs.nl/wp-content/uploads/2018/11/AllChiefs-Website-Video-Be%CC%81ta.mp4" type="video/mp4">
</video>
<div id="banner">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="bannercontent text-left p-4">
					<h1>Consultancy <br> with a heartbeat</h1>
					<span>Alles wat hier staat is slechts om een indruk te geven van het grafische effect van tekst op deze plek. </span>
				</div>
			</div>
		</div>
	</div>
	<div class="bannerblocks pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<span>People</span>
					<p>Alles wat hier staat is slechts om <br> een indruk te geven</p>
					<a href="#" class="readmore">- lees meer</a>
				</div>
				<div class="col-md-3">
					<span>Performance</span>
					<p>Alles wat hier staat is slechts om <br> een indruk te geven</p>
				</div>
				<div class="col-md-3">
					<span>Eco-system</span>
					<p>Alles wat hier staat is slechts om <br> een indruk te geven</p>
				</div>
				<div class="col-md-3">
					<span>Customer</span>
					<p>Alles wat hier staat is slechts om <br> een indruk te geven</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="content" class="pt-5 pb-5">
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="columns">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
							 
				<?php the_content(); ?>
				 
				
				<?php endwhile; else: ?>
				 
				<h2>Woops...</h2>
				 
				<p>Deze pagina heeft geen content.</p>
				 
				<?php endif; ?>
				 
				<p align="center"><?php posts_nav_link(); ?></p>
			</div>
				</div>
		</div>
	</div>	
</div>	
<?php
get_footer();

?>