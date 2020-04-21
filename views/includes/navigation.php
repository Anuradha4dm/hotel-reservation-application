<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">FreeBookingMe</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Hotels</a>
            </li>
            <?php



            if ($_SESSION['isLogin'] && $_SESSION['hotelUser']) {

                echo '<li class="nav-item">';
                echo '<a class="nav-link " href="/views/admin/add-hotel.php">Add Hotel</a>';
                echo  '</li>';

                echo '<li class="nav-item">';
                echo '<a class="nav-link " href="/views/admin/add-hotel.php">Add Room</a>';
                echo  '</li>';
            }

            if ($_SESSION['isLogin'] && $_SESSION['normalUser']) {

                echo '<li class="nav-item">';
                echo '<a class="nav-link " href="/views/main/my-favourite.php" >My Faourite</a>';
                echo  '</li>';

                echo '<li class="nav-item">';
                echo '<a class="nav-link " href="/views/admin/add-hotel.php">Bookings</a>';
                echo  '</li>';
            }


            ?>

        </ul>

        <?php
        
        echo '  <ul class="nav-item main-header__item-list">';
        if (!$_SESSION['isLogin']) {
            echo ' <li class="nav-item  main-header__item">';
            echo    '<a href="/views/authentication/login.php">Log in</a>';
            echo '</li>';



            echo  '<li class="nav-item main-header__item">';
            echo  '<a class="" href="/views/authentication/signup.php">Signup</a>';
            echo '</li>';
        }

        if ($_SESSION['isLogin']) {
            echo '<li class="nav-item main-header__item">';
            echo '<a href="/php/log-out-handler.php">Log out</a>';
            echo  '</li>';
        }

        echo '</ul>';

        ?>








        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>





</nav>