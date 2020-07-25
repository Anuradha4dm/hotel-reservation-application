<?php



$sql="SELECT * FROM hotel_availability WHERE hotel_id=1 AND  idhotel_availability=1";

$result=mysqli_query($conn,$sql);

if($result){
   $data=mysqli_fetch_assoc($result);
}
else{
    echo "<script>";
    echo "console.log('re ......');";
    echo "</script>";
}



?>