<?php

/**
 *	@desc
 *	@package
 *	@var		type	nom		desc
 *	@copyright
 *	@version 	1.0
 *	@since		1.0
 */
class Flotte {


	public function Flotte() {
		$PCArray;

	}

	public function addPC($pc) {
		$this->PCArray[] = $pc;
	}

	public function getFlotte() {
		return $this->PCArray;
	}

	public function display() {
		foreach($this->getFlotte() as $i => $ua) {
			echo "<h1>PC " . ($i+1) . " : " .$ua->getName() . "</h1></br>";

			echo "<blockquote><h2>Stockages : </h2></blockquote></br>";

			for ( $i = 0 ; $i < count($ua->getStockages()) ; $i++) {
				echo " 		Stockage " . ($i+1) . " : </br>" ;
				foreach($ua->getStockages()[$i] as $stoParam) {
					echo "<blockquote><blockquote>" . $stoParam . "</br></blockquote></blockquote>";
				}

			}

			echo "<blockquote><h2>Interfaces : </h2>  </blockquote></br>";

			for ( $i = 0 ; $i < count($ua->getInterfaces()) ; $i++) {
				echo " 		Interface " . ($i+1) . " : </br>" ;
				foreach($ua->getInterfaces()[$i] as $intParam) {
					echo "<blockquote><blockquote>" . $intParam . "</br></blockquote></blockquote>";
				}

			}

			echo "<blockquote><h2>Périphériques : </h2></blockquote></br>";

			for ( $i = 0 ; $i < count($ua->getPeripheriques()) ; $i++) {
				echo " 		Périphérique " . ($i+1) . " : </br>" ;
				foreach($ua->getPeripheriques()[$i] as $perParam) {
					echo "<blockquote><blockquote>" . $perParam . "</br></blockquote></blockquote>";
				}

			}

			echo "<blockquote><h2>CPU : </h2></blockquote></br>";

			foreach($ua->getCPU() as $cpuParam) {
				echo "<blockquote><blockquote>" . $cpuParam . "</br></blockquote></blockquote>";
			}

			echo "<blockquote><h2>Carte Mère : </h2></blockquote></br>";

			foreach($ua->getCM() as $cmParam) {
				echo "<blockquote><blockquote>" . $cmParam . "</br></blockquote></blockquote>";
			}

			echo "<blockquote><h2>RAM : </h2></blockquote></br>";

			foreach($ua->getRAM() as $ramParam) {
				echo "<blockquote><blockquote>" . $ramParam . "</br></blockquote></blockquote>";
			}

			echo "<blockquote><h2>GPU : </h2></blockquote></br>";

			foreach($ua->getGPU() as $gpuParam) {
				echo "<blockquote><blockquote>" . $gpuParam . "</br></blockquote></blockquote>";
			}

			echo "<blockquote><h2>BIOS: </h2></blockquote></br>";

			foreach($ua->getBIOS() as $biosParam) {
				echo "<blockquote><blockquote>" . $biosParam . "</br></blockquote></blockquote>";
			}

			echo "<blockquote><h2>Softwares : </h2></blockquote></br>";

			for ( $i = 0 ; $i < count($ua->getSoftwares()) ; $i++) {
				echo " 		Soft " . ($i+1) . " : </br>" ;
				foreach($ua->getSoftwares()[$i] as $softParam) {
					echo "<blockquote><blockquote>" . $softParam . "</br></blockquote></blockquote>";
				}

			}


			echo "<blockquote><h2>OS : </h2></blockquote></br>";

			foreach($ua->getOS() as $osParam) {
				echo "<blockquote><blockquote>" . $osParam . "</br></blockquote></blockquote>";
			}
		}
	}
}

?>