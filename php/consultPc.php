<?php

/**
 * affichage des details relatif a un PC dont l'id est transmis par GET
 */

//récupération des sous arbres
require_once 'FlotteParser.class.php';
$flotte = new FlotteParser("Flotte.xml");

$pc = $flotte->getPcById($_GET["id"]);
$stockage = $pc->getElementsByTagName("Stockage");
$interfaces = $pc->getElementsByTagName("Interface");
$peripheriques = $pc->getElementsByTagName("Peripherique");
$cpu = $pc->getElementsByTagName("CPU");
$ram = $pc->getElementsByTagName("RAM");

?>
<!DOCTYPE html >
<html>

<title>PC View</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta charset="UTF-8" />
</head>
<body>

	<img src="img/logo.png" id="logo" alt="logo en forme de pc IBM" />
	<header class="header">
		<h1>Consultation</h1>
		<a href="index.php">Retour au menu</a>
	</header>
	<div id="content">
		<article id="hardware">

			<!-- 			<CPU Nom="i7">
				<Freq Unite="GHz">3.4</Freq>
				<Cache Niveau="lvl1">
					<Capacite Unite="Mo">2</Capacite>
				</Cache>
				
				<NbCore>4</NbCore>
			  <Arch Nom="x64"/>
			</CPU>
-->
			<p>
				CPU :
				<?php
				$cpu = $cpu->item(0);


				echo $cpu->getAttribute("Nom")." ";
				echo $cpu->getElementsByTagName("NbCore")->item(0)->nodeValue."core@";
				echo $cpu->getElementsByTagName("Freq")->item(0)->nodeValue;
				echo $cpu->getElementsByTagName("Freq")->item(0)->getAttribute("Unite")." ";

				foreach ($cpu->getElementsByTagName("Cache") as $cache ){
					echo "cache ";
					echo $cache->getAttribute("Niveau")." : ";
					echo $cache->getElementsByTagName("Capacite")->item(0)->nodeValue." ";
					echo $cache->getElementsByTagName("Capacite")->item(0)->getAttribute("Unite")." ";

				}
				?>
			</p>
			<p>
				RAM :
				<?php
				$ram = $ram->item(0);

				echo $ram->getElementsByTagName("TYPE")->item(0)->nodeValue." ";
				echo $ram->getElementsByTagName("Capacite")->item(0)->nodeValue." ";
				echo $ram->getElementsByTagName("Capacite")->item(0)->getAttribute("Unite")."@";
				echo $ram->getElementsByTagName("Freq")->item(0)->nodeValue;
				echo $ram->getElementsByTagName("Freq")->item(0)->getAttribute("Unite");
					
				?>
			</p>
			<p>
			
			</p>
		</article>
		<article id="config">
			<header class="subheader">
				D&eacute;tails g&eacute;n&eacute;ral de &lt;
				<?php echo $_GET["id"]; ?>
				&gt;
			</header>
			<table class="tab">
				<tr>
					<th colspan="4">Stockages</th>
				
				
				<tr>
					<th>Disque</th>
					<th>Taille</th>
					<th>Support</th>
					<th>Connectique</th>
				</tr>
				<?php

				foreach($stockage as $dd){
		echo "<tr><td>".$dd->getAttribute("Nom")."</td>";
		echo "<td>".$dd->nodeValue;
		echo $dd->getElementsByTagName("Capacite")->item(0)->getAttribute("Unite")."</td>";
		echo "<td>".$dd->getElementsByTagName("Support")->item(0)->getAttribute("Nom")."</td>";
		echo "<td>".$dd->getElementsByTagName("Connectique")->item(0)->getAttribute("Nom")."</td></tr>";
}
?>
			</table>
			<table class="tab">
				<tr>
					<th colspan="6">Interfaces</th>
				</tr>
				<tr>
					<th>Nom</th>
					<th>Type</th>
					<th>MAC</th>
					<th>IP</th>
					<th>Masque</th>
					<th>Passerelle</th>
				</tr>
				<?php

				foreach($interfaces as $in){
		echo "<tr><td>".$in->getAttribute("Nom")."</td>";
		echo "<td>".$in->getElementsByTagName("TYPE")->item(0)->nodeValue."</td>" ;
		echo "<td>".$in->getElementsByTagName("MAC")->item(0)->nodeValue."</td>";
		echo "<td>".$in->getElementsByTagName("IPV4")->item(0)->nodeValue."</td>";
		echo "<td>".$in->getElementsByTagName("SUBNET")->item(0)->nodeValue."</td>";
		echo "<td>".$in->getElementsByTagName("GATEWAY")->item(0)->nodeValue."</td>";
		echo "</tr>";
}
?>
			</table>
			<table class="tab">
				<tr>
					<th colspan="3">Peripheriques</th>
				</tr>
				<tr>
					<th>Nom</th>
					<th>Connectique</th>
					<th>Type</th>
				</tr>
				<?php

				foreach($peripheriques as $pe){
		echo "<tr><td>".$pe->getAttribute("Nom")."</td>";
		echo "<td>".$pe->getElementsByTagName("Connectique")->item(0)->getAttribute("Nom")."</td>" ;
		echo "<td>".$pe->getElementsByTagName("TYPE")->item(0)->nodeValue."</td>";
		echo "</tr>";
}
?>
			</table>
		</article>
	</div>
	<footer>
		Site r&eacute;aliser par <a href="mailto:johannystrugala@free.fr">Jojo
			lapatate &#169;</a>
	</footer>
</body>
</html>

