<?php

$servername='localhost';
$username='root';
$password='damith123';
$database='applicationDB';



$conn=mysqli_connect($servername,$username,$password,$database);

if($conn){

    echo "<script>";
    echo "console.log('connection success ......');";
    echo "</script>";
   
    

}else{

    echo "<script>";
    echo "console.log('connectin loss ......');";
    echo "</script>";
    
    die("connection faild ".mysqli_error($conn));

    

}



?>