<?php

class FlotteParser{


	private $flotte;

	/**
	 *   instancie et initialise l'arborescence à partir d'un fichier
	 */
	function __construct($file){
		$this->flotte = new DOMDocument();
		$this->flotte->load($file);
		
		if(!$this->flotte->validate())echo "fichier XML corrompu, des erreurs peuvent survenir";
	}
	
	
	/**
	 * Liste de tout les pcs present dans la flotte
	 * @return DOMNodeList
	 */
	public function getPcList(){
		return $this->flotte->getElementsByTagName("PC");
	}
	

	/**
	 * Retourne le PC ciblé par $id
	 * @param ID $id
	 * @return DOMNode
	 */
	public function getPcById($id){
		for($i=0;$i<count($this->getPcList())+1;$i++)
		{	
			if($this->getPcList()->item($i)->getAttribute("id") == $id)
				return $this->getPcList()->item($i);
		}		
	}
	
	

}

?>