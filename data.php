<?php

require_once("/requests/Requests.php");
Requests::register_autoloader();

$id = "4CTXA5NHSW5JIWG0ODQZVPDH5H3H3AHYGMTPPGSHE4AOTMAN";
$secret = "5GB2QWN2K5AF00EBTVA1E2HSSNFZBPK4BGA5OHIWKW1BAIXI";

$base = "https://api.foursquare.com/v2/";
$endpoint = "venues/search";

$query = "?ll=" . urlencode("37.562992,-122.325525") . "&client_id=" . $id . "&client_secret=" . $secret . "&v=20140312&limit=50";

echo($base . $endpoint . $query);
/*
$headers = array('Accept' => 'application/json');

$request = Requests::get($base . $endpoint . $query, $headers);

$data = json_decode($request->body);
//var_dump($data);
$venues = $data->response->venues;
foreach($venues as $venue)
{
	echo $venue;
}
*/
?>