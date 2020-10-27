<?php
session_start(); 

unset($_SESSION['loggedin']); 
unset($_SESSION['basket']);
$_SESSION['cart_counter']=0;
session_destroy();
echo 'You are now logged out, <a href="index.php">return to home page.</a>';

?>