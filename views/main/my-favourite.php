<?php
include('../includes/head.php');

?>

<link rel="stylesheet" type="text/css" href="../../css/product.css">
</head>

<body>

    <?php
    include('../includes/navigation.php');
    include('../../php/user/show-favourite.php');

    if ($msg=$_GET['msg']) {
       
        if($msg=="notlogin"){
            echo '<div class="alert alert-danger" role="alert">';
            echo '<h4>You Need To Log In</h4>';
            echo '</div>';
        }
    }

    ?>



    <main>

        <div class="grid">
            <?php foreach ($favourite as $hotel){    ?>
                <article>
                    <div class="card" style="width: 18rem;">
                        <?php echo '<img class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($hotel->image) . '"/>'; ?>

                        <div class="card-body">
                            <h2><?php echo $hotel->name ?></h2>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><?php echo $hotel->description ?></p>
                        </div>
                        <form action="/views/main/details.php" method="GET">
                            <div class="card-body">
                                <input type="hidden" name="hotelId" value="<?php echo $row['hotelid'] ?>">
                                <button type="submit" name="submit" class="btn btn-primary">Details</button>
                            </div>

                        </form>
                       


                    </div>

                </article>

            <?php } ?>
        </div>



    </main>
</body>

</html>