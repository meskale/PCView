<?php
require_once 'FlotteParser.class.php';
$flotte = new FlotteParser("Flotte.xml");
?>
<!DOCTYPE html >
<html>
<meta charset="UTF-8" />
<title>PC View</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta charset="UTF-8" />
</head>
<body>
	<header class="header">
		<h1>Bienvenue sur l'interface de consultation de la flotte</h1>

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
							$pcs =$flotte->getPcList();
							for($i=0;$i<$pcs->length;$i++){
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
		</table>
	</div>
</body>
</html>

