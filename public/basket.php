<?php 

session_start();
require '../templates/connect.php';


 
ob_start();

// require '../templates/find-products-by-basket.php';
require '../templates/list-products-by-basket.html.php';
$content = ob_get_clean();
 
 //else $content = '<div style = "height: 38vh; margin-top: 19vh;" class="container d-flex align-content-center justify-content-center"> <p>You must be logged in to view this page.  <a href="login.php"> Log in here!</a></p></div>'; 






// $login ='Log in';
ob_start();
require '../templates/find-categories.php';
require '../templates/topnav.html.php';
$topnav = ob_get_clean();


ob_start();
require '../templates/find-categories.php';
require '../templates/catnav.html.php';
$catnav = ob_get_clean();

ob_start();
require '../templates/carousel.html.php';
$carousel = ob_get_clean();


ob_start();
require '../templates/footer.html.php';
$footer = ob_get_clean();

require '../templates/layout-no-carousel.html.php';
?>
