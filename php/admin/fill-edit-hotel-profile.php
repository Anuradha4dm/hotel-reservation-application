<?php
  
    $sql="SELECT * FROM hotel WHERE hotelid=1 AND userid=1";
    $result=mysqli_query($conn,$sql);

    if($result){

        $hoteldata=mysqli_fetch_assoc($result);

    }
    else{
        header("location: /views/main/errorpage.php?msg=hotel_not_found");
    }

?>