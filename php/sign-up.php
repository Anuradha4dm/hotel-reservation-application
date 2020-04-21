<?php


include('./connection.php');

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $conformPassword = $_POST['conformPassword'];



    if ($_POST['rad'] == 'H') {
        $hotelUser = 1;
        $normalUser = 0;
    } else {
        $normalUser = 1;
        $hotelUser = 0;
    }
}

if ($password != $conformPassword) {

    header("location: /");
    exit();
} else {

    $password = md5($password);
}


$sql = "insert into user(username,password,hoteluser,normaluser) values('$username','$password'," . $hotelUser . "," . $normalUser . ")";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("location: /views/authentication/login.php");
} else {
    die('error occur' . mysqli_error($conn));
}


?>