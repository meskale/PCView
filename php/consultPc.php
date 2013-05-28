<?php
session_start();
/**
 * affichage des details relatif a un PC dont l'id est transmis par GET
 */


require_once 'FlotteParser.class.php';
$flotte = new FlotteParser("Flotte.xml");


$xpath = $flotte->getXpath();


$query ='PC[@id="'.$_GET["id"].'"]/Config';
$entries = $xpath->query($query);


//$pc = $flotte->getPcById($_GET["id"]);

$pc = $entries->item(0);

/**
* 	Methode classique DOM
*/

$stockage 		= $pc->getElementsByTagName("Stockage");
$interfaces 	= $pc->getElementsByTagName("Interface");
$peripheriques  = $pc->getElementsByTagName("Peripherique");
$cpu 			= $pc->getElementsByTagName("CPU");
$ram 			= $pc->getElementsByTagName("RAM");
$cm 			= $pc->getElementsByTagName("CM");
$gpu 			= $pc->getElementsByTagName("GPU");
$bios			= $pc->getElementsByTagName("BIOS");

/**
 * Methode XPath
*/
$stockage = $xpath->query('Stockages/Stockage',$pc);
$interfaces = $xpath->query('Interfaces/Interface',$pc);
$peripheriques = $xpath->query('Peripheriques/Peripherique',$pc);


?>
<!DOCTYPE html >
<html>
<title>PC View</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width"> 
</head>
<body>
	<div id="logo">
		<img src="img/logo1.png"
			style="position: absolute;"
			alt="logo en forme de pc IBM" />
		<header class="header">
		<h1>Consultation</h1>
		<a href="index.php">Retour au menu</a>
	</header>
	</div>

	
	<div id="content">
		<article id="hardware" >
			<header class="subheader">Mat&eacute;riel </header>
			<table>
				<tr>
					<td><strong>CPU </strong></td>
					<td>
						<p>
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
					</td>
				</tr>
				<tr>
					<td><strong>RAM </strong></td>
					<td>
						<p>
							<?php
							$ram = $ram->item(0);

							echo $ram->getElementsByTagName("TYPE")->item(0)->nodeValue." ";
							echo $ram->getElementsByTagName("Capacite")->item(0)->nodeValue." ";
							echo $ram->getElementsByTagName("Capacite")->item(0)->getAttribute("Unite")."@";
							echo $ram->getElementsByTagName("Freq")->item(0)->nodeValue;
							echo $ram->getElementsByTagName("Freq")->item(0)->getAttribute("Unite");

							?>
						</p>
					</td>
				</tr>
				<tr>
					<td><strong>Carte m&egrave;re </strong></td>
					<td>
						<p>
							<?php 
							$cm = $cm->item(0);

							echo " Socket ";
							echo $cm->getElementsByTagName("Socket")->item(0)->nodeValue;
							echo " Chipset ";
							echo $cm->getElementsByTagName("Chipset")->item(0)->nodeValue;

							?>
						</p>
					</td>
				</tr>
				<tr>
					<td><strong>Carte graphique </strong></td>
					<td>
						<p>

							<?php 
							$gpu = $gpu->item(0);

							echo $gpu->getAttribute("Nom")." @";
							echo $gpu->getElementsByTagName("Freq")->item(0)->nodeValue;
							echo $gpu->getElementsByTagName("Freq")->item(0)->getAttribute("Unite");

							echo "  ";

							$gram = $gpu->getElementsByTagName("RAM")->item(0);

							echo $gram->getElementsByTagName("TYPE")->item(0)->nodeValue." ";
							echo $gram->getElementsByTagName("Capacite")->item(0)->nodeValue." ";
							echo $gram->getElementsByTagName("Capacite")->item(0)->getAttribute("Unite")."@";
							echo $gram->getElementsByTagName("Freq")->item(0)->nodeValue;
							echo $gram->getElementsByTagName("Freq")->item(0)->getAttribute("Unite")." ";

							echo $gpu->getElementsByTagName("Connectique")->item(0)->getAttribute("Nom");
							?>
						</p>
					</td>
				</tr>
				<tr>
					<td><strong>BIOS </strong></td>
					<td>
						<p>
							<?php 
							$bios = $bios->item(0);

							echo "Version : ";
							echo $bios->getAttribute("Version");
							echo "  Nom : ";
							echo $bios->getAttribute("Nom");

							?>
						</p>
					</td>
				</tr>
			</table>
		</article>
		<article id="config">
			<header class="subheader">
				D&eacute;tails g&eacute;n&eacute;ral de <strong><?php echo $_GET["id"]; ?>
				</strong>
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

