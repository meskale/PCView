<?php 
	
	echo '
		<form action="#">
			<p>
				<label for="nom" >Votre nom : </label>
				<input required="required" type="text" id="nom" name="nom" placeholder="Entrez votre nom" />
			</p>
			
			<p>
				<label for="prenom" >Votre prénom : </label>
				<input required="required" type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" />
			</p>
			
			<p>
				<label for="email" >Votre adresse email : </label>
				<input required="required" type="email" id="nom" name="email" placeholder="Entrez votre email" />
			</p>
			
			<p>
				<label for="tel" >Votre numéro de téléphone : </label>
				<input required="required" type="tel" id="tel" name="tel" placeholder="03 03 03 03 03" />
			</p>
			
			<p>
				<label for="age" >Votre âge : </label>
				<input required="required" type="number" id="age" name="age" placeholder="Entrez votre âge" />
			</p>
			
			<p>
				<label for="message" >Votre nom : </label>
				<textarea id="message" name="message" placeholder="Entrez votre message ici" />
			</p>
			';
	
?>