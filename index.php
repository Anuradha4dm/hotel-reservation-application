<?php
include('./views/includes/head.php');

?>

<link rel="stylesheet" type="text/css" href="../../css/product.css">
</head>

<body>

    <?php
    include('./views/includes/navigation.php');
    include('./php/get-hotel-handler.php');

    ?>



    <main>

        <div class="grid">
            <?php while ($row = mysqli_fetch_assoc($result)) {    ?>
                <article>
                    <div class="card" style="width: 18rem;">
                        <?php echo '<img class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($row['imageUrl']) . '"/>'; ?>

                        <div class="card-body">
                            <h2><?php echo $row['hotelName'] ?></h2>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><?php echo $row['description'] ?></p>
                        </div>
                        <form action="/views/main/details.php" method="GET">
                            <div class="card-body">
                                <input type="hidden" name="hotelId" value="<?php echo $row['idhotel'] ?>">
                                <button type="submit" name="submit" class="btn btn-primary">Details</button>
                            </div>

                        </form>

                        <form action="" method="GET">
                            <div class="card-body">
                            <input type="hidden" name="hotelId" value="<?php echo $row['idhotel'] ?>">
                                <button type="submit" class="btn btn-success">Add To My Favoutite</button>
                            </div>

                        </form>

                    </div>

                </article>

            <?php } ?>
        </div>



    </main>
</body>

</html>