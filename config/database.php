<?php
$host = 'localhost';
//$host = '109.17.151.168';
$dbname = 'hebdowin';
$username = 'root';
$password = 'Danoux10&*';
//$password = 'password';

try{
	$bdd= new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", "$username", "$password");
}
catch (Exception $e){
	die('Erreur : ' .$e->getMessage());
}
?>