<?php
use PHPUnit\Framework\TestCase;
use Src\NumberChecker;

class NumberCheckerTest extends TestCase {
     
  public function test_isEven_par() {
     $checker = new NumberChecker(10);
     $this->assertTrue($checker->isEven());
  }

  public function test_isEven_impar() {
    $checker = new NumberChecker(5);
    $this->assertFalse($checker->isEven());
  }

  public function test_isPositive_positive() {
    $checker = new NumberChecker(3);
    $this->assertTrue($checker->isPositive());
  }

  public function test_isPositive_negative() {
    $checker = new NumberChecker(-7);
    $this->assertFalse($checker->isPositive());
  }
  public function test_isPositive_falseForZero(){
    $checker = new NumberChecker(0);
    $this->assertFalse($checker->isPositive());
  }
    
}

?>