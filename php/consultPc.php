<?php
require_once 'FlotteParser.class.php';
$flotte = new FlotteParser("Flotte.xml");
?>
<!DOCTYPE html >
<html>

<title>PC View</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta charset="UTF-8" />
</head>
<body>


	<header class="header">
		<h1>
			Consultation du pc
			<?php echo $_GET["id"]; ?>

		</h1>
		<a href="index.php">Retour au menu</a>
	</header>
	<div id="content">

		<div id="config">
			<header class="header"> Details de la config </header>
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
				$stockage = $flotte->getPcById($_GET["id"])->getElementsByTagName("Stockage");
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
				$interfaces = $flotte->getPcById($_GET["id"])->getElementsByTagName("Interface");
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
				$peripheriques = $flotte->getPcById($_GET["id"])->getElementsByTagName("Peripherique");
				foreach($peripheriques as $pe){
		echo "<tr><td>".$pe->getAttribute("Nom")."</td>";
		echo "<td>".$pe->getElementsByTagName("Connectique")->item(0)->getAttribute("Nom")."</td>" ;
		echo "<td>".$pe->getElementsByTagName("TYPE")->item(0)->nodeValue."</td>";

		echo "</tr>";
}
?>
			</table>
		</div>
	</div>