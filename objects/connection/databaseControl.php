<?php

function __construct($host,$user,$pass,$db){

	this->host = $host;
	this->user = $user;
	this->pass = $pass;
	this->db = $db;
}

	public function connectToDatabase()
		
		{
		$link = mysqli_connect($host,$user,$pass,$db); 

	}

	public function makeQuery()
	{
		
		$result = mysql_query(connectToDatabase(),$query);
		
	}

	function

