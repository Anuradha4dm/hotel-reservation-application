<?php
    session_start();

    include("../connection.php");

    $hotelid=(int)$_GET['hotelid'];
    $availavleid=(int)$_GET['tag'];

    
    $sql="delete from hotel_availability where idhotel_availability=".$availavleid;
    

    $result=mysqli_query($conn,$sql);

    if($result){
        header('location: //views/admin/admin-panel.php ');

    }
    else{

        print_r("errr".mysqli_error($result));
    }



?>