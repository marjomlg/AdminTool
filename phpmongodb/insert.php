<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;

/******INSERTING MANY DOCU*************/
$insertManyResult = $empcollection->insertMany
([
	['_id' => '5', 'name' => 'Mar', 'age' => '21', 'skill' => 'mongoDB'],
	['_id' => '6', 'name' => 'Mariel', 'age' => '23', 'skill' => 'php'],
	['_id' => '7', 'name' => 'Maro', 'age' => '25', 'skill' => 'nodejs']
]);

printf("Inserted %d documents", $insertManyResult->getInsertedCount());
var_dump($insertManyResult->getInsertedIds());

/******INSERTING ONE DOCU*************
$insertOneResult = $empcollection->insertOne
(
	['_id' => '1', 'name' => 'Marie', 'age' => '26', 'skill' => 'mongoDB']
);

printf("Inserted %d documents", $insertOneResult->getInsertedCount());
var_dump($insertOneResult->getInsertedId());
*/
?>