<?php
require 'vendor/autoload.php';

$client = new MongoDB\client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;

$replacementResult = $empcollection->replaceOne(
	['_id' => '1'],
	['_id' => '1', 'favColor' => 'blue']
);

printf("Matched %d document \n", $replacementResult->getMatchedCount());
printf("Modified %d document \n", $replacementResult->getModifiedCount());

/********UPDATE ONE FILE*************
$updateResult = $empcollection->updateMany(
	['skill' => 'mongoDB'],
	['$set' => ['manager' => 'Tim']]
	
);
printf("Matched %d document \n", $updateResult->getMatchedCount());
printf("Modified %d document \n", $updateResult->getModifiedCount());

********UPDATE ONE FILE*************
$updateResult = $empcollection->updateOne(
	['age' => '27'],
	['$set' => ['age' => '28']]
	/*['$set' => ['_id' => 0, 'name' => 1]]
);

printf("Matched %d document \n", $updateResult->getMatchedCount());
printf("Modified %d document \n", $updateResult->getModifiedCount());

foreach ($documentlist as $doc)
{
	var_dump($doc);
}*/

?>