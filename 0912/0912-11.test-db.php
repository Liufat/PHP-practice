<?php
header('content-type: text/plain'); //一般文字訊息
require __DIR__ . '/parts/connect_db.php';
$stmt = $pdo->query("SELECT * FROM categories ORDER BY sid");

// print_r($stmt->fetch());

while ($r = $stmt->fetch()) { //while迴圈無法在fetch抓到資料後，自動停止迴圈
    print_r($r);
}
