
<?php

if(isset($_GET['hotelId'])){

    $getId=$_GET['hotelId'];
}

if(isset($_GET['msg'])){

    header('location: /views/main/errorpage.php?msg='.$_GET['msg']);
}




//class which get the hotel_available table 
class hotelData{

    public $price;
    public $quantity;
    public $roomType;
    public $contact;
    public $des;

    public function __construct($qty,$type,$prz,$con,$des)
    {
        $this->quantity=$qty;
        $this->roomType=$type;
        $this->price=$prz;
        $this->contact=$con;
        $this->des=$des;

        
    }

}

//getting which hotel data do need
function getHotelDetails_1()
{
    global $conn,$getId;

    $intgetId=(int)$getId;

    $sql = "SELECT * FROM hotel WHERE hotelid=$intgetId";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)==1){

        return $row=mysqli_fetch_assoc($result);

    }else{
        die("error in sql statements".mysqli_error($result));
    }

          

   
}


//return the array which contains the hotel data as element 
function getHotelDetails_2()
{
    global $conn,$getId;

    $hotelRooms=array();

    $intgetId=(int)$getId;

    $sql = "SELECT * FROM hotel_availability WHERE hotel_id=$intgetId";
    $result = mysqli_query($conn, $sql);


    if(mysqli_num_rows($result)>0){

        while($row=mysqli_fetch_assoc($result)) {

            $h1=new hotelData($row['quantity'],$row['room_type'],$row['price'],$row['contact_number'],$row['description']);
            array_push($hotelRooms,$h1);  
            
        }

        
        return $hotelRooms;

    }else{
       
        header('location: /views/main/details.php?msg=noprofile');
    }

          

   
}



?>