<?php
session_start();
require_once 'FlotteParser.class.php';
$flotte = new FlotteParser("Flotte.xml");


if(isset($_POST['filtre']))
	$_SESSION['filtre']=$_POST['filtre'];


$pcs = $flotte->getPcList($_SESSION["filtre"]);


$nbpc =$pcs->length;

//On veut quel page
if(isset($_GET["page"]))
	$page = ($_GET["page"]!="")?$_GET["page"]:1;
else
	$page= 1;

//On desire changer le nombre d'ŽlŽment par page ?
if(isset($_POST['nbpcpp']) )
{
	$_SESSION['nbpcpp']=$_POST['nbpcpp'];
	$nbpcpp = $_SESSION['nbpcpp'];
}
else {
	if(isset($_SESSION["nbpcpp"])){
		$nbpcpp = $_SESSION['nbpcpp'];
	}else{
		$nbpcpp = 5;
	}
}

$nbpg = ceil($nbpc/$nbpcpp); //nombre de page

?>

<!DOCTYPE html >
<html>
<title>PC View</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width"> 
</head>
<body >
	<div id="logo">
		<img src="img/logo1.png"
			style="position: absolute;"
			alt="logo en forme de pc" />
		<header class="header">
			<h1>Bienvenue sur l'interface de consultation des PCs</h1>
		<form id='formFiltre' action="index.php" method="post">
			<input type="text" name="filtre" size="20" value="<?php echo $_SESSION['filtre'];?>" />
			<input type="submit" value="chercher " />
		</form>
		
		</header>
	</div>

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
							//retrait des itŽrations superflue, pour les pages partiels
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
				<td class="centerCell"><?php 
				for($j=0;$j<$nbpg;$j++){
						echo "<a href=\"index.php?page=".($j+1)."\" >".($j+1)."</a>&nbsp;&nbsp;";
						}
						?>
					<form id="param" name="param" action='index.php'
						onchange="document.forms['param'].submit()" method="post">
						<select name="nbpcpp">
							<option value="3"
							<?php echo ($nbpcpp==3)?"selected='selected'":""; ?>>3</option>
							<option value="5"
							<?php echo ($nbpcpp==5)?"selected='selected'":""; ?>>5</option>
							<option value="10"
							<?php echo ($nbpcpp==10)?"selected='selected'":""; ?>>10</option>
							<option value="20"
							<?php echo ($nbpcpp==20)?"selected='selected'":""; ?>>20</option>
						</select>
						<button id="bs" type="submit">Appliquer</button>
					</form>
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

