<?php

include('../includes/head.php');
include('../../php/connection.php');
?>

<link rel="stylesheet" type="text/css" href="../../css/product.css">
</head>

<body>

    <?php
    include('../includes/navigation.php');
    include('../../php/admin/get-admin-panel-hotel.php');



    ?>


    <main>

        <div class="grid">
            <?php
            if ($msg = $_GET['msg']) {

                if ($msg == "notlogin") {
                    echo '<div class="alert alert-danger" role="alert">';
                    echo '<h4>You Need To Log In</h4>';
                    echo '</div>';
                }
            }

            while ($row = mysqli_fetch_assoc($result)) {    ?>
                <article>
                    <div class="card" style="width: 18rem;">
                        <?php echo '<img class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($row['imageUrl']) . '"/>'; ?>

                        <div class="card-body">
                            <h2><?php echo $row['hotelName'] ?></h2>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><?php echo $row['description'] ?></p>
                        </div>

                        <?php


                        if ($_SESSION['isLogin'] && $_SESSION['hotelUser']) {

                            echo '</form>';
                            echo '<form id="editHotel" action="/views/admin/edit-hotel-data.php" method="GET">';
                            echo '<div class="card-body">';
                            echo '<input type="hidden" name="hotelId" value="' . $row['hotelid'] . '">';
                            echo '<button type="submit" name="submit-edit" class="submit btn btn-info">Edit Hotel Profile</button>';
                            echo '</div>';

                            echo '</form>';

                            echo '</form>';
                            echo '<form action="/views/admin/add-new-hotel-profile.php" method="GET">';
                            echo '<div class="card-body">';
                            echo '<input type="hidden" id="hotelId" name="hotelId" value="' . $row['hotelid'] . '">';
                            echo '<button type="submit"  name="submit-add" class="submit btn btn-success">Add New Hotel Profile</button>';
                            echo '</div>';

                            echo '</form>';

                            echo '<form  id="deleteHotel">';
                            echo '<div class="card-body">';
                            echo '<input type="hidden" name="hotelId" value="' . $row['hotelid'] . '">';
                            echo '<button type="submit" name="submit-delete" id="deleteBtn" class="submit btn btn-danger">Delete Hotel Profile</button>';
                            echo '</div>';
                        }


                        header("Refresh:0");
                        ?>


                    </div>

                </article>

            <?php } ?>
        </div>


    </main>

    <script>
        var xhr;

        $("#deleteHotel").submit((event) => {

            
            event.preventDefault();
            var hotelId=$("#hotelId").val();
            
            xhr = new XMLHttpRequest();

            xhr.open("GET","/php/admin/delete.php?hotelid="+hotelId,true);

            xhr.onload=()=>{

                console.log(xhr.responseText);
            }

            xhr.send();
        })

        $("#editHotel").submit((event)=>{

            


        })

    </script>


</body>

</html>