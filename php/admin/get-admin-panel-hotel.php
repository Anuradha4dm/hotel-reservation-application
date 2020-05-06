<?php
    


$sql="SELECT * FROM hotel WHERE userid=".$_SESSION['userID'];

$result=mysqli_query($conn,$sql);

if( mysqli_num_rows($result)>0){

   

}
else{

    die('no data find');
}
