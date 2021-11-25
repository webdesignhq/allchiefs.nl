<?php get_header();
require_once('koppeling/api.php');
$singleoffer = getSingleOffer("71676", htmlspecialchars($_GET["id"])); 
 ?>
 
 <div id="insights">
    <div class="container-lg">
        <div class="row">
            	<?php 
	
					$offerTitle = $singleoffer->title; 
					$offerDepartment = $singleoffer->department; 
					$offerDescription = $singleoffer->description; 
					$offerLink = $singleoffer->slug; 
						?>

					<div class="d-flex flex-column col-lg-12">
						<span><?php echo $offerDepartment; ?></span>
						<h3><?php echo $offerTitle; ?></h3>
						<?php echo $offerDescription; ?>
					</div>
        </div>
    </div>
</div>
	

<?php
get_footer();

?>