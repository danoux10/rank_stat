<?php
include_once '../../config/database.php';

$nWin = 4;
$nLoose = 14;

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
	global $bdd,$nWin,$nLoose;
	$select = $bdd->query('select * from player');
	foreach ($select as $data){
		$tankWin = $data['tankWin'];
		$tankLoose = $data['tankLoose'];
	}
	if ($tankWin == $nWin){
		$tankWin = 0;
		$tankLoose = 0;
		$update = $bdd->prepare('UPDATE player set tankWin=?,tankLoose=? WHERE idUser=?');
		$update->execute([$tankWin,$tankLoose,$_COOKIE['idUser']]);
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
		$tankLoose = $data['tankLoose'];
	}
	if ($tankLoose == 0){
		$tankLoose = 0;
	}else{
		$tankLoose--;
	}
	
	$update = $bdd->prepare('UPDATE player set tankLoose=? WHERE idUser=?');
	//Update change value by cookie
	$update->execute([$tankLoose,$_COOKIE['idUser']]);
}
function looseTankInc(){
	global $bdd,$nLoose,$nLoose;
	$select = $bdd->query('select * from player');
	foreach ($select as $data){
		$tankLoose = $data['tankLoose'];
		$tankWin = $data['tankWin'];
	}
	if ($tankLoose == $nLoose){
		$tankLoose = 0;
		$tankWin = 0;
		$update = $bdd->prepare('UPDATE player set tankLoose=?,tankLoose=? WHERE idUser=?');
		$update->execute([$tankWin,$tankLoose,$_COOKIE['idUser']]);
	}else{
		$tankLoose++;
		$update = $bdd->prepare('UPDATE player set tankLoose=? WHERE idUser=?');
		$update->execute([$tankLoose,$_COOKIE['idUser']]);
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
	global $bdd,$nWin,$nLoose;
	$select = $bdd->query('select * from player');
	foreach ($select as $data){
		$dpsWin = $data['dpsWin'];
		$dpsLoose = $data['dpsLoose'];
	}
	if ($dpsWin == $nWin){
		$dpsWin = 0;
		$dpsLoose = 0;
		$update = $bdd->prepare('UPDATE player set dpsWin=?,dpsLoose=? WHERE idUser=?');
		$update->execute([$dpsWin,$dpsLoose,$_COOKIE['idUser']]);
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
		$dpsLoose = $data['dpsLoose'];
	}
	if ($dpsLoose == 0){
		$dpsLoose = 0;
	}else{
		$dpsLoose--;
	}
	
	$update = $bdd->prepare('UPDATE player set dpsLoose=? WHERE idUser=?');
	//Update change value by cookie
	$update->execute([$dpsLoose,$_COOKIE['idUser']]);
}
function looseDpsInc(){
	global $bdd,$nLoose,$nLoose;
	$select = $bdd->query('select * from player');
	foreach ($select as $data){
		$dpsLoose = $data['dpsLoose'];
		$dpsWin = $data['dpsWin'];
	}
	if ($dpsLoose == $nLoose){
		$dpsLoose = 0;
		$dpsWin = 0;
		$update = $bdd->prepare('UPDATE player set dpsLoose=?,dpsLoose=? WHERE idUser=?');
		$update->execute([$dpsWin,$dpsLoose,$_COOKIE['idUser']]);
	}else{
		$dpsLoose++;
		$update = $bdd->prepare('UPDATE player set dpsLoose=? WHERE idUser=?');
		$update->execute([$dpsLoose,$_COOKIE['idUser']]);
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
	global $bdd,$nWin,$nLoose;
	$select = $bdd->query('select * from player');
	foreach ($select as $data){
		$healWin = $data['healWin'];
		$healLoose = $data['healLoose'];
	}
	if ($healWin == $nWin){
		$healWin = 0;
		$healLoose = 0;
		$update = $bdd->prepare('UPDATE player set healWin=?,healLoose=? WHERE idUser=?');
		$update->execute([$healWin,$healLoose,$_COOKIE['idUser']]);
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
		$healLoose = $data['healLoose'];
	}
	if ($healLoose == 0){
		$healLoose = 0;
	}else{
		$healLoose--;
	}
	
	$update = $bdd->prepare('UPDATE player set healLoose=? WHERE idUser=?');
	//Update change value by cookie
	$update->execute([$healLoose,$_COOKIE['idUser']]);
}
function looseHealInc(){
	global $bdd,$nLoose,$nLoose;
	$select = $bdd->query('select * from player');
	foreach ($select as $data){
		$healLoose = $data['healLoose'];
		$healWin = $data['healWin'];
	}
	if ($healLoose == $nLoose){
		$healLoose = 0;
		$healWin = 0;
		$update = $bdd->prepare('UPDATE player set healLoose=?,healLoose=? WHERE idUser=?');
		$update->execute([$healWin,$healLoose,$_COOKIE['idUser']]);
	}else{
		$healLoose++;
		$update = $bdd->prepare('UPDATE player set healLoose=? WHERE idUser=?');
		$update->execute([$healLoose,$_COOKIE['idUser']]);
	}
}
//sublink reset
function resetAll(){
	global $bdd;
	$reset = 0;
	$update = $bdd->prepare('UPDATE player set tankWin=?,dpsWin=?,healWin=?,tankLoose=?,dpsLoose=?,healLoose=? WHERE idUser=?');
	//Update change value by cookie
	$update->execute([$reset,$reset,$reset,$reset,$reset,$reset,$_COOKIE['idUser']]);
}