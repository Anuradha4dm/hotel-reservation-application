<?php

include('../includes/head.php');

?>
</head>

<body>
    <?php

    include('../includes/navigation.php');
    include('../../php/getSpecificProduct.php');

    $details=getHotelDetails();

    
    
    ?>
    <main class="centered">
        <h1><?php echo $details['hotelName'] ?></h1>
        <hr>
        <div>
        <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($details['imageUrl']) . '"/>'; ?>
        </div>
        <h2><?php echo $details['price'] ?></h2>
        <h2><?php echo $details['roomType'] ?></h2>
        <h2><?php echo $details['address'] ?></h2>
        <h2><?php echo $details['contactNumber'] ?></h2>
        <h2><?php echo $details['description'] ?></h2>
        <p></p>

    </main>
</body>

</html>