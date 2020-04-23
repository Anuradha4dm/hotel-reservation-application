<?php
session_start();

include('./connection.php');

    if(isset($_POST['submit'])){

        $email=$_POST['email'];
        $password=$_POST['password'];
        $remember=$_POST['remember'];

      
    

    }

   
    $sql="SELECT * FROM user where username='$email'";

    $result = mysqli_query($conn, $sql);

    $row=mysqli_fetch_assoc($result);

    



    
    if($remember=="remind"){

        setcookie("remember","$email",time()+3000,'/');
    }
       
          

    


   

    if($row['password']==md5($password)){
        $_SESSION['isLogin']=true;
        $_SESSION['userID']=$row['iduser'];

        

        if((int)($row['hoteluser'])==1){

            $_SESSION['hotelUser']=true;
            $_SESSION['normalUser']=false;
        }else{
            $_SESSION['normalUser']=true;
            $_SESSION['hotelUser']=false;
        }
        header("location: /");
    }
    else{
       


        header("location: /views/authentication/login.php?msg=passNotMatch");
    }
  

?>