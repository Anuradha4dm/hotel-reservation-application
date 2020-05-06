<?php

include('../includes/head.php');

?>

<title>LOG IN</title>
</head>

<body>

    <?php
    include('../includes/navigation.php');
    ?>


    <div class="container   p-3 my-3 border">

        <?php
        if ($_GET['msg']) {
            echo '<div class="alert alert-danger" role="alert">';
            echo '<h4>Invalid Details</h4>';
            echo '</div>';

            


        }

        ?>
        <form action="/php/log-in-handler.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $_COOKIE['remember']; ?>" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
                <input type="checkbox"  name="remember" value="remind" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">remember me</label>
            </div>


            <button type="submit" name="submit" class="btn btn-primary">Log In</button>
        </form>

    </div>
</body>

</html>