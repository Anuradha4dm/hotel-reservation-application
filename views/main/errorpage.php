<?php

include('../includes/head.php');


?>


</head>

<body>

    <?php
    include('../includes/navigation.php');
    include('./views/includes/navigation.php');

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

    }

    ?>
   
</body>

</html>
