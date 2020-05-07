<?php

include('../includes/head.php');
include('../../php/connection.php');

?>
</head>

<body>
   <?php

   include('../includes/navigation.php');
   include('../../php/getSpecificProduct.php');

   $detailsOfHotel = getHotelDetails_1();
   $detailsOfAvailable = getHotelDetails_2();



   ?>
   <div class="grid">
      <?php
      if ($_SESSION['isLogin']) {

         if(isset($_GET['msg'])){
            echo '<div class="alert alert-danger" role="alert">';
             echo 'This is a danger alert—check it out!';
            echo '</div>';
         }


         foreach ($detailsOfAvailable as $item) {
            echo "<div class='card' style='width: 18rem;'>";
             echo '<img class="card-img-top" src="data:image/jpeg;base64,' . base64_encode($detailsOfHotel['imageUrl']) . '"/>';

               echo  "<div class='card-body'>";
                  echo " <h5 class='card-title'>" . $detailsOfHotel['hotelName'] . "</h5>";
               echo "</div>";
               echo  "<div class='card-body'>";
                   echo "<p class='card-text'>" . $detailsOfHotel['description'] . "</p>";
               echo "</div>";
               echo "<ul class='list-group list-group-flush'>";
                  echo  "<li class='list-group-item'>Room Type :" . $item->roomType . "</li>";
                  echo  "<li class='list-group-item'>Available :" . $item->quantity . " rooms</li>";
                  echo  "<li class='list-group-item'>Price :$" . $item->price . "</li>";
                  echo  "<li class='list-group-item'>Contact No :0" . $detailsOfHotel['contactNumber'] . "</li>";
                  echo  "<li class='list-group-item'>Contact No :0" . $detailsOfHotel['email'] . "</li>";


               echo "</ul>";

               echo "<div class='card-body'>";
                  if($_SESSION['normalUser']){
                     echo "<a href='' class='card-link'>Add To My Favourit</a>";

                  }else{

                     echo "<a href='' class='card-link'>EDIT</a>";
                     echo "<a href='' class='card-link'>DELETE</a>";
                  }
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