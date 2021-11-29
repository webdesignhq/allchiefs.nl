<?php get_header();
require_once('koppeling/api.php');
$singleoffer = getSingleOffer("71676", htmlspecialchars($_GET["id"])); 
 ?>
 
 <div id="insights">
    <div class="container-lg">
        <div class="row">
          <?php 
	//echo '<pre>' ;
	//var_dump($singleoffer);
	//echo '</pre>' ;
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
                <div class="row">
          <div class="d-flex flex-column">
            <form name="applyForm" id="applyForm" method="post">
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
              <input type="hidden" name="offer_id" id="offer_id" value="<?php echo htmlspecialchars($_GET["id"]) ?>">
              <input type="hidden" name="operation" id="operation" value="application">
              <input type="submit" name="submit" id="submit">Versturen</input>

              
              <!-- misschien hier nog motivatiebrief bij -->
            </form>
          </div>
        </div>
    </div>
</div>
 <script type="text/javascript" src="../wp-content/themes/allchiefs.nl/koppeling/applications.js"/>
	

<?php
get_footer();

?>