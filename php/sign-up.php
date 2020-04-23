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

    header("location: /views/authentication/signup.php?msg=passerr");
    exit();
} else {
    $password = str_replace(' ', '', $password);
    
    $password = md5($password);
    
}

$sql="select * from user where username='$username'";
print_r($sql);

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
   header("location: /views/authentication/signup.php?msg=userexist");
   
    exit();

}



$sql = "insert into user(username,password,hoteluser,normaluser) values('$username','$password'," . $hotelUser . "," . $normalUser . ")";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("location: /views/admin/admin-panel.php");
} else {
    die('error occur' . mysqli_error($conn));
}


?>