<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mongodb_model extends CI_Model {

	public function __construct()
	{

		parent::__construct();

	}

public function data() {
	$connection=new MongoClient();
	$db= $connection->tutorial;
	foreach ($db->books->find() as $key => $value) {
		print_r($value);
	}
	$connection->close();
}
}