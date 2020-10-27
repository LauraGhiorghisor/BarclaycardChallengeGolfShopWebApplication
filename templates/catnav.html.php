
 <nav
        class="navbar d-none d-lg-flex bg-light align-items-center justify-content-around  border-bottom border-dark sticky-top secondNav">
        <!-- <div class="navbar-brand">WEBSITE COOL </div> -->
       <?php require 'find-categories.php'; require 'category-list-second.html.php';?>

        
        <div class="d-flex flex-row align-items-center">
            <a class="p-0 pr-1 nav-item nav-link font-weight-bold" href="wishlist.php">Wishlist </a>
            <a class="p-0 wishlist nav-item nav-link" href="wishlist.php"></a>
        </div>
        <form class=" form-inline align-content-center" action="search.php" method="POST">
            <div class="input-group align-items-center">
                <input class="form-control" type="text" placeholder="Search">
                <div class="input-group-append">
                    <button class="btn btn-outline-dark" type="submit"> Go </button>
                </div>
            </div>
        </form>

    </nav>
    <!--end second nav -->




    <!-- second nav drops -->

    <div class="container-fluid drop-content  d-none px-5 py-3">

        <div class="row d-flex ">

            <div class=" col d-flex flex-column  ">
                <a class="title"> Sub Category 1</a>
                <a href="#">Sub-subcategory 1</a>
                <a href="#">Sub-subcategory 2</a>
                <a href="#">Sub-subcategory 3</a>
            </div>

            <div class=" col d-flex flex-column px-5">
                <a class="title"> Sub Category 1</a>
                <a href="#">Sub-subcategory 1</a>
                <a href="#">Sub-subcategory 2</a>
                <a href="#">Sub-subcategory 3</a>
            </div>

            <div class=" col d-flex flex-column px-5">
                <a class="title"> Sub Category 1</a>
                <a href="#">Sub-subcategory 1</a>
                <a href="#">Sub-subcategory 2</a>
                <a href="#">Sub-subcategory 3</a>
            </div>


            <div class=" col-3 justify-self-end ad d-flex flex-column px-5">

                <button class="drop-button d-flex align-self-center"> <a href="#">SHOP NOW</a></button>
            </div>

        </div> <!-- end row-->
    </div> <!-- end container-->
