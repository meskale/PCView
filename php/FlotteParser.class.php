<?php
/**
 * flotte parser/(writer)
 * se charge de fournir l'interface avec le fichier XML
 * 
 * @author jojo
 *
 */

class FlotteParser{


	private $flotte;

	/**
	 *   instancie et initialise l'arborescence ˆ partir d'un fichier
	 */
	function __construct($file){
		$this->flotte = new DOMDocument();
		$this->flotte->load($file);

		$this->flotte->validate() or
		 die("fichier XML corrompu, merci de contacter le webadmin");
	}


	/**
	 * Liste de tout les pcs present dans la flotte
	 * @return DOMNodeList
	 */
	public function getPcList(){
		return $this->flotte->getElementsByTagName("PC");
	}


	/**
	 * Retourne le PC ciblŽ par $id
	 * @param ID $id
	 * @return DOMNode
	 */
	public function getPcById($id){

		 return $this->flotte->getElementById("$id");
		
	}
	



}

?>