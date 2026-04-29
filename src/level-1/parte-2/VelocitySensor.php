<?php
namespace Src;

class VelocitySensor  {
    
  private float $velocity;
   
  public function __construct(float $velocity) {
     $this->velocity = $velocity;
  }
   
  public function getSpeedLevel() {
     if ($this->velocity < 30) {
         return "Muy lento";
     } elseif ($this->velocity >= 30 && $this->velocity <= 60) {
               return "Velocidad adecuada";
     } elseif ($this->velocity > 60 && $this->velocity <= 80) {
               return "Exceso leve";
     } elseif ($this->velocity > 80 && $this->velocity <= 100) {
               return "Exceso moderado";
     } else {
         return "Exceso grave";
     }
  }
  
}

?>