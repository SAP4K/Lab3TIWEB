<?php 
include 'testele/Import.php';

class AlTreileaTest extends \PHPUnit\Framework\TestCase{
    public function test3(){
            $tes = new testele;
            $rezultatul = $tes->pricesTotal();  
            $this->assertEquals($rezultatul,177095);
    }
   }
?>