<?php
  class Zebra extend Animal{
    protected $species;
   
    public function __construct($Name,$gender,§helth,$species){
    
    parent::__construct($Name,$gender,§helth);
     $this->species = $species;
    }
  
   
   public function getSpecies(){
   
    return $species;
   }
   
  }


?>