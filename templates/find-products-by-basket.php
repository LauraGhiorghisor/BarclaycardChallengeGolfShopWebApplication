<?php
$products = $pdo->prepare('SELECT * FROM products ');
$products->execute();
//ORDER BY pub_date DESC
?>