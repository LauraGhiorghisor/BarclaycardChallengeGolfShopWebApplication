<?php


session_start();

$AMOUNT = $_POST['AMOUNT'];
$CURRENCY = $_POST['CURRENCY'];
$LANGUAGE = $_POST['LANGUAGE'];
$ORDERID = $_POST['ORDERID'];
$PSPID = $_POST['PSPID'];
$SHAIN = $_POST['SHAIN'];

$ACTUALAMOUNT = (float)$AMOUNT * 100;

$SHASIGNATURE =	'AMOUNT='. $ACTUALAMOUNT . $SHAIN.
				'CURRENCY='. $CURRENCY . $SHAIN.
				'LANGUAGE='. $LANGUAGE . $SHAIN.
				'ORDERID='. $ORDERID . $SHAIN.
				'PSPID='. $PSPID . $SHAIN;
$SHASIGN = SHA1($SHASIGNATURE);
//$SHASIGN = hash('sha256', $SHASIGNATURE);
//$SHASIGN = hash('sha512', $SHASIGNATURE);
require '../templates/connect.php';


ob_start();
require '../templates/invoice.html.php';
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
