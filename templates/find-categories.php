<?php
$categories = $pdo->prepare('SELECT * FROM categories');
$categories->execute();
?>