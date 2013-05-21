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
                                                                                                                                                                                                                                                          
                                                                                                                                 
	public function displayByName($name) {                                                                                       
		foreach($this->getFlotte() as $i => $ua) {                                                                               
                                                                                                                                 
			if ($ua->getName() == $name ) {                                                                                      
                                                                                                                                 
				echo "<h1>PC " . ($i+1) . " : " .$ua->getName() . "</h1></br>";     
				
				echo "<ul>" ;
                                                                                                                                 
				echo "<li><h2>Stockages : </h2></li>";                                                      
                          
				echo "<ul>" ;
				for ( $i = 0 ; $i < count($ua->getStockages()) ; $i++) {                                                         
					echo "<li>Stockage " . ($i+1) . " : </li>" ;                                                               
					echo "<ul>" ;                                                                                                                              
					foreach($ua->getStockages()[$i] as $key => $stoParam) {                                                      
						echo "<li>" . $key . " : " . $stoParam . "</li>";          
					}     
					echo "</ul>" ;					
                                                                                                                                 
				} 
				echo "</ul><br />" ;
                                                                                                                                 
				echo "<li><h2>Interfaces : </h2></li>";         
				
				echo "<ul>" ;
				for ( $i = 0 ; $i < count($ua->getInterfaces()) ; $i++) {                                                        
					echo "<li>Interface " . ($i+1) . " : </li>" ; 
					echo "<ul>" ;					
					foreach($ua->getInterfaces()[$i] as $key => $intParam) {                                                     
						echo "<li>" . $key . " : " . $intParam . "</li>";          
					}      
					echo "</ul>" ;
                                                                                                                                 
				}
				echo "</ul><br />" ;	
					
                                                                                                                                 
				echo "<li><h2>Périphériques : </h2></li>";                                                  
                
				echo "<ul>" ;                                                                                                                
				for ( $i = 0 ; $i < count($ua->getPeripheriques()) ; $i++) {                                                     
					echo "<li>Périphérique " . ($i+1) . " : </li>" ; 
					echo "<ul>" ;					
					foreach($ua->getPeripheriques()[$i] as $key => $perParam) {                                                  
						echo "<li>" . $key . " : " . $perParam . "</li>";          
					}                                                                                                            
					echo "</ul>" ;
				}    
				echo "</ul><br />" ;				
                                                                                                                                 
				echo "<li><h2>CPU : </h2></li>";                                                            
                
				echo "<ul>" ;				
				foreach($ua->getCPU() as $key => $cpuParam) {                                                                    
					echo "<li>" . $key . " : " . $cpuParam . "</li>";              
				}                                         
				echo "</ul><br />" ;
                                                                                                                                 
				echo "<li><h2>Carte Mère : </h2></li>";                                                     
                
				echo "<ul>" ;                                                                                                                 
				foreach($ua->getCM() as $key => $cmParam) {                                                                      
					echo "<li>" . $key . " : " . $cmParam . "</li>";               
				}
				echo "</ul><br />" ;
                                                                                                                                 
				echo "<li><h2>RAM : </h2></li>";                                                            
                
				echo "<ul>" ;
				foreach($ua->getRAM() as $key => $ramParam) {                                                                    
					echo "<li>" . $key . " : " . $ramParam . "</li>";              
				}                 
				echo "</ul><br />" ;
                                                                                                                                 
				echo "<li><h2>GPU : </h2></li>";                                                            
                             
				echo "<ul>" ;
				foreach($ua->getGPU() as $key => $gpuParam) {                                                                    
					echo "<li>" . $key . " : " . $gpuParam . "</li>";              
				}     
				echo "</ul><br />" ;
                                                                                                                                 
				echo "<li><h2>BIOS: </h2></li>";                                                            
                                                                                                                                 
				echo "<ul>" ;
				foreach($ua->getBIOS() as $key => $biosParam) {                                                                  
					echo "<li>" . $key . " : " . $biosParam . "</li>";             
				}
				echo "</ul><br />" ;
                                                                                                                                 
				echo "<li><h2>Softwares : </h2></li>";                                                      
                                                                                                                                 
				echo "<ul>" ;
				for ( $i = 0 ; $i < count($ua->getSoftwares()) ; $i++) {                                                         
					echo "<li>Soft " . ($i+1) . " : </li>" ;
					echo "<ul>" ;					
					foreach($ua->getSoftwares()[$i] as $key => $softParam) {                                                     
						echo "<li>" . $key . " : " . $softParam . "</li>";         
					}
					echo "</ul>" ;
                                                                                                                                 
				}          
				echo "</ul><br />" ;
                                                                                                                                 
                                                                                                                                 
				echo "<li><h2>OS : </h2></li>";                                                             
                                                                                                                                 
				echo "<ul>" ;
				foreach($ua->getOS() as $key => $osParam) {                                                                      
					echo "<li>" . $key . " : " . $osParam . "</li>";               
				}  
				echo "</ul><br />" ;
				echo "</ul><br />" ;
				
				break;
			}                                                                                                                    
			                                                                                                               
		}                                                                                                                        
	}                                                                                                                            
}                                                                                                                                
                                                                                                                                 
?>                                                                                                                               