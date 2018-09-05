<?php

require __DIR__ . "/vendor/autoload.php";

$url = parse_url(getenv('SCALINGO_INFLUX_URL'));

$client = new \crodas\InfluxPHP\Client($url['host'], $url['port'], $url['user'], $url['pass']);

$dbs = $client->getDatabases();
if ($dbs) {
	foreach ((array)$dbs as $db) {
		echo"<pre>"; print_r($db->getName()); echo"</pre>";
    	
	}

}
