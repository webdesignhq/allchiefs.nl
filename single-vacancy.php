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
        </div>
        <div class="row">
          <div class="d-flex flex-column">
            <form name="applyForm" method="post" onsubmit="sendApplication(this)">
              <label for="name">Volledige naam</label>
              <input type="name" name="name" id="name"/>
              <label for="email">E-mailadres</label>
              <input type="email" name="email" id="email"/>
              <label for="phone">Telefoonnummer</label>
              <input type="tel" name="phone" id="phone"/>
              <label for="file">CV</label>
              <input type="file" name="cv" id="cv"/>
              <label for="picture">Foto</label>
              <input type="file" name="picture" id="picture"/>
              <input type="submit">Versturen</input>
              
              <!-- misschien hier nog motivatiebrief bij -->
            </form>
          </div>
        </div>
    </div>


            
    </div>
</div> 
<?php get_footer(); ?>