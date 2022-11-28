<?php
include 'testele/Import.php';
class PrmiulTest extends \PHPUnit\Framework\TestCase{
    public function test(){
       $tes = new testele;
       $rezultatul = $tes->conn();
       $this->assertTrue($rezultatul);
    }
   }
?>