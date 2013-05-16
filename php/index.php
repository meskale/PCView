<?php
require_once 'FlotteParser.class.php';
$flotte = new FlotteParser("Flotte.xml");

echo '<?xml version="1.0" encoding="UTF-8" ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';

?>

<title>PC View</title>
</head><body>
<h1>Bienvenue sur l'interface de consultation de la flotte</h1>

<table>
<tr><th>Nom des pc</th></tr>
<tr><td><ul>
<?php 
$pcs =$flotte->getPcList();
    for($i=0;$i<count($pcs)+1;$i++){
    	echo "<li><a href='consultPc.php?id=";
		echo $pcs->item($i)->getAttribute("id")."'>";
		echo $pcs->item($i)->getElementsByTagName("Nom")->item(0)->nodeValue;
		echo "</a></li>";
		}
?>   
</ul></td></tr></table></body></html>

