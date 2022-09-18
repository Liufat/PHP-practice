<?php
session_start();
header('content-type: application/Json');
echo json_encode($_SESSION, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);