<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
  
get_header(); 
require_once('koppeling/api.php');
$offers = runJob("71676"); 
?>

<div id="insights">
    <div class="container-lg">
        <div class="row">
            	<?php 
					$offerTitle = $offer->title; 
					$offerDepartment = $offer->department; 
					$offerDescription = $offer->description; 
						?>

					<div class="d-flex flex-column" style="background-color: #fff; padding: 20px;">
						<span><?php echo $offerDepartment; ?></span>
						<h3><?php echo $offerTitle; ?></h3>
						<p><?php echo $offerDescription; ?></p>
					</div>
					<?php
				}   
			?>
        </div>
    </div>


            
    </div>
</div> 
<?php get_footer(); ?>