<?php
    ini_set ( 'max_execution_time', 1200); 
    set_time_limit(1200);

    require_once("/home/allchiefs/domains/allchiefs.nl/public_html/wp-load.php");

    if($_POST['operation'] == 'application') {
      sendApplication();
    }
    function requestAPI($companyid, $api_route, $method) {
		
        $curl = curl_init();
	 	$api_key = "Bearer eFFmc1ZJTzRVM2l1bnkyZFRncklpQT09";
    
        $requestUrl = "https://allchiefs.recruitee.com/api/" . $api_route;

        // Sets the URL and corrosponding header data
        curl_setopt($curl, CURLOPT_URL, $requestUrl);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Authorization: '. $api_key,
			'Accept: application/'. $method,
        ));
        
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
       
        $results = curl_exec($curl);

        curl_close($curl);

        if(!$results) { echo 'No results!'; }
        return $results;
    }


    function getOffers($companyid) {
	
        $json = requestAPI($companyid, "offers/?kind=job&scope=active", "json");
		$offers = json_decode($json);		
        return $offers;
    }
	
	function getSingleOffer($companyid, $offerid) {
	
        $json = requestAPI($companyid, "offers/". $offerid, "json");
	    $singleoffer = json_decode($json);	
        return $singleoffer->offer;
    }

  function sendApplication() {
    $api_key = "Bearer eFFmc1ZJTzRVM2l1bnkyZFRncklpQT09";
    $offer_id = $_POST['offer_id'];
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // $cv = $_POST['cv'];
    // $picture = $_POST['picture'];
    $postData = array(
      "candidate" => array (
        "name" => $name,
        "email" => $email,
        "phone" => $phone
        )
      );
      // echo $offer_id;
      // echo json_encode($postData);
      
    $offer = getSingleOffer('71676', $offer_id);
    $curl = curl_init("https://allchiefs.recruitee.com/api/offers/" . $offer->slug . "/candidates");
	//	echo $offer->slug;
    $requestUrl = "https://allchiefs.recruitee.com/api/offers/" . $offer->slug . "/candidates";
		// echo $requestUrl;
    
	curl_setopt($curl, CURLOPT_URL, $requestUrl);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($postData));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'Authorization: '. $api_key,
      'Accept: application/json',
	  'Content-Type: application/json',
    ));
	
	curl_setopt($curl, CURLOPT_POST, true);


    // $curlHandler = curl_init();

    // curl_setopt_array($curlHandler, [
      // CURLOPT_URL => 'https://allchiefs.recruitee.com/api/offers/' . $offer->slug . '/candidates',
      // CURLOPT_RETURNTRANSFER => true,
      // CURLOPT_HTTPHEADER => array (
        // 'Authorization: Bearer eFFmc1ZJTzRVM2l1bnkyZFRncklpQT09',
        // 'Accept: application/json',
        // 'Content-Type: application/json',
      // ),
      // /**
       // * Specify POST method
       // */
      // CURLOPT_POST => true,

      // /**
       // * Specify request content
       // */
      // CURLOPT_POSTFIELDS => $postData,
    // ]);

    $response = curl_exec($curl);

    if($response === false) {
    }
	echo '<pre>';
	echo($response);
	echo '</pre>';
   //var_dump(curl_getinfo($curl));
    // $results = curl_exec($curl);
    
    curl_close($curl);
    
    // if(!results) { echo 'No results!';}
    // echo $results;

    // curl_close($curl);
    // return $results;
    return $response;
  }

?>