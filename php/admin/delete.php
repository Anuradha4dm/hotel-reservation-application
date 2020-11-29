<?php
session_start();

include("../connection.php");

if ($_SESSION["userID"]) {
    $hotelid = (int) $_GET['hotelid'];
    $availavleid = (int) $_GET['tag'];
    
    
    $sql = "delete from hotel where hotelid=".$hotelid;
    
    
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
       echo "done";
       
    } else {
    
        print_r("errr" . mysqli_error($result));
    }

   

}else{

echo "error";

}

