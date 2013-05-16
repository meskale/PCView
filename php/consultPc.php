<?php
require_once 'FlotteParser.class.php';
$flotte = new FlotteParser("Flotte.xml");

echo '<?xml version="1.0" encoding="UTF-8" ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml"><head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
?>



<h1>Consultation du pc</h1>

<table border="1">
	<caption>
		Details du pc
		<?php echo $_GET["id"] ?>
	</caption>
	<tr>
		<th>Disque</th>
		<th>Taille</th>
	</tr>
	
<?php
	$stockage = $flotte->getPcById($_GET["id"])->getElementsByTagName("Stockage");

	foreach($stockage as $dd){
		echo "<tr><td>".$dd->getAttribute("Nom")."</td>";
		echo "<td>".$dd->nodeValue;
		echo $dd->getElementsByTagName("Capacite")->item(0)->getAttribute("Unite")."</td></tr>";
}

?>
</table>
