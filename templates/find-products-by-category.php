<?php
$products = $pdo->prepare('SELECT * FROM products WHERE subcategory_id IN (SELECT subcategory_id FROM subcategories WHERE category_id = :id) ');
$products->execute(['id' => $_GET['id']]);
//ORDER BY pub_date DESC
?>