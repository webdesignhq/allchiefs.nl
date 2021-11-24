<?php
/* Template Name: Vacancy Archive */

get_header();
require_once('koppeling/api.php');
$offers = runJob("71676"); 

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
			<h2>Binnenkort vacatures </h2>
			<?php 
				$i = 0;
				// echo '<pre>';
				//var_dump($offers);
				//echo '</pre>';
				foreach ($offers as $offer) {
					
					$offerTitle = $offer[$i]->title; 
					$offerDepartment = $offer[$i]->department; 
					$offerDescription = $offer[$i]->description; 
					$offerLink = $offer[$i]->slug; 
						?>

					<div class="d-flex flex-column" style="background-color: #fff; padding: 20px;">
						<span><?php echo $offerDepartment; ?></span>
						<h3><?php echo $offerTitle; ?></h3>
						<p><?php echo $offerDescription; ?></p>
						<a href="<?php echo $offerLink; ?>">Lees meer</a>
					</div>
					<?php $i++;                
					sleep(0.1);
				}   
			?>
		</div>
	</div>
</div>

<div id="experiences" class="pt-5" style="background: linear-gradient(-90deg, var(--white-color) 40%, var(--sand-25) 15%, var(--sand-25) 55%);">
    <div class="container-xxl">
        <div class="row">
			<h2>Ervaringen van je nieuwe collega's</h2>
			<div class="single-slider">
			 <div><div class="col-6 d-flex">Andre Annema <p>“Ik vind een samenwerking voor ons pas geslaagd wanneer wij de klanten laten shinen, en niet andersom. Je werkt voor het succes van de klant. Het gaat niet om ons. Dus als wij door eerlijk samen te werken ervoor kunnen zorgen dat een klant succesvol wordt, dan is ons werk ook een succes.” </p></div><div class="col-6 d-flex"><img style="width:100%;" src="https://server1.webdesignhq.cloud.shockmedia.nl/~allchiefs/wp-content/themes/allchiefs.nl/img/rotterdam-top-view.jpg" alt="test"/></div></div>
			  <div><div class="col-6 d-flex">Andre Annema <p>“Ik vind een samenwerking voor ons pas geslaagd wanneer wij de klanten laten shinen, en niet andersom. Je werkt voor het succes van de klant. Het gaat niet om ons. Dus als wij door eerlijk samen te werken ervoor kunnen zorgen dat een klant succesvol wordt, dan is ons werk ook een succes.” </p></div><div class="col-6 d-flex"><img style="width:100%;" src="https://server1.webdesignhq.cloud.shockmedia.nl/~allchiefs/wp-content/themes/allchiefs.nl/img/rotterdam-top-view.jpg" alt="test"/></div></div>
			 <div><div class="col-6 d-flex">Andre Annema <p>“Ik vind een samenwerking voor ons pas geslaagd wanneer wij de klanten laten shinen, en niet andersom. Je werkt voor het succes van de klant. Het gaat niet om ons. Dus als wij door eerlijk samen te werken ervoor kunnen zorgen dat een klant succesvol wordt, dan is ons werk ook een succes.” </p></div><div class="col-6 d-flex"><img  style="width:100%;" src="https://server1.webdesignhq.cloud.shockmedia.nl/~allchiefs/wp-content/themes/allchiefs.nl/img/rotterdam-top-view.jpg" alt="test"/></div></div>
			</div>
		</div>
	</div>
</div>


<div id="kantour" class="pt-5">
    <div class="container-xxl">
        <div class="row">
			<h2>Kantour</h2>
		</div>
	</div>
</div>


<?php
get_footer();

?>