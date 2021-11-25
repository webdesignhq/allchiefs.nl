<?php
    ini_set ( 'max_execution_time', 1200); 
    set_time_limit(1200);

    require_once("/home/allchiefs/domains/allchiefs.nl/public_html/wp-load.php");

    function requestAPI($companyid, $api_route, $method) {
		
        $curl = curl_init();

        //$configString = file_get_contents("../static/config.json");
        //$config = json_decode($configString, true);

        // $api_key = $config['api_key'];
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

?>