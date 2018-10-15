<?php

$url="http://timothyreeder.com/kakikomi/api/";

// we can set a variable for adding parameters to the URL or just the entire URL to be specified on the page that is including this.

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1 );
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch); 

if (curl_errno($ch)) { 
   print curl_error($ch);
}
curl_close($ch); 

?>