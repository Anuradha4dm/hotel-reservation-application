<?php

$servername='';
$username='';
$password='';
$database='hotel';

$conn=mysqli_connect($servername,$username,$password,$database);


if($conn){
   
    echo "<script>";
    echo "console.log('Connection success')";
    echo "</script>";

}else{

    die('error'.mysqli_error($conn));
    
}

?>
