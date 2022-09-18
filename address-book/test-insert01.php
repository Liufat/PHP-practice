<?php

require __DIR__ . '/parts/connect_db.php';

$postData = [
    'name'=>"生日哥",
    'email'=>"birthdaybro.gmail.com",
    'mobile'=>"09111111111",
    'birthday'=>"2022-09-13",
    'address'=>"糟糕島",
];

//錯誤的寫法
$sql = sprintf("INSERT INTO `address_book`(
    `name`, `email`, `mobile`,
    `birthday`, `address`, `created_at`) VALUES (
        /*%s*/ '%s', '%s', '%s', '%s', '%s', NOW() 
)",
    $postData['name'],//若輸入含單引號(')的字串(ex 生日哥's派對)，會因為欄位內容重複有單引號而導致錯誤，這時要使用quote的方法，但對應的%s需要移除單引號
    // $pdo->quote($postData['name']), 
    $postData['email'],
    $postData['mobile'],
    $postData['birthday'],
    $postData['address'],
    );

    $stmt = $pdo->query($sql);

    echo $stmt->rowCount();