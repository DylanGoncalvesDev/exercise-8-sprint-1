<?php
  use PHPUnit\Framework\TestCase;
  use Src\VelocitySensor;

  class VelocitySensorTest extends TestCase {
    
    public function test_getSpeedLevel_lowSpeedCase(){
      $sensor =  new VelocitySensor(10);
      $this->assertEquals("Muy lento", $sensor->getSpeedLevel());
    }

    public function test_getSpeedLevel_normalSpeedCase(){
      $sensor = new VelocitySensor(42);
      $this->assertEquals("Velocidad adecuada", $sensor->getSpeedLevel());
    }

    public function test_getSpeedLevel_slightExcessSpeedCase(){
      $sensor = new VelocitySensor(76);
      $this->assertEquals("Exceso leve", $sensor->getSpeedLevel());
    }
    
    public function test_getSpeedLevel_moderateExcessSpeedCase(){
      $sensor = new VelocitySensor(91);
      $this->assertEquals("Exceso moderado", $sensor->getSpeedLevel());
    }
  } 
     
?>