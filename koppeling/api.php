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
			
        return $json;
    }
	
    function createVacancy($vacancy) {

        $creationStatus = true; 
		
		if($creationStatus) {
           
            $post_id = wp_insert_post(
                array(
                    'post_title' => strval($vacancy),
                    'post_type' => 'vacature',
                    'post_status' => 'publish',
                )
            );
			//echo 'Vacature aangemaakt met het id: ' .  $post_id;
    
		 }
    }
	
	function displayVacancy($vacancy) {

        return $vacancy;
    }
	

	
	    /**
     * Runs the API job
     */
    
    function runJob($companyid) {
			
		$offers = json_decode(getOffers($companyid));
		displayVacancy($vacancy);
		return $offers;
		
    }

	runJob("71676");
?>