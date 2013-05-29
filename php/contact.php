<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PCView</title>
<LINK rel="stylesheet" type="text/css" href="css/cssmenu.css">
<LINK rel="stylesheet" type="text/css" href="css/pclist.css">
</head>


<body>

	<header id="header">
		<!-- Menu -->
		<div id="cssmenu">
			<ul id="onglets">
				<li class="active\"><a href="../index.php"> Accueil </a></li>
				<li><a href="contact.php"> Contact </a></li>
				<li><a href="Livre_or.html"> Livre d'or </a></li>
				<li><a href="Equipe.html"> L'équipe </a></li>
				<li><a href="Inscription.html"> S'inscrire </a></li>
				<li><a href="Connexion.html"> Se connecter </a></li>
				<li class='has-sub'><a href='#'><span>Products</span> </a>
					<ul>
						<li><a href='#'><span>Product 1</span> </a></li>
						<li class='last'><a href='#'><span>Product 2</span> </a></li>
					</ul>
				</li>
			</ul>
		</div>
	</header>


	<div id="content">

		<form action="#">
			<p>
				<label for="nom">Votre nom : </label> <input required="required"
					type="text" id="nom" name="nom" placeholder="Entrez votre nom" />
			</p>

			<p>
				<label for="prenom">Votre prénom : </label> <input
					required="required" type="text" id="prenom" name="prenom"
					placeholder="Entrez votre prénom" />
			</p>

			<p>
				<label for="email">Votre adresse email : </label> <input
					required="required" type="email" id="nom" name="email"
					placeholder="Entrez votre email" />
			</p>

			<p>
				<label for="tel">Votre numéro de téléphone : </label> <input
					required="required" type="tel" id="tel" name="tel"
					placeholder="03 03 03 03 03" />
			</p>

			<p>
				<label for="age">Votre âge : </label> <input required="required"
					type="number" id="age" name="age" placeholder="Entrez votre âge" />
			</p>

			<p>
				<label for="message">Votre nom : </label>
				<textarea id="message" name="message"
					placeholder="Entrez votre message ici">Message</textarea>
			</p>
		</form>
	</div>

	<footer>

		<br />
		 4 rue des Jasmins <br />
		<span class="cp">68190</span> <span class="city">ENSISHEIM</span>
		<p class="telmail">
			<span class="tel"> <span class="intitule">Téléphone : </span>06 66 79
				17 62
			</span> <br /> <span class="mail"> <span class="intitule">Mail : </span>cebim68@gmail.com
			</span>
		</P>

		<br /> <a href="#header" title="Haut de la page">Haut de la page</a>
	</footer>
</body>
</html>
