<?php
session_start();
include('./connection.php');



if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $address = $_POST['address'];
    $email=$_POST['email'];
    $contactNumber = $_POST['contact-number'];
    $roomType = $_POST['room-type'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $quatity = $_POST['quatity'];

    $fileTMP = $_FILES['imageUrl']['tmp_name'];

    $saveImage = addslashes(file_get_contents($fileTMP));
}
$userId=(int)($_SESSION['userID']);



#add new hotel into the hotel table
$sql = "insert into hotel(hotelName,imageUrl,address,contactNumber,description,email,userid) values('$name','$saveImage','$address','$contactNumber','$description','$email',".$userId.")";
$result = mysqli_query($conn, $sql);

getError($result, 'New hotel is added');

#get the inserted hotel's id hotel

$sql = "select hotelid from hotel where hotelName='$name'";
$result = mysqli_query($conn, $sql);

$re = mysqli_num_rows($result);



if (mysqli_num_rows($result) == 1) {

    $row = mysqli_fetch_assoc($result);
    $id = (int)$row['hotelid'];


    $sql = "insert into hotel_availability(quantity,room_type,hotel_id,price,userid) values('$quatity','$roomType',".$id.",'$price',".$userId.")";
    $result = mysqli_query($conn, $sql);

    print_r($result, 'Insert Hotel available table');
} else {

    echo "<script>";
    echo "console.log('errrrr');";
    echo "</script>";
}


function getError($result, $msg)
{
    global $conn;

    if ($result) {

        echo "<script>";
        echo "console.log('$msg');";
        echo "</script>";

        header("location: /");
    } else {
        die("connection faild " . mysqli_error($conn));
    }
}
