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
    ?>

    <div class="container  mb-5">
        <form class="form-group" action="../../php/add-hotel-handler.php" method="POST" enctype="multipart/form-data">
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
                <label for="type">Example select</label>
                <select class="form-control" id="type" name="room-type">
                    <option value="single">Single</option>
                    <option value="double">Double</option>
                    <option value="triple">Triple</option>
                    <option value="quad">Quad</option>

                </select>
            </div>
            <div class="form-group">
                <label for="qty">number of rooms</label>
                <input type="number" class="form-control-file" id="qty" name="quatity">
            </div>

            <div class="form-group">
                <label for="price">Price Of Each</label>
                <input type="number" class="form-control-file" id="price" name="price" step="0.01">
            </div>
            <div class="form-group">
                <label for="contact">Contact Number</label>
                <input type="number" class="form-control-file" id="contact" name="contact-number">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Some Comment</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group">
            <button class="btn btn-success" type="submit" name="submit">submit</button>
            </div>
        </form>




    </div>



   

</body>

</html>