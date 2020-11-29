<?php
    
    session_start();

    include('../connection.php');

    if($_SESSION['isLogin']){

        if(isset($_POST['add'])){

            $hotelID=$_POST['hotelId'];
            $userID=$_POST['userId'];

        }

        $sql="insert into cart(hotelid,userid) values('$hotelID','$userID')";

        $result=mysqli_query($conn,$sql);

        if($result){
           header('location: /views/main/my-favourite.php');
        }
        else{

            die('error'.mysqli_error($result));

        }

    }

    else{

        header('location: /');
    }





?>