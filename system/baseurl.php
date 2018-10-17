<?php

// localhost ips
$localips = array(
	'127.0.0.1',
	'::1'
);
// this is for getting baseurl to work locally, 
$baseurl  = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
$baseurl .= $_SERVER['SERVER_NAME'];
if (strpos($baseurl, 'localhost') !== false) {
	$baseurl .= ":".$_SERVER['SERVER_PORT'];
}

if(in_array($_SERVER['REMOTE_ADDR'], $localips)){
	$cleanuri = explode('/', $_SERVER['REQUEST_URI']);
	$cleanurizero = htmlspecialchars($cleanuri[1]);
	$baseurl .= '/'.$cleanurizero.'/';
}
else{
	// config for location on server 
	// $baseurl .= '/alpha/portfolio/';
}

?>