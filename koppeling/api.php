<?php
    ini_set ( 'max_execution_time', 1200); 
    set_time_limit(1200);

    require_once("https://server1.webdesignhq.cloud.shockmedia.nl/~allchiefs/public_html/wp-load.php");
    require_once(ABSPATH . 'wp-admin/includes/media.php');
    require_once(ABSPATH . 'wp-admin/includes/file.php');
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    $articles = [];

    function requestAPI($binding, $api_route, $method) {
        $curl = curl_init();

        $configString = file_get_contents("../static/config.json");
        $config = json_decode($configString, true);

        $api_key = $config['api_key'];
    
        $requestUrl = "https://api.recruitee.com/c/71676/offers";

        // Sets the URL and corrosponding header data
        curl_setopt($curl, CURLOPT_URL, $requestUrl);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Authorization: '. $api_key
        ));
        

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        
        $results = curl_exec($curl);

        curl_close($curl);

        if(!$results) { echo 'No results!'; }

        return $results;
    }

    function getOffers($binding, $company) {
        libxml_use_internal_errors(true);

        $xml = requestAPI($binding, "exportdefinition?definitionHeaderCode=". $company ."&forceUpdate=true", "xml");
        $xml = simplexml_load_string($xml);

        foreach( libxml_get_errors() as $error ) {
            print_r($error);
        }
        return $xml;
    }
	
    function createVacancy($vacancy) {
        $creationStatus = true;

        if($price <= 0) $creationStatus = false;
        if($articleEndDate != '') {
            $currentDate = time();
            $date = strtotime($articleEndDate);

            if($currentDate > $date) {
                $creationStatus = false;
            }
        }
        if($creationStatus) {
            $articleCatIDs = [];
            $post_id = wp_insert_post(
                array(
                    'post_title' => strval($vacancy),
                    'post_content' => $description ? $description : '',
                    'post_type' => 'vacature',
                    'post_status' => 'publish'
                )
            );
    
            $thedata = Array();
        }
    }
?>