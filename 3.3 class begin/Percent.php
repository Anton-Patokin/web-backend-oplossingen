<?php 
class Percent {
  public $absolute;
  public $relative; 
  public $hundred; 
  public $nominal; 
 
   function __construct( $new, $unit) {
       $this->absolute  = $this->formaat($new/$unit);
       $this->relative  = $this->formaat( $this->absolute-1);
       $this->hundred   = $this->formaat( $this->absolute * 100);
       $this->nominal   = $this->nominaal( $this->absolute);
   }
 
 public function formaat($number){
   return number_format($number, 2, '.', '');
 }
 
 public function nominaal($number){
       if ($number > 1) {
          return 'positive';
       } elseif ($number < 1) {
           return  'negative';
       } else {
           return  'status-quo';
       }
 
 }
}

?>