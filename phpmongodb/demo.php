<?php
require 'vendor/autoload.php';

/*
$client = new MongoDB\Client("mongodb://localhost:27010");*/
$client = new MongoDB\Client;


$result3 = $client->dropDatabase('newdb');
var_dump($result3);
/*********LIST DATABASES***************
foreach ($client->listDatabases() as $db) 
{
	var_dump($db);
}

********NEW COLLECION***********
$companydb = $client->newdb;

$result2 = $companydb->createCollection("newcollection");

var_dump($result2);


*******DROP COLLECTION ******
$companydb = $client->companydb;

$result2 = $companydb->dropCollection('theircollection');

var_dump($result2);


***********LIST OF COLLECTIONS**********
foreach($companydb->listcollections() as $collection)
{
	var_dump($collection);
}

$result1 = $companydb->createCollection('hiscollection');

var_dump($result1);
*/
?>