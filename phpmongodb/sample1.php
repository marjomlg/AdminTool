<?php
require 'vendor/autoload.php';

$m = new MongoClient();
    $db = $m->selectDB('db_system');
    $empNotify = new MongoCollection($db, 'employee');

    $empNotifyList = $empNotify->findOne( array("username"=>$login_session), array("_id"=>0) );

?>