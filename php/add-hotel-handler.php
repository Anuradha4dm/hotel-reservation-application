<?php

    include('./connection.php');


if(isset($_POST['submit'])){
    
    $name=$_POST['name'];
    $address=$_POST['address'];
    $contactNumber=$_POST['contact-number'];
    $roomType=$_POST['room-type'];
    $price=$_POST['price'];
    $description=$_POST['description'];

    $fileTMP=$_FILES['imageUrl']['tmp_name'];

    $saveImage=addslashes(file_get_contents($fileTMP));
    
}

    $sql="insert into hotel(hotelName,imageUrl,address,contactNumber,roomType,price,description) values('$name','$saveImage','$address','$contactNumber','$roomType','$price','$description')";

    $result=mysqli_query($conn,$sql);

    if($result){

        echo "<script>";
        echo "console.log('hetel is save ......');";
        echo "</script>";

        header("location: /views/main/index.php");


        
    
    }else{
        die("connection faild ".mysqli_error($conn));
    
    }

    mysqli_close($conn);
?>
