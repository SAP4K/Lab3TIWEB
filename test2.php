<?php
include 'includes/config.php';
class calculator{
    public function conn(){
        $con = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
        if($con){
            return true;
        }else{
            return false;
        }
    }
    public function scadere($a,$b){
            return $a-$b;
    }
}
class test2 extends \PHPUnit\Framework\TestCase{
 public function test(){
    $tes = new calculator;
    $rezultatul = $tes->scadere(3,3);
    $this->assertEquals($rezultatul,0);
 }
}
?>