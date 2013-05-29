<?php

	$voiture["marque"] = "BMW";
	$voiture["modele"] = "X6";
	
	$moteur["chevaux"] = 300;
	$moteur["cvfisc"] = 8;
	$moteur["type"] = "Diesel";
	
	$voiture["moteur"] = $moteur;
	$voiture["nbPlaces"] = 5;
	
	for ( $i = 0 ; $i < $voiture["nbPlaces"] ; $i++ ) {
		$passager[$i] = "Passager N° " . $i ;
	}
	
	$voiture["passagers"] = $passager;
	
	echo "Voiture : " . $voiture["marque"] . " " . $voiture["modele"] . "</br>";
	echo "	- Moteur : " . $moteur["type"] . " / " . $moteur["chevaux"] . " chevaux / " . $moteur["cvfisc"] . " chevaux fiscaux" . "</br>";
	echo "	- Places : " . $voiture["nbPlaces"] . " dont " . count($passager) . " places prises";
	
?>