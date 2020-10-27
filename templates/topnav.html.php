
    <!-- big screen nav -->
    <?php
        // if (!isset($_SESSION['loggedin'])) {
        //     $_SESSION['loggedin'] = 0;
        // }
    ?>
    <nav class="navbar d-none d-lg-flex navbar-light bg-light 
        border-top border-bottom border-dark sticky-top basketNav p-0">
        <div class="container-fluid px-4 d-flex flex-row justify-content-between">


            <div class=" d-flex flec-row align-self-center justify-self-start p-0">
                <a class="navbar-brand d-flex align-self-center justify-self-start p-0" href="#"><span
                        class="brandLogo p-0"> </span></a>
                <a class="navbar-brand  title d-flex align-self-center justify-self-end p-0" href="index.php"> STUARTS BALLS <small class="under-title d-flex align-self-end justify-self-end p-0"> the best price around</small> </a>
            </div>


            <div class=" px-0 d-flex flex-row justify-content-space-between">
                <div class="px-0 d-flex flex-row ">
                    <?php  if (isset($_SESSION['loggedin'])) {
                   echo' <a class="topbar-link nav-item nav-link" href="/profile.php?user_id='.$_SESSION['loggedin'].'">Account</a>
                   <a class="account nav-item nav-link" href="/profile.php?user_id='.$_SESSION['loggedin'].'"></a>';
                    }
                    else echo '<a class="topbar-link nav-item nav-link" href="#">Account</a>
                    <a class="account nav-item nav-link" href="#"></a>';
                   ?>
                   
                    <a class="topbar-link nav-item nav-link" href="/basket.php">Basket</a>
                    <a class="basket nav-item nav-link" href="/basket.php"><span class="basket-counter">100</span></a>

                    <?php
                    if (!isset($_SESSION['loggedin'])){
                       
                    echo'<a class="topbar-link nav-item nav-link" href="/login.php"> Log in/Register</a>';
                    }

                    
                    else {
                        echo'<a class="topbar-link nav-item nav-link" href="/logout.php"> Logout</a>';
                    }
                    ?>
                    <a class="login nav-item nav-link" href="/login.php"></a>
                </div>
            </div>
        </div>
    </nav>





    <!-- drop down -->
    <nav class="navbar d-lg-none navbar-light bg-light  border-bottom border-top sticky-top py-2 px-0">
        <div class="container-fluid align-content-center ">

            <button class="navbar-toggler  d-lg-none d-flex flex-column justify-self-start" type="button"
                data-toggle="collapse" data-target="#toggleMyNav" aria-controls="toggleMyNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>


            <div class=" d-flex flex-row align-content-center justify-self-center p-0">
                <a class="navbar-brand d-flex align-self-center  p-0" href="#"><span class="brandLogo p-0"> </span></a>
                <a class="navbar-brand  title d-flex align-self-center p-0" href="index.php"> STUARTS BALLS </a>
            </div>


            <div class=" drop-icons d-flex flex-row align-items-center  p-0 m-0">
            <?php  if (isset($_SESSION['loggedin'])) {
echo  ' <a href="/profile.php" class="account nav-item nav-link"></a>';
            } else 
            echo  ' <a href="" class="account nav-item nav-link"></a>';?>

                <a href="/basket.php" class="basket nav-item nav-link"><span class="basket-counter">10</span></a>

              
                <a href="/login.php" class="login nav-item nav-link"></a>
            </div>


            <!-- collapsible -->
            <div class=" px-0 pb-0 pt-3 collapse navbar-collapse" id="toggleMyNav">
                <div class="separator px-0">
                  <?php require 'category-list.html.php';?>
                </div>

                <div class="wishlist-container d-flex flex-row align-items-center py-3 ">
                    <a class="p-0 pr-3 nav-item nav-link" href="wishlist.php">Wishlist </a>
                    <a class="p-0 wishlist nav-item nav-link" href="wishlist.php"></a>

                </div>

                <form class="form-inline align-items-center pb-3 pt-4 px-0 "action="search.php?keyword=<?$keyword?>" method="POST">
                    <div class="input-group align-items-center">
                        <input class="form-control" type="text" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn btn-outline-dark" type="submit"> Go </button>
                        </div>
                    </div>
                </form>

            </div> <!-- end collapsible  -->
        </div>

        </div>
    </nav>
