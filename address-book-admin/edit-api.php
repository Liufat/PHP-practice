<?php require __DIR__ . '/parts/admin-required.php';?>
<?php
require __DIR__ . '/parts/connect_db.php';
header('Content-Tyoe: application/json');

$output = [
    'success' => false,
    'error' => '',
    'code' => 0,
    'postData' => $_POST, //除錯用的
];

if (empty($_POST['name'])) {
    $output['error'] = '請輸入完整的資料';
    $output['code'] = 400;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}


//TODO 檢查欄位資料

//如果想允許資料是空值(以birthday為例)
$birthday = null;
if(strtotime($_POST['birthday'])!==false){//strtotime測試能否把時間轉換成字串，若能，輸出true
    $birthday = $_POST['birthday'];//若true，則輸出參數
}


$sql = "UPDATE `address_book` SET `name`=?,`email`=?,`mobile`=?,`birthday`=?,`address`=? WHERE  sid=?";
$stmt = $pdo->prepare($sql);

try{
$stmt->execute([
    $_POST['name'],
    $_POST['email'],
    $_POST['mobile'],
    $birthday,
    $_POST['address'],
    $_POST['sid'],
]);
} catch(PDOException $ex) { //捕捉錯誤訊息    *******
    $output['error'] = $ex->getMessage();
}

if ($stmt->rowCount()) {
    $output['success'] = true;
} else {
    $output['error'] = '修改失敗';
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);

