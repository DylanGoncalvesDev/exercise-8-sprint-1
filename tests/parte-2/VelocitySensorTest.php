<?php
  use PHPUnit\Framework\TestCase;
  use Src\VelocitySensor;

  class VelocitySensorTest extends TestCase {
    
    public function test_getSpeedLevel(){
      $sensor =  new VelocitySensor(10);
      $this->assertEquals("Muy lento", $sensor->getSpeedLevel());
    }
  }
     
?>