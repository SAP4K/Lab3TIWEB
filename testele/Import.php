<?php
include 'includes/config.php';
class testele{
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

?>