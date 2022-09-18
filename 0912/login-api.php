<?php
session_start();
header('Content-Type: application/json');
$users = [
    'ming' => [
        'pw' => '1234',
        'nickname' => '小明',
    ],
    'shin' => [
        'pw' => '3456',
        'nickname' => '小新',
    ],
];

$output = [
    'success' => false,
    'error' => '',
    'code' => 0,
];

if(empty($_POST['account']) or empty($_POST['password'])){
    $output['error'] = '參數不足';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit; // 結束程式
}

if(empty($users[$_POST['account']])){
    $output['error'] = '帳號或密碼錯誤'; // 帳號錯誤
    $output['code'] = 401;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit; // 結束程式
}

$user = $users[$_POST['account']];
if($user['pw']===$_POST['password']){
    $output['success'] = true;
    $_SESSION['user1'] = [
        'account' => $_POST['account'],
        'nickname' => $user['nickname'],
    ];

} else {
    $output['error'] = '帳號或密碼錯誤'; // 帳號錯誤
    $output['code'] = 421;
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);