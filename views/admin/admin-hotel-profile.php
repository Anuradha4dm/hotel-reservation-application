<?php

include('../includes/head.php');
include('../../php/connection.php');

?>
</head>

<body>
   <?php

   include('../includes/navigation.php');
   include('../../php/admin/get-hotel-profile-user.php');

   $detailsOfHotel = getHotelDetails_1();
   $detailsOfAvailable = getHotelDetails_2();



   ?>
   <div class="container">
      <?php
      $hotelid = $detailsOfHotel['idhotel'];

      if ($_SESSION['isLogin']) {
         foreach ($detailsOfAvailable as $item) {
            echo "<div class='card' style='width: 18rem;'>";
            echo '<img class="card-img-top" src="data:image/jpeg;base64,' . base64_encode($detailsOfHotel['imageUrl']) . '"/>';

            echo  "<div class='card-body'>";
            echo " <h5 class='card-title'>" . $detailsOfHotel['hotelName'] . "</h5>";
            echo "<p class='card-text'>" . $detailsOfHotel['description'] . "</p>";
            echo "</div>";
            echo "<ul class='list-group list-group-flush'>";
            echo  "<li class='list-group-item'>Room Type :" . $item->roomType . "</li>";
            echo  "<li class='list-group-item'>Available :" . $item->quantity . " rooms</li>";
            echo  "<li class='list-group-item'>Price :$" . $item->price . "</li>";
            echo  "<li class='list-group-item'>Contact No :" . $detailsOfHotel['contactNumber'] . "</li>";
            echo  "<li class='list-group-item'>Email :" . $detailsOfHotel['email'] . "</li>";



            echo "</ul>";
            echo "<div class='card-body'>";
            if (isset($_GET['submit-delete'])) {
               echo "<a href='/php/admin/delete.php?hotelid=$hotelid&tag=$item->availableid'     class='card-link'>Delete Now</a>";
            }
            if (isset($_GET['submit-add'])) {
               echo "<a href='/php/admin/add-new-room.php?hotelid=$hotelid&tag=$item->availableid' class='card-link'>Add Now</a>";
            }
            if (isset($_GET['submit-edit'])) {
               echo "<a href='/php/admin/add-new-room.php?hotelid=$hotelid&tag=$item->availableid' class='card-link'>Edit Now</a>";
            }

           
            echo "<a href='' class='card-link'>Edit</a>";
            echo "</div>";
            echo "</div>";
         }
      } else {

         header("location: /?msg=notlogin");
      }


      ?>
   </div>
</body>

</html>