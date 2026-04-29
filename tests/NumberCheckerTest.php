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


    
}






?>