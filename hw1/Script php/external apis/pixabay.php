
<?php

$PIXABAY_API_KEY="26977655-8b2ac2c28da32df2535161a8d";
$PIXABAY_API_ADDRESS = "https://pixabay.com/api/?key=";
$PIXABAY_API_ENDPOINT = "&image_type=photo&orientation=horizontal&category=places&q=";

$SEARCH_STRING=$_GET["search"];

$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL,$PIXABAY_API_ADDRESS.$PIXABAY_API_KEY.$PIXABAY_API_ENDPOINT.$SEARCH_STRING);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);

echo $result;

curl_close($curl);

        
?>
