<?php
    include("./connection.php");


    $sql="CREATE TABLE `hotel_availability`( `idhotel_availability` INT  AUTO_INCREMENT PRIMARY KEY, `quantity` VARCHAR(300) NOT NULL,`room_type` VARCHAR(50) NOT NULL,`contact_number`  VARCHAR(50) NOT NULL,`description` VARCHAR(50) NOT NULL ,`hotel_id` INT NOT NULL, `price` VARCHAR(50) NOT NULL,`userid` INT NOT NULL,FOREIGN KEY (hotel_id) REFERENCES hotel(hotelid) ON UPDATE CASCADE ON DELETE CASCADE)";

    $result=mysqli_query($conn,$sql);

    if($result){
        echo "done";

    }
    else{
        die("error".mysqli_error($conn));
    }


?>