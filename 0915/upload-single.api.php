<?php
header('Content-Type:application/Json');
$folder = __DIR__ . './../upload/'; //上傳檔案的資料夾

$output = [
    'success' => false,
    'error' => '',
    'data' => [],
    'files' => $_FILES, //除錯用
];

if(empty($_FILES['single'])){
    $output['error'] = '沒有選擇檔案';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

if(! move_uploaded_file(
    $_FILES['single']['tmp_name'],
    $folder.$_FILES['single']['name'],
)){
    $output['error'] = '無法移動上傳檔案，請注意資料夾存取權限';
    echo json_encode($output,JSON_UNESCAPED_UNICODE);
    exit;
}

$output['success'] = true;
echo json_encode($output,JSON_UNESCAPED_UNICODE);
?>