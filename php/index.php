<?php
session_start();
require_once 'FlotteParser.class.php';
$flotte = new FlotteParser("Flotte.xml");

$pcs =$flotte->getPcList();
$nbpc =$pcs->length;
$nbpcpp = 6; //nombre de pc par page
$nbpg = ceil($nbpc/$nbpcpp); //nombre de page

if(isset($_GET["page"]))
	$page = ($_GET["page"]!="")?$_GET["page"]:1;
else
	$page= 1;

?>

<!DOCTYPE html >
<html>

<title>PC View</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta charset="UTF-8" />
</head>

<body>
	<img src="img/logo1.png" id="logo" alt="logo en forme de pc IBM" />
	<header class="header">
		<h1>Bienvenue sur l'interface de consultation des PCs</h1>
	</header>
	<div id="content">
		<table class="tab" id="tabPc">
			<tr>
				<th>Liste de pc</th>
			</tr>
			<tr>
				<td>
					<nav id="listPc">
						<ul>
							<?php 
							
							$startIndex = 	($page-1)*$nbpcpp ;
							$endIndex = $page*$nbpcpp;
							$endIndex -= (($endIndex-$nbpc)>0)?($endIndex-$nbpc):0;
							
							for($i=$startIndex; $i< $endIndex ;$i++){
    	echo "<li><a href='consultPc.php?id=";
    	echo $pcs->item($i)->getAttribute("id")."'>";
    	echo $pcs->item($i)->getElementsByTagName("Nom")->item(0)->nodeValue;
    	echo "</a></li>";
		}
		?>
						</ul>
					</nav>
				</td>
			</tr>
			<tr>
				<td align="center">
				
				<?php 
				for($j=0;$j<$nbpg;$j++){
						echo "<a href=\"index.php?page=".($j+1)."\" >".($j+1)."</a>&nbsp;&nbsp;";
						}
						?>
				</td>
			</tr>
		</table>
	</div>
	<footer>
		Site r&eacute;aliser par <a href="mailto:johannystrugala@free.fr">Jojo
			lapatate &#169;</a>
	</footer>
</body>
</html>

