<?php
header('content-type: application/Json');

echo json_encode($_POST, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);