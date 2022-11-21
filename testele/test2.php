<?php 
include 'testele/Import.php';

class AlDoileaTest extends \PHPUnit\Framework\TestCase{
    public function test2(){
       $tes = new testele;
       $rezultatul = $tes->scadere(3,3);
       $this->assertEquals($rezultatul,0);
    }
   }
?>