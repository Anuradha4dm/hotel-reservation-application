
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

    $getId=$_GET['hotelId'];
}




//class which get the hotel_available table 
class hotelData{

    public $price;
    public $quantity;
    public $roomType;

    public function __construct($qty,$type,$prz)
    {
        $this->quantity=$qty;
        $this->roomType=$type;
        $this->price=$prz;
        
    }

}

//getting which hotel data do need
function getHotelDetails_1()
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


//return the array which contains the hotel data as element 
function getHotelDetails_2()
{
    global $conn,$getId;

    $hotelRooms=array();


    $sql = "SELECT * FROM applicationDB.hotel_availability WHERE hotel_id=$getId";
    $result = mysqli_query($conn, $sql);


    if(mysqli_num_rows($result)>0){

        while($row=mysqli_fetch_assoc($result)) {

            $h1=new hotelData($row['quantity'],$row['room_type'],$row['price']);

            $q=$row['quantity'];
            array_push($hotelRooms,$h1);  
            echo "<script>";
        echo "console.log($q);";
        echo "</script>";

        }

        
        return $hotelRooms;

    }else{
        die("error in sql statement");
    }

          

   
}



?>