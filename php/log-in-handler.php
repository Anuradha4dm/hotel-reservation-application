<?php

include('./connection.php');

    if(isset($_POST['submit'])){

        $email=$_POST['email'];
        $password=md5($_POST['password']);

    }

    $sql="SELECT * FROM applicationDB.user where username='$email'";

    $result = mysqli_query($conn, $sql);

    $row=mysqli_fetch_assoc($result);

  


    if($row['password']==$password){
        header("location: /");
    }
    else{
        header("location: /views/authentication/login.php?msg=passNotMatch");
    }
  

?>