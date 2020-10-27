<?php
session_start();
require '../templates/connect.php';
if (isset($_POST["addNewsletter"])) {
    unset($_POST["addNewsletter"]);
$stmt = $pdo->prepare('INSERT INTO newsletter(email) VALUES (:email)');
$stmt->execute(['email' => $_POST['email']]);
header( "refresh:5; url=." );
}

ob_start();
require '../templates/confirm-newsletter.html.php';
$content = ob_get_clean();

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




