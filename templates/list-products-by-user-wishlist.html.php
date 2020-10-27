
    
 


    <!-- list of products -->
    <div class="d-flex flex-wrap px-4">
        <!-- all these card objects are identical in terms of style-->

       <?php foreach ($products as $product) {?>
        <div class=" card-product d-flex flex-column col-6 col-md-4 col-md-4 col-lg-3 p-3">
            <a href="#"><img src="images/club1.jpg"></a>
            <div class="d-flex justify-content-center product-name pt-2"><?=$product['name'];?></div>
            <div class="d-flex justify-content-center price"><?=$product['price'];?></div>
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
            <a href="#"><img src="images/club1.jpg"></a>
            <div class="d-flex justify-content-center product-name pt-2"><?=$product['name'];?></div>
            <div class="d-flex justify-content-center price"><?=$product['price'];?></div>
        </div>

       <?php }?>

       </div>
    </div>