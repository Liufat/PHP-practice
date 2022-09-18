<?php

require __DIR__. '/parts/connect_db.php';
$stmt = $pdo->query("SELECT * FROM categories");

// print_r($stmt->fetch());

echo json_encode($stmt->fetchAll(), JSON_UNESCAPED_UNICODE);

