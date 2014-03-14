<?php

// quick ajax proxy for accessing remote JSON resources
// @author: joshua giardino
// @license: Apache License 2.0

require_once("/requests/Requests.php");
Requests::register_autoloader();

// is a field set, or empty, null etc
function hasField($field)
{
	if(is_null($field) || $field === '' || !isset($field))
	{
		return FALSE;
	} else {
		return TRUE;
	}
}

$query = $_GET['q'];


header("Content-Type: application/json");

if(hasField($query))
{
	$headers = array('Accept' => 'application/json');
	$request = Requests::get(urldecode($query), $headers);
	
	echo($request->body);
	
} else {
	$out = array();
	$out['status'] = "error";
	$out['msg'] = "A required field was not set. [query] - Please check your code and try again.";
	echo(json_encode($out));
}

?>