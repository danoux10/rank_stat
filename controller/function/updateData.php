<?php
include_once '../../config/database.php';

$nWin = 4;
$nLose = 14;

if(array_key_exists('task',$_GET)){
	$task = $_GET['task'];
}

//link affect function
//sublink tank
//win tank
if($task == 'winTankDec'){
	winTankDec();
}
if($task == 'winTankInc'){
	winTankInc();
}

//loose tank
if($task == 'looseTankDec'){
	looseTankDec();
}
if($task == 'looseTankInc'){
	looseTankInc();
}

//sublink dps
if($task == 'winDpsDec'){
	winDpsDec();
}
if($task == 'winDpsInc'){
	winDpsInc();
}

//loose dps
if($task == 'looseDpsDec'){
	looseDpsDec();
}
if($task == 'looseDpsInc'){
	looseDpsInc();
}

//sublink heal
if($task == 'winHealDec'){
	winHealDec();
}
if($task == 'winHealInc'){
	winHealInc();
}

//loose heal
if($task == 'looseHealDec'){
	looseHealDec();
}
if($task == 'looseHealInc'){
	looseHealInc();
}
//sublink reset
if($task == 'resetAll'){
	resetAll();
}

//link function
//sublink tank win
function winTankDec(){
	global $bdd;
	$select = $bdd->query('select * from player');
	foreach ($select as $data){
		$tankWin = $data['tankWin'];
	}
	if ($tankWin == 0){
		$tankWin = 0;
	}else{
		$tankWin--;
	}
	
	$update = $bdd->prepare('UPDATE player set tankWin=? WHERE idUser=?');
	//Update change value by cookie
	$update->execute([$tankWin,$_COOKIE['idUser']]);
}
function winTankInc(){
	global $bdd,$nWin,$nLose;
	$select = $bdd->query('select * from player');
	foreach ($select as $data){
		$tankWin = $data['tankWin'];
		$tankLose = $data['tankLose'];
	}
	if ($tankWin == $nWin){
		$tankWin = 0;
		$tankLose = 0;
		$update = $bdd->prepare('UPDATE player set tankWin=?,tankLose=? WHERE idUser=?');
		$update->execute([$tankWin,$tankLose,$_COOKIE['idUser']]);
	}else{
		$tankWin++;
		$update = $bdd->prepare('UPDATE player set tankWin=? WHERE idUser=?');
		$update->execute([$tankWin,$_COOKIE['idUser']]);
	}
}
//sublink tank loose
function looseTankDec(){
	global $bdd;
	$select = $bdd->query('select * from player');
	foreach ($select as $data){
		$tankLose = $data['tankLose'];
	}
	if ($tankLose == 0){
		$tankLose = 0;
	}else{
		$tankLose--;
	}
	
	$update = $bdd->prepare('UPDATE player set tankLose=? WHERE idUser=?');
	//Update change value by cookie
	$update->execute([$tankLose,$_COOKIE['idUser']]);
}
function looseTankInc(){
	global $bdd,$nLose,$nLose;
	$select = $bdd->query('select * from player');
	foreach ($select as $data){
		$tankLose = $data['tankLose'];
		$tankWin = $data['tankWin'];
	}
	if ($tankLose == $nLose){
		$tankLose = 0;
		$tankWin = 0;
		$update = $bdd->prepare('UPDATE player set tankLose=?,tankLose=? WHERE idUser=?');
		$update->execute([$tankWin,$tankLose,$_COOKIE['idUser']]);
	}else{
		$tankLose++;
		$update = $bdd->prepare('UPDATE player set tankLose=? WHERE idUser=?');
		$update->execute([$tankLose,$_COOKIE['idUser']]);
	}
}

//sublink dps
//sublink dps win
function winDpsDec(){
	global $bdd;
	$select = $bdd->query('select * from player');
	foreach ($select as $data){
		$dpsWin = $data['dpsWin'];
	}
	if ($dpsWin == 0){
		$dpsWin = 0;
	}else{
		$dpsWin--;
	}
	
	$update = $bdd->prepare('UPDATE player set dpsWin=? WHERE idUser=?');
	//Update change value by cookie
	$update->execute([$dpsWin,$_COOKIE['idUser']]);
}
function winDpsInc(){
	global $bdd,$nWin,$nLose;
	$select = $bdd->query('select * from player');
	foreach ($select as $data){
		$dpsWin = $data['dpsWin'];
		$dpsLose = $data['dpsLose'];
	}
	if ($dpsWin == $nWin){
		$dpsWin = 0;
		$dpsLose = 0;
		$update = $bdd->prepare('UPDATE player set dpsWin=?,dpsLose=? WHERE idUser=?');
		$update->execute([$dpsWin,$dpsLose,$_COOKIE['idUser']]);
	}else{
		$dpsWin++;
		$update = $bdd->prepare('UPDATE player set dpsWin=? WHERE idUser=?');
		$update->execute([$dpsWin,$_COOKIE['idUser']]);
	}
}
//sublink dps loose
function looseDpsDec(){
	global $bdd;
	$select = $bdd->query('select * from player');
	foreach ($select as $data){
		$dpsLose = $data['dpsLose'];
	}
	if ($dpsLose == 0){
		$dpsLose = 0;
	}else{
		$dpsLose--;
	}
	
	$update = $bdd->prepare('UPDATE player set dpsLose=? WHERE idUser=?');
	//Update change value by cookie
	$update->execute([$dpsLose,$_COOKIE['idUser']]);
}
function looseDpsInc(){
	global $bdd,$nLose,$nLose;
	$select = $bdd->query('select * from player');
	foreach ($select as $data){
		$dpsLose = $data['dpsLose'];
		$dpsWin = $data['dpsWin'];
	}
	if ($dpsLose == $nLose){
		$dpsLose = 0;
		$dpsWin = 0;
		$update = $bdd->prepare('UPDATE player set dpsLose=?,dpsLose=? WHERE idUser=?');
		$update->execute([$dpsWin,$dpsLose,$_COOKIE['idUser']]);
	}else{
		$dpsLose++;
		$update = $bdd->prepare('UPDATE player set dpsLose=? WHERE idUser=?');
		$update->execute([$dpsLose,$_COOKIE['idUser']]);
	}
}
//sublink heal
//sublink heal win
function winHealDec(){
	global $bdd;
	$select = $bdd->query('select * from player');
	foreach ($select as $data){
		$healWin = $data['healWin'];
	}
	if ($healWin == 0){
		$healWin = 0;
	}else{
		$healWin--;
	}
	
	$update = $bdd->prepare('UPDATE player set healWin=? WHERE idUser=?');
	//Update change value by cookie
	$update->execute([$healWin,$_COOKIE['idUser']]);
}
function winHealInc(){
	global $bdd,$nWin,$nLose;
	$select = $bdd->query('select * from player');
	foreach ($select as $data){
		$healWin = $data['healWin'];
		$healLose = $data['healLose'];
	}
	if ($healWin == $nWin){
		$healWin = 0;
		$healLose = 0;
		$update = $bdd->prepare('UPDATE player set healWin=?,healLose=? WHERE idUser=?');
		$update->execute([$healWin,$healLose,$_COOKIE['idUser']]);
	}else{
		$healWin++;
		$update = $bdd->prepare('UPDATE player set healWin=? WHERE idUser=?');
		$update->execute([$healWin,$_COOKIE['idUser']]);
	}
}
//sublink heal loose
function looseHealDec(){
	global $bdd;
	$select = $bdd->query('select * from player');
	foreach ($select as $data){
		$healLose = $data['healLose'];
	}
	if ($healLose == 0){
		$healLose = 0;
	}else{
		$healLose--;
	}
	
	$update = $bdd->prepare('UPDATE player set healLose=? WHERE idUser=?');
	//Update change value by cookie
	$update->execute([$healLose,$_COOKIE['idUser']]);
}
function looseHealInc(){
	global $bdd,$nLose,$nLose;
	$select = $bdd->query('select * from player');
	foreach ($select as $data){
		$healLose = $data['healLose'];
		$healWin = $data['healWin'];
	}
	if ($healLose == $nLose){
		$healLose = 0;
		$healWin = 0;
		$update = $bdd->prepare('UPDATE player set healLose=?,healLose=? WHERE idUser=?');
		$update->execute([$healWin,$healLose,$_COOKIE['idUser']]);
	}else{
		$healLose++;
		$update = $bdd->prepare('UPDATE player set healLose=? WHERE idUser=?');
		$update->execute([$healLose,$_COOKIE['idUser']]);
	}
}
//sublink reset
function resetAll(){
	global $bdd;
	$reset = 0;
	$update = $bdd->prepare('UPDATE player set tankWin=?,dpsWin=?,healWin=?,tankLose=?,dpsLose=?,healLose=? WHERE idUser=?');
	//Update change value by cookie
	$update->execute([$reset,$reset,$reset,$reset,$reset,$reset,$_COOKIE['idUser']]);
}