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
				foreach($ua->getStockages()[$i] as $key => $stoParam) {
					echo "<blockquote><blockquote>" . $key . " : " . $stoParam . "</br></blockquote></blockquote>";
				}

			}

			echo "<blockquote><h2>Interfaces : </h2>  </blockquote></br>";

			for ( $i = 0 ; $i < count($ua->getInterfaces()) ; $i++) {
				echo " 		Interface " . ($i+1) . " : </br>" ;
				foreach($ua->getInterfaces()[$i] as $key => $intParam) {
					echo "<blockquote><blockquote>" . $key . " : " . $intParam . "</br></blockquote></blockquote>";
				}

			}

			echo "<blockquote><h2>Périphériques : </h2></blockquote></br>";

			for ( $i = 0 ; $i < count($ua->getPeripheriques()) ; $i++) {
				echo " 		Périphérique " . ($i+1) . " : </br>" ;
				foreach($ua->getPeripheriques()[$i] as $key => $perParam) {
					echo "<blockquote><blockquote>" . $key . " : " . $perParam . "</br></blockquote></blockquote>";
				}

			}

			echo "<blockquote><h2>CPU : </h2></blockquote></br>";

			foreach($ua->getCPU() as $key => $cpuParam) {
				echo "<blockquote><blockquote>" . $key . " : " . $cpuParam . "</br></blockquote></blockquote>";
			}

			echo "<blockquote><h2>Carte Mère : </h2></blockquote></br>";

			foreach($ua->getCM() as $key => $cmParam) {
				echo "<blockquote><blockquote>" . $key . " : " . $cmParam . "</br></blockquote></blockquote>";
			}

			echo "<blockquote><h2>RAM : </h2></blockquote></br>";

			foreach($ua->getRAM() as $key => $ramParam) {
				echo "<blockquote><blockquote>" . $key . " : " . $ramParam . "</br></blockquote></blockquote>";
			}

			echo "<blockquote><h2>GPU : </h2></blockquote></br>";

			foreach($ua->getGPU() as $key => $gpuParam) {
				echo "<blockquote><blockquote>" . $key . " : " . $gpuParam . "</br></blockquote></blockquote>";
			}

			echo "<blockquote><h2>BIOS: </h2></blockquote></br>";

			foreach($ua->getBIOS() as $key => $biosParam) {
				echo "<blockquote><blockquote>" . $key . " : " . $biosParam . "</br></blockquote></blockquote>";
			}

			echo "<blockquote><h2>Softwares : </h2></blockquote></br>";

			for ( $i = 0 ; $i < count($ua->getSoftwares()) ; $i++) {
				echo " 		Soft " . ($i+1) . " : </br>" ;
				foreach($ua->getSoftwares()[$i] as $key => $softParam) {
					echo "<blockquote><blockquote>" . $key . " : " . $softParam . "</br></blockquote></blockquote>";
				}

			}


			echo "<blockquote><h2>OS : </h2></blockquote></br>";

			foreach($ua->getOS() as $key => $osParam) {
				echo "<blockquote><blockquote>" . $key . " : " . $osParam . "</br></blockquote></blockquote>";
			}
		}
	}
}

?>