<?php

	class build {
     
         protected $header;
         protected $body;
         protected $footer;

         public function __construct($header, $body, $footer)
         {
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
        
       
         $this->buildHeader();
         $this->buildBody();
         $this->builfooter();
      }
    }
  ?>