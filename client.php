<?php
error_reporting(E_ALL);
ini_set('display_error',1);
session_start();
//panggil library
require_once('nusoap/lib/nusoap.php');
//mendefinisikan alamat url service yang disediakan oleh client 
$url = 'http://api.radioreference.com/soap2/?wsdl&v=latest';
// $client = new soapclient($url); 
$client = new nusoap_client($url, 'WSDL');
$result = $client->call('getCountryList', array('coid', 'countryName', 'countryCode'));
echo '<table>';print_r($client->response);echo '</table>';
?>