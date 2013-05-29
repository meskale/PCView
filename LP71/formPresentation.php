<?php 
echo '
	<p>
				Entrer les infos :
			</p>
		 
			<form action="UTBM\Presentation.php" method="POST">
			<p>
				<input value="Nom" type="text" name="nom" />
				<input value="Prenom" type="text" name="prenom" />
				Age :
				<input value="Age" type="number" name="age" />
				Homme :
				<input value="Homme" type="radio" name="sexe" />
				Femme :
				<input value="Femme" type="radio" name="sexe" />
				<input value="Ville de Résidence" type="text" name="villeResidence" />
				<input value="Ville de Naissance" type="text" name="villeNaissance" />
				<input type="submit" value="Valider" />
			</p>
		</form>	';
?>