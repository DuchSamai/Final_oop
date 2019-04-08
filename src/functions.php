<?php 
 class functionData{
    
 public $firstnumber ;
 public $secondnumber ;

 public function __construct($firstnumber,$secondnumber){
  $this->firstnumber =$firstnumber;
  $this->secondnumber =$secondnumber;
    
 }
 public function add(){
    $add= $this->firstnumber +$this->secondnumber;
    
      return $add ;
   }
   public function minus(){
    $minus= $this->firstnumber-$this->secondnumber;
    
      return $minus ;
   }
   public function multiply(){
    $multiply= $this->firstnumber-$this->secondnumber;
    
      return $multiply ;
   }
   public function divide(){
    $divide= $this->firstnumber-$this->secondnumber;
    
      return $divide ;
   }
   
 }


?>