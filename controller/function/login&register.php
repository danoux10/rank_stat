<?php
include_once '../../config/database.php';

 if(array_key_exists('task',$_GET)){
	 $task = $_GET['task'];
 }

if($task == 'register'){
	register();
}

if($task == 'login'){
	 login();
 }

if($task == 'deconnexion'){
	deconnexion();
}

function register(){
	global $bdd;
	$verifRegister = null;
	$pseudoRegister = htmlspecialchars($_POST['data-register']);
	$verifPseudo = $bdd->prepare('SELECT * FROM player WHERE pseudo=?');
	$verifPseudo->execute([$pseudoRegister]);
	foreach ($verifPseudo as $data){
		$verifRegister = $data['pseudo'];
	}
	if($verifRegister == null){
		$addPseudo = $bdd->prepare('INSERT INTO player set pseudo=?');
		$addPseudo->execute([$pseudoRegister]);
		$success = 1;
	}else{
		$success = 0;
	}
	$res = ["sucReg" =>$success];
	echo json_encode($res);
}

function login(){
	global $bdd;
	$pseudo = null;
	$pseudoLogin = htmlspecialchars($_POST['data-login']);
	$verifPseudo = $bdd->prepare('SELECT * FROM player WHERE pseudo=?');
	$verifPseudo->execute([$pseudoLogin]);
	foreach ($verifPseudo as $data){
		$pseudo = $data['pseudo'];
		$idUser = $data['idUser'];
	}
	if($pseudoLogin === $pseudo){
		$success = 1;
		//Edit add cookie userId
		setcookie('idUser',$idUser,time()+(20*365*24*60*60),'/');
	}else{
		$success = 0;
	}
	$res =["sucLog" =>$success];
	echo json_encode($res);
}

function deconnexion(){
	$success = 1;
	setcookie('idUser',null,time()*(20*365*24*60*60),'/');
	$rep =["sucDec"=>$success];
	echo json_encode($rep);
}