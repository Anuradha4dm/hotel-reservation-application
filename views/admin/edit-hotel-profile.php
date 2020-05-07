<?php

include('../includes/head.php');

?>
<link rel="stylesheet" type="text/css" href="../../css/forms.css">
<link rel="stylesheet" type="text/css" href="../../css/product.css">

</head>

<body>

    <?php

    include('../includes/navigation.php');
    include('../../php/connection.php');

    $hotelid=$_GET['hotelId'];

    ?>

    <div class="container  mb-5">
        <form class="form-group" action="../../php/admin/post-edit-hotel-profile.php" method="POST" enctype="multipart/form-data">
            <div>
                <label for="emal">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            </div>

            <div>
                <label for="hotelname">Hotel Name</label>
                <input type="text" class="form-control" id="hotelname" name="name">
            </div>

            <div>
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>

            <div class="form-group">
                <label for="image">Select Image</label>
                <input type="file" class="form-control-file" id="image" name="imageUrl">
            </div>
        


            <div class="form-group">
                <input type="hidden" name="hotelid" value="<?php echo $hotelid?>">
                <button class="btn btn-success" type="submit" name="submit">submit</button>
            </div>
        </form>




    </div>

    <script>

        


    </script>

    
   

</body>

</html>