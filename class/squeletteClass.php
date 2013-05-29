<?php
/**
*	@desc		
*	@package 	
*	@var		type	nom		desc
*	@copyright	
*	@version 	1.0
*	@since		1.0
*/	
class NomClass {
	
	private $O_attribut;
 
	
	/**
	*	@desc		Constructeur
	*	@param		
	*	@return		void
	*	@see		
	*	@copyright	2005
	*	@version 	1.0
	*	@since		1.0
	*/	
	public function __construct() {
		$this->_init();
		
	}
	
	
	/**
	*	@desc		Initialisation
	*	@param		
	*	@return		void
	*	@see		
	*	@copyright	2005
	*	@version 	1.0
	*	@since		1.0
	*/	
	private function _init() {
		$this->O_attribut	= null;	
		
	}
	
	
	/**
	*	ACCESSEURS SET
	*	
	*/
	
	/**
	*	@desc		attribue une valuer
	*	@param		
	*	@return		
	*	@see		
	*	@copyright	2005
	*	@version 	1.0
	*	@since		1.0
	*/	
	public function setAttribut(	$O_param) {
		$this->O_attribut	= $O_param;	
		
	}
	
	
	/**
	*	ACCESSEURS GET
	*
	*/
	
	/**
	*	@desc		retourne la valeur de l'attrribut
	*	@param		
	*	@return		
	*	@see		
	*	@copyright	2005
	*	@version 	1.0
	*	@since		1.0
	*/
	public function getAttribut() {
		return $this->O_attribut;	
		
	}	
 
}
?>