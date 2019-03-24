<?php
session_start();

$DB_HOST='localhost';
$DB_USER='root';
$DB_PASS='';
$DB_NAME='nibc';

try{
	$DB_CON= new PDO('mysql:host=localhost;dbname=nibc', $DB_USER,$DB_PASS);

	//echo "Database connected successfuly";
}
catch (PDOException $ex){
	echo $ex->getMessage();
}