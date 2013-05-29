<?php

	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$age = $_POST["age"];
	$sexe = ($_POST["sexe"] == "Homme") ? true : false;
	$villeResidence = $_POST["villeResidence"];
	$villeNaissance = $_POST["villeNaissance"];
	
	echo "Salut ! Je suis " . (($sexe) ? "un garçon" : "une fille") . ". Je m'apelle " . $nom . " " . $prenom . ", j'ai " . $age . " ans, je suis née à " . $villeNaissance . " et j'habite à " . $villeResidence;
	
?>
	