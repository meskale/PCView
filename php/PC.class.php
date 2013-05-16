<?php

class PC{

	private $id;

	private $info = array(
			"Nom" => 0
			,"Modele" => 0
	);

	private $config = array
	(
			"Stockages" => array
			(
					array
					(
							"Nom" => "nom du disque"
							,"Support" => "type de support"
							,"Connectique" => "SATA"
							,"Capacite" => array
							(
									"Unite" => "Go"
									,"Size" => 10
							)
					)
			)
			,"Peripheriques" => array
			(
					array
					(
							"Nom" => "nom du peripherique"
							,"Connectique" => "Connectique du peripherique"
							,"TYPE" => "type de peripherique"
					)
			)
			,"CPU" => array
			(
					"Nom" => "nom du cpu"
					,"Freq" => array
					(
							"Unite" => "Ghz"
							,"Speed" => ""
					)
					,"Cache" => array
					(
							array
							(
									"Niveau" => "Niveau du cache"
									,"Capacite" => array
									(
											"Unite" => "Mo"
											,"Size" => "2"
									)
							)
					)
					,"Arch" => "x64"
			)
			,"RAM" => array
			(
					"Freq" => array
					(
							"Unite" => "Mhz"
							,"Speed" => 2000
					)
					,"Capacite" => array
					(
							"Unite" => "Go"
							,"Size" => 16
					)
					,"TYPE" => "DDR4"
			)
			,"CM" => array
			(
					"Chipset" => "z77"
					,"Socket" => ""
			)
			,"GPU" => array
			(
					"Nom" => "nom du gpu"
					,"Freq" => array
					(
							"Unite" => "Ghz"
							,"Speed" => ""
					)
					,"RAM" => array
					(
							"Freq" => array
							(
									"Unite" => "Mhz"
									,"Speed" => 2000
							)
							,"Capacite" => array
							(
									"Unite" => "Go"
									,"Size" => 16
							)
							,"TYPE" => "DDR4"
					)
			)
			,"BIOS" => array
			(
					"Version" => "1.0"
					,"Nom" => "Phoenix Bios"
			)
	);
}

?>
