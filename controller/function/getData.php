<?php
include_once '../../config/database.php';

$allData = $bdd->prepare('SELECT * FROM player WHERE idUser=?');
//Update change value by cookie
$allData->execute([$_COOKIE['idUser']]);
foreach ($allData as $data) {
	$pseudo = $data['pseudo'];
	$tankWin = $data['tankWin'];
	$dpsWin = $data['dpsWin'];
	$healWin = $data['healWin'];
	$tankLoose = $data['tankLose'];
	$dpsLoose = $data['dpsLose'];
	$healLoose = $data['healLose'];
	
}

$response =
	[
		'pseudo' => $pseudo,
		'tankWin' => $tankWin,
		'dpsWin' => $dpsWin,
		'healWin' => $healWin,
		'tankLoose' => $tankLoose,
		'dpsLoose' => $dpsLoose,
		'healLoose' => $healLoose,
	];
echo json_encode($response);