
    <?php
$subcats = $pdo->prepare('SELECT * FROM subcategories WHERE category_id = :id');
$subcats->execute(['id' => $_GET['id']]);
//ORDER BY pub_date DESC
?>
 
    
    <!-- categories  -->
    <div class="subcategories-container container-fluid py-4 mb-3">

        <div class="d-flex flex-row">



        <?php foreach ($subcats as $subcat) {?>

            <div class=" col d-flex flex-column ml-lg-2 ">
                <a class="title"> <?=$subcat['title'];?></a>
                <img class="d-flex align-content-center mr-3" src="images/club1.jpg">
            </div>
        <?php }?>

        </div> <!-- end row-->
    </div> <!-- end container-->




    <!-- filter section -->
    <!-- WHEN THE FILTER BUTTON IS PRESSED, IT SHOULD DROP DOWN THE id="filter-content-drop"  BELOW -->
    <div class="container-fluid  w-75 orange d-flex justify-content-center border-top border-secondary mb-3 mt-5">
            <a><button class="filter-separator d-flex align-items-center justify-content-center"> FILTER</button></a>
        </div>

    <div id="filter-content-drop" class="container-fluid d-flex flex-wrap filter-container px-5 pb-3 mb-5">


   <!-- separator for the filter section --> 
 
            <div class=" col-6 col-sm-3">
                <div class="filter-title orange">Brand</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Brandimus
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Maximus
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Invictus
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        GolfBR
                    </label>
                </div>
        
                <div class="form-check pt-3 mt-1">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label font-weight-bold orange " for="defaultCheck1">
                            New only
                        </label>
                    </div>
        
                </div> <!--end of first col-->
        
                <div class=" col-6 col-sm-3">
                <div class="filter-title orange">Gender</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Female
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Unisex
                    </label>
                </div>

                <div class="filter-title orange mt-5">Hand</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Left
                    </label>
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Right
                        </label>
                    </div>








            </div> <!-- end  col-->
        
                <div class="col-6 col-sm-3">
        
                <div class="filter-title orange">Color</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Gray
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Red
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Black
                    </label>
                </div>
        
            </div> <!-- end color col-->
                
        
                <!-- sort  -->
                <div class="col-6 col-sm-3">
                <div class="filter-title orange">Sort by</div>
        
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
                        checked>
                    <label class="form-check-label" for="exampleRadios1">
                        A-Z
                    </label>
                </div>
        
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
                        >
                    <label class="form-check-label" for="exampleRadios1">
                        Z-A
                    </label>
                </div>
        
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
                        >
                    <label class="form-check-label" for="exampleRadios1">
                        Highest price
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
                        >
                    <label class="form-check-label" for="exampleRadios1">
                        Lowest price
                    </label>
                </div>
        </div> <!-- close sort col-->


<!-- separator -->
        <div class="container-fluid  col-12 orange d-flex justify-content-center border-top border-secondary mb-3 mt-5">
            </div>



        </div> <!-- close filtering section-->
        

    <!-- list of products -->
    <div class="d-flex flex-wrap px-4">
        <!-- all these card objects are identical in terms of style-->

       <?php foreach ($products as $product) {?>
        <div class=" card-product d-flex flex-column col-6 col-md-4 col-md-4 col-lg-3 p-3">
            <a href="/product-page.php?product_id=<?=$product['product_id']?>"><img src="<?=$product['image']?>"></a>
            <div class="d-flex justify-content-center product-name pt-2"><?=$product['name'];?></div>
            <div class="d-flex justify-content-center price">£<?=$product['price']?></div>
        </div>

       <?php }?>


    </div>
    </div>




    <!-- Load more -->
    <div class="container  d-flex justify-content-center border-top border-secondary mb-3 mt-5">
        <a href="#"><button class="load-more d-flex align-items-center justify-content-center"> </button></a>
    </div>



    <?php 
    
$products = $pdo->prepare('SELECT * FROM products');
$products->execute();
    ?>



    <!-- list of products -->
    <div class="d-flex flex-wrap px-4">
    <?php    foreach ($products as $product) {?>
        <div class=" card-product d-flex flex-column col-6 col-md-4 col-md-4 col-lg-3 p-3">
            <a href="/product-page.php?product_id=<?=$product['product_id']?>"><img src="<?=$product['image']?>"></a>
            <div class="d-flex justify-content-center product-name pt-2"><?=$product['name'];?></div>
            <div class="d-flex justify-content-center price"><?=$product['price'];?></div>
        </div>

       <?php }?>

       </div>
    </div>