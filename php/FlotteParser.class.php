<?php
/**
 * flotte parser/(writer)
 * se charge de fournir l'interface avec le fichier XML
 * 
 * @author jojo
 *
 */

class FlotteParser{

	
		
	// We starts from the root element
	
		
	private $flotteX;
	private $flotte;

	/**
	 *   instancie et initialise l'arborescence ˆ partir d'un fichier
	 */
	function __construct($file){
		$this->flotte = new DOMDocument();
		$this->flotte->load($file);

		$this->flotte->validate() or
		 die("fichier XML corrompu, merci de contacter le webadmin");
		
		$this->flotteX = new DOMXpath($this->flotte);

		
	}


	/**
	 * Liste de tout les pcs present dans la flotte
	 * @return DOMNodeList
	 */
	public function getPcList($filtre =""){
	
		if($filtre==""){
			return $this->flotte->getElementsByTagName("PC");
		}
		else 
		{
			$query = "//PC[contains(.,'".$filtre."')]";
			return $this->flotteX->query($query);
		}
	}


	/**
	 * Retourne le PC ciblŽ par $id
	 * @param ID $id
	 * @return DOMNode
	 */
	public function getPcById($id){

		 return $this->flotte->getElementById("$id");
		
	}
	
	public function getXpath(){
		return $this->flotteX;
	}
	

}

?>