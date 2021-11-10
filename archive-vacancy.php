<?php
/* Template Name: Vacancy Archive */

get_header();
?>
<!-- <?php the_content();?> -->

<div style="position: absolute; right:0; margin-top: -200px;"><img src="<?php echo get_field('icon_excellence');?>"></div>
<div id="intro-excellence" class="pt-5 pb-5 mb-5" style="background: linear-gradient(90deg, var(--white-color) 40%, <?php the_field('bgcolor_excellence'); ?>  15%, <?php the_field('bgcolor_excellence'); ?> 55%);">
	<div class="container-xxl">
		<div class="row align-items-center justify-content-between">
		<div class="col-md-6 whatwedoimg">
				<img src="<?php echo get_template_directory_uri(); ?>/img/rotterdam-top-view.jpg"/>
			</div>
			<div class="col-md-5">
				<h2>Daag elkaar uit</h2>
				<p><?php echo the_content(); ?></p>
				<a href="#opentofill" class="btn btn-primary people-big">Onze vacatures</a>
			</div>
		
		</div>
	</div>
</div>

<div id="section-3">
    <div class="container-xxl">
        <div class="row">
            <h2>Allchiefs geeft jou</h2>
            <div class="col-12 d-flex flex-wrap justify-content-between position-relative">
				<?php
						$icons_row = get_field('icons', 'option');
							if($icons_row)
							{
								foreach($icons_row as $row)
								{
									$image = $row['icon'];
									echo '<div class="col-3 icon"><img src="'. $image .'" style="width: 50px; height: 50px; object-fit: cover;"><p>' . $row['icon_text']  . '</p>';
									echo '<div class="icon__information p-5"><h3>' . $row['icon_title']  . '</h3><p>' . $row['icon_description']  . '</p></div></div>';
								}
							}
					?>
            </div>
        </div> 
		
    </div> 
</div>


<div id="opentofill" class="pt-5" style="background: var(--sand-25);">
    <div class="container-xxl">
        <div class="row">
			<h2>Binnenkort vacatures </h3>
		</div>
	</div>
</div>

<?php
get_footer();

?>