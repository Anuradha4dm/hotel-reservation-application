<?php

$servername='';
$username='';
$password='';
$database='';



$conn=mysqli_connect($servername,$username,$password,$database);

if($conn){

    echo "<script>";
    echo "console.log('connection success ......');";
    echo "</script>";
   
    

}else{

    header("location: /views/main/errorpage.php?msg=hotel_not_found");
    die("connection faild ".mysqli_error($conn));

    

}



?>
