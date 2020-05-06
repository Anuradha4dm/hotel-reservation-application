<?php

include('../includes/head.php');

?>

<title>LOG IN</title>
</head>

<body>

    <?php
    include('../includes/navigation.php');




    ?>
    <div class="container   p-2 my-3 border">

        <?php
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            if ($msg == 'passerr') {
                echo '<div class="alert alert-danger" role="alert">';
                echo 'Passwords Are Not Match';
                echo '</div>';
            }

            if ($msg == 'userexist') {
                echo '<div class="alert alert-danger" role="alert">';
                echo 'User Is Already Exist';
                echo '</div>';
            }

           
        }

        ?>
        <form action="/php/sign-up.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword2">Conform Password</label>
                <input type="password" name="conformPassword" class="form-control" id="exampleInputPassword2">
            </div>
           
            <div>

                <div class="btn-group btn-group-toggle form-group" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="rad" value="H" id="option1" autocomplete="off"> As Hotel User
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="rad" value="U" id="option2" autocomplete="off"> As Normal User
                    </label>

                </div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
        </form>

    </div>
</body>

</html>