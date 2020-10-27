<form action="add-to-cart.php?product_id=<?=$_GET['product_id']?>" method="POST">
    <div class="container py-5">
    <div class="row">
        <div class="col-md-7">
            <div class="row">
                <div class="col-md-12"><img class="img-thumbnail img-fluid center-block" src="images/g1.jpeg"></div>
            </div>
            <div class="row py-3">
                <div class="col-4 col-sm-4 col-md-4"><img class="img-thumbnail img-fluid center-block"
                        src="images/g1.jpeg"></div>
                <div class="col-4 col-sm-4 col-md-4"><img class="img-thumbnail img-fluid center-block"
                        src="images/g2.jpeg"></div>
                <div class="col-4 col-sm-4 col-md-4"><img class="img-thumbnail img-fluid center-block"
                        src="images/g3.jpeg"></div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="row details">
                <div class="col-12">
                    <h2 class="pl-2 orange"><?=$product['name'];?></h2>
                </div>
            </div>
            <p class="description pl-2"><?=$product['description'];?> </p>
            <div class="row py-2">
                <div class="col-6 col-sm-6 col-md-6">
                    <!-- <form action="#"> -->
                    <select name="loft">
                        <option>Chose Loft</option>
                        <option>Style1</option>
                        <option>Style2</option>
                        <option>Style3</option>
                    </select>
                    <!-- </form> -->
                </div>
                <div class="col-6 col-sm-6 col-md-6">
                    <!-- <form action="#"> -->
                    <select name="shaft">
                        <option>Chose Shaft Type</option>
                        <option>Type</option>
                        <option>Type</option>
                        <option>Type</option>
                    </select>
                    <!-- </form> -->

                </div>
            </div>

            <div class="row">
                <div class="col-6 col-sm-6 col-md-6">
                    <!-- <form action="#"> -->
                    <select name="flex">
                        <option>Chose Flex</option>
                        <option>Regular</option>
                        <option>Stiff</option>
                    </select>
                    <!-- </form> -->
                </div>
                <div class="col-6 col-sm-6 col-md-6">
                    <!-- <form action="#"> -->
                    <select name="hand">
                        <option>Chose hand</option>
                        <option>Left</option>
                        <option>Right</option>
                    </select>
                    <!-- </form> -->
                </div>
            </div>

            <div class="row py-2">

                <div class="col-6 col-sm-6 col-md-6">
                    <!-- <form action="#"> -->
                        
                    <label>Quantity: </label><input class="quantity" type="number" min="1" value="1" name="quantity" />
                    <p>Current Stock: <?=$product["stock"]?></p>
                    <!-- </form> -->
                </div>

                <div class="col-6 col-sm-6 col-md-6">
                    <!-- <form class="colors" action="#"> -->
                        <!-- <label class="blue">
                            <input type="radio" name="color" value="blue">
                            <div class="layer"></div>
                            <div class="button"><span></span></div>
                        </label>

                        <label class="black">
                            <input type="radio" name="color" value="black">
                            <div class="layer"></div>
                            <div class="button"><span></span></div>
                        </label>

                        <label class="red">
                            <input type="radio" name="color" value="red">
                            <div class="layer"></div>
                            <div class="button"><span></span></div>
                        </label> -->
                    <!-- </form> -->
                </div>
            </div>



            <div class="row">

                <div class="col-6 d-flex flex-row align-items-center">
                    <h4 class="price orange"> <label name="price"><?=$product['price']?></label></h4>
                </div>

                <div class="col-6 d-flex flex-row align-items-center">

                    <div class="mr-3">
                        <form-inline action="#">
                            <label class="wishlist product-page"></label>
                            </form>
                    </div>

                    <div>
                        <div class="add"><button class="btn add-to-cart btn-md orange" type="submit" name="add"> Add to
                                Cart</button></div>
                    </div>
                </div>

            </div>
</form>