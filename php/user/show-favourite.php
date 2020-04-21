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

class hotelData
{

    public $name;
    public $description;
    public $image;

    public function __construct($name, $des,$img)
    {
        $this->name = $name;
        $this->description = $des;
        $this->image=$img;
    }
}

if ($_SESSION['isLogin']) {

    $userId = $_SESSION['userID'];
    $hotelNum = array();
    $favourite=array();

    $sql = "SELECT hotelid FROM applicationDB.cart WHERE userid='$userId'";

    $result = mysqli_query($conn, $sql);



    while ($row = mysqli_fetch_assoc($result)) {

        array_push($hotelNum, $row['hotelid']);
    }

    foreach ($hotelNum as $item) {
        $sql = "SELECT * FROM applicationDB.hotel WHERE idhotel='$item'";

        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {

            array_push($favourite, new hotelData($row['hotelName'],$row['description'],$row['imageUrl']));
        }
    }

    

    if (!$result) {

        die(mysqli_error($result));
    }
} else {

    header('location: /');
}
