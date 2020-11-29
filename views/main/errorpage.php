<?php

include('../includes/head.php');


?>


</head>

<body>

    <?php
    include('../includes/navigation.php');
 
    if(isset($_GET['msg'])){

        $msg=$_GET['msg'];

        if($msg=='noprofile'){

            echo '<div class="alert alert-danger" role="alert">';
            echo '<h4>No Hotel Rooms Available</h4>';
            echo '</div>';
           
        }
        if($msg=='nohotel'){

            echo '<div class="alert alert-danger" role="alert">';
            echo '<h4>No Hotels Available</h4>';
            echo '</div>';
           
        }
        if($msg=="database_error"){
            echo '<div class="alert alert-danger" role="alert">';
            echo '<h4>Database Fail. We are working on that now</h4>';
            echo '</div>';
        }
        if($msg=="update_fail"){

            echo '<div class="alert alert-danger" role="alert">';
            echo '<h4>update fail! Try again.....</h4>';
            echo '</div>';

        }

        if($msg=="hotel_not_found"){

            echo '<div class="alert alert-danger" role="alert">';
            echo '<h4>Hotel profile can not found! Try again.....</h4>';
            echo '</div>';

        }
       

    }

    ?>
   
</body>

</html>
