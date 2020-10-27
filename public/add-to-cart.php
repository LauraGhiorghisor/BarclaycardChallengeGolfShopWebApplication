<?php
session_start();

if (isset($_POST['add'])){


$_SESSION['card-tax']= 0.5;

$_SESSION['cart_counter']++;
unset ($_POST['add']);
require '../templates/connect.php';


header("location: basket.php");

foreach($_POST as $key => $val)
{

    $_SESSION['basket'][$_GET['product_id']][$key] =$val;

}

}
?>