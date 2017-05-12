<?php
require 'vendor/autoload.php';

$client = new MongoDB\client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;

/*********FINDING MULTIPLE DOCUMENT********/
$documentlist = $empcollection->find(
	['skill' => 'mongoDB']
);

foreach ($documentlist as $doc) 
{
	var_dump($doc);
}

/*********FINDING SINGLE DOCUMENT********
$document = $empcollection->findOne(
	['_id' => '1']
);

var_dump($document);
*/
?>