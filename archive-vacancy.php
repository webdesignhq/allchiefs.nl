<?php
/* Template Name: Vacancy Archive */

get_header();
require_once('koppeling/api.php');
$offers = runJob("71676"); 

?>
<!-- <?php the_content();?> -->

<div style="position: absolute; right:0; margin-top: -200px;"><img src="<?php echo get_field('icon_excellence');?>"></div>
<div id="intro-vacancies" class="pt-5 pb-5 mb-5">
	<div class="container-xxl">
		<div class="row align-items-center justify-content-between">
		<div class="col-md-6 whatwedoimg">
				<img src="https://server1.webdesignhq.cloud.shockmedia.nl/~allchiefs/wp-content/uploads/2021/11/ALLCHIEFS_WORKSHOP_DSC_4435-scaled.jpg"/>
			</div>
			<div class="col-md-5">
				<h2>Daag elkaar uit</h2>
				<p><?php echo the_content(); ?></p>
				<a href="#opentofill" class="btn btn-primary people-big">Onze vacatures</a>
			</div>
		
		</div>
	</div>
</div>

<div id="whatweoffer">
    <div class="container-xxl">
        <div class="row">
            <h2 class="text-center py-3">Allchiefs geeft jou</h2>
				<?php
						$icons_row = get_field('icons', 'option');
							if($icons_row)
							{
								foreach($icons_row as $row)
								{
									$image = $row['icon'];
									echo '<div class="col-lg-3 col-md-6 text-center extra"><img class="extra-img" src="'. $image .'"><p>' . $row['icon_text']  . '</p>';
									echo '<div class="extra__information p-5"><h3>' . $row['icon_title']  . '</h3><p>' . $row['icon_description']  . '</p></div></div>';
								}
							}
					?>
        </div> 
		
    </div> 
</div>


<div id="opentofill" style="background: var(--sand-25);">
    <div class="container-xxl">
        <div class="row">
			<h2 class="py-3">Open to fill</h2>
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

					<div class="d-flex flex-column col-lg-3 col-md-12 vacature">
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
<div id="experiencestitle">
	<div class="container-xxl">
		<div class="row">
			<h2>Ervaringen van je nieuwe collega's</h2>
		</div>
	</div>
</div>
<div id="experiences" class="py-5" style="background: linear-gradient(-90deg, var(--white-color) 40%, var(--sand-25) 15%, var(--sand-25) 55%);">
    <div class="container-xxl">
        <div class="row">
			<div class="single-slider">

					<?php
						$experiences_row = get_field('experiences', 'option');
							if($experiences_row)
							{
								foreach($experiences_row as $row)
								{
									echo '<div class="d-flex flex-row">';
									$image = $row['image'];
									echo '<div class="col-lg-4 col-sm-12 p-4"><h3>' . $row['name']  . '</h3><p>' . $row['description']  . '</p><a class="btn btn-primary" href="">Lees het verhaal van ' . $row['name']  . '</a></div>';
									echo '<div class="col-lg-7 offset-lg-1 col-sm-12 offset-sm-0"><img style="height: 70%; width: 100%; object-fit: cover;" data-lazy="'. $image .'"></div>';
									echo '</div>';
								}
							}
					?>
			</div>
		</div>
	</div>
</div>


<div id="kantour" class="pt-5">
    <div class="container-xxl">
        <div class="row">
			<h2 class="py-3">Kantour</h2>
			<div class="wrapper">
				<?php
		
						$kantour_row = get_field('kantour', 'option');
							if($kantour_row)
							{
								foreach($kantour_row as $row)
								{
									echo '<figure>';
									$image = $row['image'];
									echo '<img src="'. $image .'" alt="afbeelding-kantour">';
									echo '</figure>';
								}
							}
					?>
			</div>
		</div>
	</div>
</div>


<?php
get_footer();

?>