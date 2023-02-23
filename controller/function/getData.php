<?php
include_once '../../config/database.php';

$allData = $bdd->prepare('SELECT * FROM player WHERE idUser=?');
//Update change value by cookie
$allData->execute([$_COOKIE['idUser']]);
foreach ($allData as $data){
	$pseudo = $data['pseudo'];
	$tank = $data['tankData'];
	$dps = $data['dpsData'];
	$heal = $data['healData'];
}

$response = ['pseudo'=>$pseudo, 'tank'=>$tank, 'dps'=>$dps, 'heal'=>$heal];
echo json_encode($response);