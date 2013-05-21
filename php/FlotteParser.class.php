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
		for($i=0;$i<$this->getPcList()->length;$i++)
		if(strcmp($this->getPcList()->item($i)->getAttribute("id"), $id)==0)
			return $this->getPcList()->item($i);

	}
	/**
	 * Retourne une liste de pc filtrer selon les critËres fournis
	 * Correspondance Exact sur un seul critËre pour l'instant
	 * 
	 * @param array(tag/attribute,name,value) $filter
	 */
	public function getFilteredPc($filter){
		$fl = $this->getPcList();
		
		for($i=0;$i<$fl->length;$i++){
			
			switch ($filter["type"]){
					case "att" :
						
					break;
			}
			
		}
		
	}



}

?>