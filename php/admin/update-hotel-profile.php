<?php

if(isset($_POST)){

    $roomtype=$_POST['room-type'];
    $quatity=$_POST['quatity'];
    $contact_number=$_POST['contact-number'];
    $price=$_POST['price'];
    $descriptions=$_POST['description'];
    $hotelid=$_POST['hotelid'];
    $available=$_POST['available'];

}



$sql="UPDATE hotel_availability SET `room_type`='double',  `contact_number`=$contact_number ,`price`=$price ,`quantity`=$quatity  WHERE `hotel_id`=$hotelid AND `idhotel_availability`=$available";

$result=mysqli_query($conn,$sql);

if($result){
    header("location: /index.php");
}
else{
    echo mysqli_error($conn);
    // header('location: /views/main/errorpage.php?msg=update_fail');
}





?>