<?php
session_start();
include('../includes/head.php');

?>
<link rel="stylesheet" type="text/css" href="../../css/forms.css">
<link rel="stylesheet" type="text/css" href="../../css/product.css">

</head>

<body>

    <?php
    $hotelid=$_GET['hotelId'];
    $userid=$_SESSION['userID']; 

    include('../includes/navigation.php');
    include('../../php/connection.php');
    include('../../php/admin/fill-edit-hotel-profile.php');

    ?>

    <div class="container  mb-5">
        <form class="form-group" action="../../php/admin/update-hotel-data.php" method="POST" enctype="multipart/form-data">
            <div>
                <label for="emal">Email address</label>
                <input type="email" name="email" class="form-control" value="<?php echo   $hoteldata['email']?>" id="email" placeholder="name@example.com">
            </div>

            <div>
                <label for="hotelname">Hotel Name</label>
                <input type="text" class="form-control" id="hotelname" value="<?php echo   $hoteldata['hotelName']?>" name="hotelname">
            </div>

            <div>
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" value="<?php echo   $hoteldata['address']?>" name="address">
            </div>

            <div class="form-group">
                <label for="image">Select Image</label>
                <input type="file" class="form-control-file" id="image" name="imageUrl">
            </div>
        
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Some Comment</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="10"><?php echo   $hoteldata['description']?></textarea>
            </div>


            <div class="form-group">
                <input type="hidden" name="hotelid" value="<?php echo $hotelid?>"> 
                <input type="hidden" name="userid" value="<?php echo $userid?>">
                <button class="btn btn-success" type="submit" name="submit">submit</button>
            </div>
        </form>

       




    </div>

    <script>

        


    </script>

    
   

</body>

</html>