<?php

require __DIR__ . "/vendor/autoload.php";

$client = new \crodas\InfluxPHP\Client;

$dbs = $client->getDatabases();
if ($dbs) {
	foreach ((array)$dbs as $db) {
		echo"<pre>"; print_r($db->getName()); echo"</pre>";
    	
	}

}
