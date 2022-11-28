<?php 
include 'testele/Import.php';

class AlDoileaTest extends \PHPUnit\Framework\TestCase{
    public function test2(){
       $tes = new testele;
       $rezult=$tes->Log();
       $this->assertTrue($rezult);
    }
   }
?>