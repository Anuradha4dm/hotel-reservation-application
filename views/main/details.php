<?php

include('../includes/head.php');

?>
</head>

<body>
    <?php

    include('../includes/navigation.php');
    include('../../php/getSpecificProduct.php');

    $detailsOfHotel=getHotelDetails_1();
    $detailsOfAvailable=getHotelDetails_2();

    
    
    ?>
    <main class="centered">
        <h1><?php echo $detailsOfHotel['hotelName'] ?></h1>
      
        <hr>
        <div>
        <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($detailsOfHotel['imageUrl']) . '"/>'; ?>
        </div>
        <h3><?php echo $detailsOfHotel['address'] ?></h3>
        <h3><?php echo $detailsOfHotel['contactNumber'] ?></h3>
        <h3><?php echo $detailsOfHotel['description'] ?></h3>

        <?php foreach($detailsOfAvailable as $item) {

            
            echo  " <h2>" .$item->quantity ."</h2>";
            echo  " <h2>" .$item->roomType ."</h2>";
            echo  " <h2> $" .$item->price ."</h2>";
        }  ?>

       
       

    </main>
</body>

</html>