<?php
$stmt = $pdo->prepare('SELECT * FROM users WHERE user_id = :id');
$stmt->execute(['id' => $_GET['user_id']]);

 $user = $stmt->fetch();
//ORDER BY pub_date DESC
?>