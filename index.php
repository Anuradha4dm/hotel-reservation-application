<?php
include('./views/includes/head.php');

?>

<link rel="stylesheet" type="text/css" href="../../css/product.css">
</head>

<body>

    <?php
    include('./views/includes/navigation.php');
    include('./php/get-hotel-handler.php');

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
                        <?php
                        if ($_SESSION['isLogin'] && $_SESSION['normalUser']) {

                            echo '<form action="/php/user/add-favourite.php" method="POST">';
                            echo '<div class="card-body">';
                                echo '<input type="hidden" name="hotelId" value="' . $row['idhotel'] . '">';
                                echo '<input type="hidden" name="userId" value="' . $_SESSION['userID'] . '">';
                                echo '<button type="submit" name="add" class="btn btn-success">Make Booking</button>';
                            echo '</div>';

                        echo '</form>';


                            echo '<form action="/php/user/add-favourite.php" method="POST">';
                                echo '<div class="card-body">';
                                    echo '<input type="hidden" name="hotelId" value="' . $row['idhotel'] . '">';
                                    echo '<input type="hidden" name="userId" value="' . $_SESSION['userID'] . '">';
                                    echo '<button type="submit" name="add" class="btn btn-warning">Add To My Favoutite</button>';
                                echo '</div>';

                            echo '</form>';
                        }

                        if($_SESSION['isLogin'] && $_SESSION['hotelUser']){
                            
                            echo '<form action="" method="GET">';
                                echo '<div class="card-body">';
                                    echo '<input type="hidden" name="hotelId" value="' . $row['idhotel'] . '">';
                                    echo '<button type="submit" class="btn btn-success">Add New Room</button>';
                                echo '</div>';

                            echo '</form>';
                        }

                        

                        ?>


                    </div>

                </article>

            <?php } ?>
        </div>



    </main>
</body>

</html>