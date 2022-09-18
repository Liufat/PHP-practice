<?php

require __DIR__ . '/parts/connect_db.php';

$postData = [
    'name' => "生日哥",
    'email' => "birthdaybro.gmail.com",
    'mobile' => "09111111111",
    'birthday' => "2022-09-13",
    'address' => "糟糕島",
];

//正確的寫法
$sql = "INSERT INTO `address_book`(
    `name`, `email`, `mobile`,
    `birthday`, `address`, `created_at`) VALUES (
        ?, ?, ?, ?, ?, NOW()
)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    $postData['name'],
    $postData['email'],
    $postData['mobile'],
    $postData['birthday'],
    $postData['address'],
]);

echo $stmt->rowCount();
