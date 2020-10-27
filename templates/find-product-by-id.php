<?php
$stmt = $pdo->prepare('SELECT * FROM products WHERE product_id = :id');
$stmt->execute(['id' => $_GET['product_id']]);

 $product = $stmt->fetch();
//ORDER BY pub_date DESC
?>