
<?php

$servername = 'localhost';
$username = 'root';
$password = 'damith123';
$database = 'applicationDB';



$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn) {

    echo "<script>";
    echo "console.log('connection success ......');";
    echo "</script>";
} else {

    echo "<script>";
    echo "console.log('connectin loss ......');";
    echo "</script>";

    die("connection faild " . mysqli_error($conn));
}

if(isset($_GET['submit'])){

    $id=$_GET['id'];
}

$getId= explode('.',$id)[1] ;


function getHotelDetails()
{
    global $conn,$getId;

    $sql = "SELECT * FROM applicationDB.hotel WHERE idhotel=$getId";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)==1){

        return $row=mysqli_fetch_assoc($result);

    }else{
        die("error in sql statement");
    }

          

   
}



?>