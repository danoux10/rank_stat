<?php
include_once '../../config/database.php';

if(array_key_exists('task',$_GET)){
	$task = $_GET['task'];
}

//link affect function
//sublink tank
if($task == 'tankDec'){
	tankDec();
}
if($task == 'tankInc'){
	tankInc();
}
//sublink dps
if($task == 'dpsDec'){
	dpsDec();
}
if($task == 'dpsInc'){
	dpsInc();
}
//sublink heal
if($task == 'healDec'){
	healDec();
}
if($task == 'healInc'){
	healInc();
}
//sublink reset
if($task == 'resetAll'){
	resetAll();
}

//link function
//sublink tank
function tankDec(){
	global $bdd;
	$data = htmlspecialchars($_POST['dataTank']);
	$data--;
	$update = $bdd->prepare('UPDATE player set tankData=? WHERE idUser=?');
	//Update change value by cookie
	$update->execute([$data,$_COOKIE['idUser']]);
}
function tankInc(){
	global $bdd;
	$data = htmlspecialchars($_POST['dataTank']);
	$data++;
	$update = $bdd->prepare('UPDATE player set tankData=? WHERE idUser=?');
	//Update change value by cookie
	$update->execute([$data,$_COOKIE['idUser']]);
}
//sublink dps
function dpsDec(){
	global $bdd;
	$data = htmlspecialchars($_POST['dataDps']);
	$data--;
	$update = $bdd->prepare('UPDATE player set dpsData=? WHERE idUser=?');
	//Update change value by cookie
	$update->execute([$data,$_COOKIE['idUser']]);
}
function dpsInc(){
	global $bdd;
	$data = htmlspecialchars($_POST['dataDps']);
	$data++;
	$update = $bdd->prepare('UPDATE player set dpsData=? WHERE idUser=?');
	//Update change value by cookie
	$update->execute([$data,$_COOKIE['idUser']]);
}
//sublink heal
function healDec(){
	global $bdd;
	$data = htmlspecialchars($_POST['dataHeal']);
	$data--;
	$update = $bdd->prepare('UPDATE player set healData=? WHERE idUser=?');
	//Update change value by cookie
	$update->execute([$data,$_COOKIE['idUser']]);
}
function healInc(){
	global $bdd;
	$data = htmlspecialchars($_POST['dataHeal']);
	$data++;
	$update = $bdd->prepare('UPDATE player set healData=? WHERE idUser=?');
	//Update change value by cookie
	$update->execute([$data,$_COOKIE['idUser']]);
}
//sublink reset
function resetAll(){
	global $bdd;
	$tank = 0;
	$dps = 0;
	$heal = 0;
	$update = $bdd->prepare('UPDATE player set tankData=?,dpsData=?,healData=? WHERE idUser=?');
	//Update change value by cookie
	$update->execute([$tank,$dps,$heal,$_COOKIE['idUser']]);
}