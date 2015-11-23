<?php 

  class Lion extends Animal{

     protected $species;

		public function __construct(  $name, $sex, $health, $lionSpecies )
		{
			parent::__construct( $name, $sex, $health );
			
			$this->species = $lionSpecies;
		}
 
 
 public function getSpecies(){
 
 return $this->species;
 }
 
 public function doSpecialMove(){
 
   return "roar";
 }

}

?>