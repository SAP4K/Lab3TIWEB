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
    public function Log(){
        $con = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
        $rezult=$con->query("SELECT*FROM users WHERE email='indexionn@gmail.com' AND password='123';");
        if(mysqli_num_rows($rezult)){
            return true;
        }
        else{
            return false;
        }
    }
    public function pricesTotal(){
        $con = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
        $rezult=$con->query("SELECT productPrice FROM products 
        INNER JOIN wishlist ON wishlist.productId = products.id
        INNER JOIN users ON users.id = wishlist.userId
        WHERE users.id = 4;");
        $rezultat=0;
        while($row=$rezult->fetch_row()){
            $rezultat += $row[0];
        }
        return $rezultat;
    }
}

?>