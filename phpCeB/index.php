<?php

require('class/FlotteParser.class.php');

$menuStyle = "<LINK rel=\"stylesheet\" type=\"text/css\" href=\"UTBM/css/cssmenu.css\">";

echo $menuStyle;

$menu = "<div id=\"cssmenu\">
		<ul id=\"onglets\">
		<li class=\"active\"><a href=\"Accueil.html\"> Accueil </a></li>
		<li><a href=\"Forums.html\"> Forums </a></li>
		<li><a href=\"Livre_or.html\"> Livre d'or </a></li>
		<li><a href=\"Equipe.html\"> L'équipe </a></li>
		<li><a href=\"Inscription.html\"> S'inscrire </a></li>
		<li><a href=\"Connexion.html\"> Se connecter </a></li>
		<li class='has-sub'><a href='#'><span>Products</span></a>
			<ul>
				<li><a href='#'><span>Product 1</span></a></li>
				<li class='last'><a href='#'><span>Product 2</span></a></li>
			</ul>
		</li>
		</ul>
		</div>";

echo $menu;

$parser = new FlotteParser();
$flotte = $parser->parse();

$flotte->display();

?>
