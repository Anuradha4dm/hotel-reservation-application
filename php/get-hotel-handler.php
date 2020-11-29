<?php

$sql="SELECT * FROM hotel";

$result=mysqli_query($conn,$sql);

if( mysqli_num_rows($result)>0){

   

}
else{

    header('location: /views/main/errorpage.php?msg='.$_GET['msg']);
}
