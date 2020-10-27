<?php
$products = $pdo->prepare('SELECT * FROM products WHERE product_id LIKE :keyword OR name LIKE :keyword OR description LIKE :keyword OR price LIKE :keyword ');
$products->execute(['keyword' => '%'. $_POST['keyword'] . '%']);

?>
