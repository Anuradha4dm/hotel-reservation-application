<?php
include('../includes/head.php')

?>

<link rel="stylesheet" type="text/css" href="../../css/product.css">
</head>

<body>

    <?php
    include('../includes/navigation.php');
    include('../../php/get-hotel-handler.php');

    ?>



    <main>

        <div class="grid">
            <?php while ($row = mysqli_fetch_assoc($result)) {    ?>
                <article class="card product-item">
                    <header class="card__header">
                        <h1 class="product__title"><?php echo $row['hotelName'] ?></h1>
                    </header>
                    <div class="card__image">
                        <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($row['imageUrl']) . '"/>'; ?>

                    </div>
                    <div class="card__content">
                       
                        <p class="product__description"><?php echo $row['description'] ?></p>
                    </div>
                    <form action="./details.php"  method="GET">
                        <div class="card__actions">
                            <input type="hidden" name="id" value=".<?php echo $row['idhotel'] ?>.">
                            <button class="btn" type="submit" name="submit" >DETAILS</button>
                        </div>

                    </form>
                </article>
            <?php } ?>
        </div>



    </main>
</body>

</html>