<?php

include('./connection.php');

$sql="CREATE TABLE `user` (`userid` INT NOT NULL AUTO_INCREMENT,`username` VARCHAR(250),`password` VARCHAR(200),`hoteluser` INT unsigned,`normaluser` INT unsigned,PRIMARY KEY (`userid`))";

$result=mysqli_query($conn,$sql);

if($result){
    echo "database create";
}else{
    die("error".mysqli_error($conn));
}


?>
