<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport"
	content="user-scalable=no, initial-scale = 1, minimum-scale = 1, maximum-scale = 1, width=device-width">
<title>PCView</title>
<LINK rel="stylesheet" type="text/css" href="PCView/css/cssmenu.css">
</head>


<body>

	<header id="header">
		<!-- Menu -->
		<div id="cssmenu">
			<ul id="onglets">
				<li class="active\"><a href="index.php"> Accueil </a></li>
				<li><a href="PCView/contact.php"> Contact </a></li>
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
		<!-- Menu -->
	</header>


	<div id="content">

		<?php

		require('class/FlotteParser.class.php');


		$parser = new FlotteParser();
		$flotte = $parser->parse();

		echo "<div id=\"pccount\"><h2>Il y a " . count($flotte->getFlotte()) . " PC dans la flotte</h2></div>";

		?>

		<?php

		echo "<FORM action=\".\" method=\"GET\"> ";

		echo "<SELECT action=\"./?pc=\" name=\"pc\" size=\"7\">";
		foreach ($flotte->getFlotte() as $PC) {
		$pcname = $PC->getName();
		echo "<OPTION type=\"submit\" value=\"";echo $pcname . "\">" . $pcname;
		}



		?>

		<noscript>
			<p>
				<input id="label" type="submit" value="OK" />
			</p>
		</noscript>

		<?php 

		echo "</SELECT>";
		echo "</FORM>";

		if (isset($_GET["pc"])) {
// 			echo $_GET["pc"];
			$name = urldecode($_GET["pc"]);
			$flotte->displayByName($name);
		}

		?>

	</div>

	<footer>

		<br /> 4 rue des Jasmins <br /> <span class="cp">68190</span> <span
			class="city">ENSISHEIM</span>
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
