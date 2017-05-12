<?php
require 'vendor/autoload.php';

$client = new MongoDB\client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;

$deleteResult = $empcollection->deleteMany(
	['name' => 'Marie']
);
printf("Deleted %d documents", $deleteResult->getDeletedCount());

/*
$deleteResult = $empcollection->deleteOne(
	['_id' => '4']
);
printf("Deleted %d documents", $deleteResult->getDeleteCount());
*/
?>