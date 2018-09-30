<?php

$server = "localhost";
	$dbname = "registration";
	$dsn = "mysql:host=localhost;dbname=registration";
	$username = "root";
	$password = "";

	$connection = null;
try{
    $connection=new PDO($dsn,$username,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $ex){

	echo "<br/>Error : ".$ex->getMessage();
}