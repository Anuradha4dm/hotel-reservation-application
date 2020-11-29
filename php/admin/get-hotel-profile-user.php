
<?php
    


$hotelId = $_GET['hotelId'];
$userId = $_SESSION['userID'];



//class which get the hotel_available table 
class hotelData
{

    public $price;
    public $quantity;
    public $roomType;
    public $availableid;

    public function __construct($qty, $type, $prz, $avb)
    {
        $this->quantity = $qty;
        $this->roomType = $type;
        $this->price = $prz;
        $this->availableid = $avb;
    }
}

//getting which hotel data do need
function getHotelDetails_1()
{
    global $conn, $userId, $hotelId;

    $sql = "SELECT * FROM hotel WHERE idhotel=$hotelId ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        return $row = mysqli_fetch_assoc($result);
    } else {
        die("error in sql statements at:" . mysqli_error($result));
    }
}


//return the array which contains the hotel data as element 
function getHotelDetails_2()
{
    global $conn, $userId, $hotelId;

    $hotelRooms = array();


    $sql = "SELECT * FROM hotel_availability WHERE userid=$userId AND hotel_id=$hotelId";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $h1 = new hotelData($row['quantity'], $row['room_type'], $row['price'], $row['idhotel_availability']);

            $q = $row['quantity'];
            array_push($hotelRooms, $h1);
            echo "<script>";
            echo "console.log($q);";
            echo "</script>";
        }


        return $hotelRooms;
    } else {
        die("no available hotels");
    }
}



?>