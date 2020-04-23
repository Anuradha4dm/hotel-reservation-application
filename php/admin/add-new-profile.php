<?php
session_start();
include('../connection.php');

print_r($_POST['hotelid']);
if ($_SESSION['isLogin'] && isset($_POST['submit'])) {

    $roomType = $_POST['room-type'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $quatity = $_POST['quatity'];
    $quatity = $_POST['contact-number'];
    $hotelid = $_POST['hotelid'];
    $userId = $_SESSION['userID'];



    $sql = "insert into hotel_availability(quantity,room_type,hotel_id,price,userid) values('$quatity','$roomType','$hotelid','$price','$userId')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        print_r("insert");
    } else {
        print_r("err".mysqli_error($conn));
    }
}
else{
    print_r("not");
}
