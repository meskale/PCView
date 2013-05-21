<?php

/**
 *	@desc
 *	@package
 *	@var		type	nom		desc
 *	@copyright
 *	@version 	1.0
 *	@since		1.0
 */
class MenuFactory {

	private $menu;
	private $menuItem;
	private $subMenuItem;


	public function MenuFactory() {
		$menu = "<div id=\"cssmenu\">
		<ul id=\"onglets\">
		<li class=\"active\"><a href=\"Accueil.html\"> Accueil </a></li>";

	}
	


	public function addMenu($menu, $menuAction, $submenu, $submenuAction ) {
// 		foreach ($menu as $i -> $item) {
// 			$menu += "<li><a href=" . $menuAction[$i] . "> ". $item . " </a></li>";
// 			if (count($submenu) > 0) $menu += "<ul>";
// 			foreach ($submenu as $i -> $subitem) {
// 				$menu += "<li><a href=" . submenuAction[$i] . "><span>Product 1</span></a></li>";
// 			}
// 			if (count($submenu) > 0) $menu += "</ul>";
// // 			</li>
// 		}
	}

}

?>