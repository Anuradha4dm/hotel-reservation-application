<?php

include('../includes/head.php');

?>
</head>

<body>
    <?php

    include('../includes/navigation.php');
    include('../../php/getSpecificProduct.php');

    $detailsOfHotel = getHotelDetails_1();
    $detailsOfAvailable = getHotelDetails_2();



    ?>
    <div class="container">
    <?php foreach($detailsOfAvailable as $item) {
    echo "<div class='card' style='width: 18rem;'>";
    echo '<img class="card-img-top" src="data:image/jpeg;base64,' . base64_encode($detailsOfHotel['imageUrl']) . '"/>'; 
       
      echo  "<div class='card-body'>";
           echo " <h5 class='card-title'>".$detailsOfHotel['hotelName'] ."</h5>";
           echo "<p class='card-text'>". $detailsOfHotel['description'] ."</p>";
        echo "</div>";
        echo "<ul class='list-group list-group-flush'>";
        echo  "<li class='list-group-item'>Room Type :".$item->roomType."</li>" ;
         echo  "<li class='list-group-item'>Available :".$item->quantity." rooms</li>" ;
         echo  "<li class='list-group-item'>Price :$".$item->price."</li>" ;
         echo  "<li class='list-group-item'>Contact No :0".$detailsOfHotel['contactNumber']."</li>" ;
            
        echo "</ul>";
        echo "<div class='card-body'>";
           echo "<a href='' class='card-link'>Add To My Favourit</a>";
           echo "<a href='' class='card-link'>Edit</a>";
        echo "</div>";
   echo "</div>";

}  ?>
</div>
</body>

</html>