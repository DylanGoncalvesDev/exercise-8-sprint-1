<?php
namespace Src;

class VelocitySensor  {
    
   private float $velocity;
   
   public function __construct(float $velocity) {
      $this->velocity = $velocity;
   }
   
   public function getSpeedLevel(){
     if ($this->velocity < 30) {
         return "Muy lento";
     }
   }


}
  




?>