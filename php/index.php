<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PCView</title>
<LINK rel="stylesheet" type="text/css" href="UTBM/css/cssmenu.css">
</head>

<header id="header">
	<!-- Menu -->
	<div id="cssmenu">
		<ul id="onglets">
			<li class="active\"><a href="Accueil.html\"> Accueil </a></li>
			<li><a href="Forums.html"> Forums </a></li>
			<li><a href="Livre_or.html"> Livre d'or </a></li>
			<li><a href="Equipe.html"> L'�quipe </a></li>
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

<body>



	<?php

	require('class/FlotteParser.class.php');


	$parser = new FlotteParser();
	$flotte = $parser->parse();

	echo "<h2>Il y a " . count($flotte->getFlotte()) . " PC dans la flotte</h2>";
	
	echo "<FORM>";
	echo "<SELECT name=\"nom\" size=\"1\">";
	foreach ($flotte->getFlotte() as $PC) {
		echo "<OPTION>" . $PC->getName();
	}
	echo "</SELECT>";
	echo "</FORM>";

	$flotte->display();

	?>


</body>
<footer>
	<a href="#header" title="Haut de la page">Haut de la page</a>
</footer>
</html>
