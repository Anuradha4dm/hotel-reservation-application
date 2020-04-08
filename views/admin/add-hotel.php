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



    <main>
        <form class="hotel-add-form" action="../../php/add-hotel-handler.php" method="POST" enctype="multipart/form-data" >
            <div class="form-control">
                <label for="name">Hotel Name</label>
                <input type="text" name="name" id="name" >
            </div>
            <div class="form-control">
                <label for="imageUrl">Image Url</label>
                <input class="btn" type="file" name="imageUrl" id="imageUrl" >
            </div>
            <div class="form-control">
                <label for="address">Address</label>
                <input type="text" name="assress" id="address" >
            </div>
            <div class="form-control">
                <label for="contact-number">Contact Number</label>
                <input type="text" name="contact-number" id="contact-number" >
            </div>          

            <div class="form-control">
                <label  for="room-type">Room Type</label>
                <select class="room-type" name="room-type" id="">

                    <option value="single">Single</option>
                    <option value="double">Double</option>
                    <option value="triple">Triple</option>
                    <option value="quad">Quad</option>

                </select>

            </div>

            <div class="form-control">
                <label for="price">Price Per Each</label>
                <input type="number" name="price" id="price" step="0.01">
            </div>
            <div class="form-control">
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="5"></textarea>
            </div>

            <input type="hidden" value="<%= product._id %>" name="productId">


            <button class="btn" type="submit" name="submit">submit</button>
        </form>
    </main>

</body>

</html>