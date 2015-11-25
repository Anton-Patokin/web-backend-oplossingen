<?php

	class build {
     
         protected $header;
         protected $body;
         protected $footer;
         

         public function __construct($header, $body, $footer)
         {   
             //echo "stage 4<br>";
             
             $this->header	    =	$header;
             $this->body		=	$body;
             $this->footer	    =	$footer;

             // Creлer pagina automatisch
             $this->buildPage();
         }

     
       	
         public function buildHeader()
         {
             include  $this->header;
         }	

         public function buildBody()
         {
             
             include  $this->body;
         }
      public function builfooter()
         {
             include  $this->footer;
         }

     
      public function buildPage(){
            //echo "stage 5<br>";
        
         $this->buildHeader();
         $this->buildBody();
         $this->builfooter();
      }
    }
  ?>