
        <div class="col-12 orange-bg d-flex justify-content-center py-3">
            <h1><a href="#">NEW ARRIVALS</a></h1>
        </div>

        <div class="container-fluid d-flex flex-wrap justify-content-space-between px-0">
            <div class="col-12 col-sm-6 px-0"><a href="#"><img class="product" src="images/g1.jpeg"></a></div>
            <div class="col-12 col-sm-6 px-0"><a href="#"><img class="product" src="images/g2.jpeg"></a></div>
        </div>


        <div class="col-12 black-bg d-flex justify-content-center py-3">
            <h1><a href="#">ON SALE</a></h1>
        </div>
       
        <div class="container-fluid d-flex flex-wrap justify-content-space-between px-0">
                <div class="col-12 col-sm-6 px-0"><a href="#"><img class="product" src="images/g1.jpeg"></a></div>
                <div class="col-12 col-sm-6 px-0"><a href="#"><img class="product" src="images/g2.jpeg"></a></div>
            </div>
    


        <div class="col-12 white-bg d-flex justify-content-center py-3">
            <h1><a href="#">BRANDS</a></h1>
        </div>
       
        <div class="container-fluid d-flex flex-wrap justify-content-space-between px-0">
                <div class="col-12 col-sm-6 px-0"><a href="#"><img class="product" src="images/g1.jpeg"></a></div>
                <div class="col-12 col-sm-6 px-0"><a href="#"><img class="product" src="images/g2.jpeg"></a></div>
            </div>
            <style>

                #map{
                    height:400px;
                    width:100%;
                }
                </style>

            <h2 class="col-12 white-bg d-flex justify-content-center py-3">Find us here</h2>
        <div class="mb-5" id="map"></div>

            <script>
                function initMap() {
                    var options = {
                        zoom:15,
                        center:{lat:52.2405, lng:0.9027}
                    }

                    var map = new google.maps.Map(document.getElementById('map'), options);
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHaJQhY3xhbfj2YwALEt5yJr6sEXH4Dm0&callback=initMap"
            async defer></script>
    