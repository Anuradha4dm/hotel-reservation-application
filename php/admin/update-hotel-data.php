<?php

include("../connection.php");

if(isset($_POST)){

    $email=$_POST['email'];
    $hotelname=$_POST['hotelname'];
    $address=$_POST['address'];
    $hotelid=$_POST['hotelid'];
    $userid=$_POST['userid'];
    

}




 $sql="UPDATE  hotel SET hotelName='$hotelname' WHERE hotelid=$hotelid AND userid=$userid ";

 $result=mysqli_query($conn,$sql);


if($result){
   header("location: /index.php?msg=update_success");
}else{
    header("location: /views/main/errorpage.php?msg=update_fail");
}


?>