<?php

$servername='';
$username='';
$password='';
$database='';

$conn=mysqli_connect($servername,$username,$password,$database);

$sql="CREATE TABLE `hotel` (`hotelid` INT NOT NULL AUTO_INCREMENT,`hotelName` VARCHAR(250) NOT NULL,`imageUrl` LONGBLOB NOT NULL, `address` VARCHAR(200) NOT NULL,`contactNumber` VARCHAR(20) NOT NULL,`description` VARCHAR(500) NOT NULL,`email` VARCHAR(100) NOT NULL,`userid` INT NOT NULL,PRIMARY KEY (`hotelid`),FOREIGN KEY (userid) REFERENCES user(userid) ON UPDATE CASCADE ON DELETE CASCADE)";

    $result=mysqli_query($conn,$sql);


if($result){
   
    echo "<script>";
    echo "console.log('Connection success')";
    echo "</script>";

}else{

    die('error'.mysqli_error($conn));
    
}

?>
