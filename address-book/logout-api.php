<?php

session_start();

unset($_SESSION['admin']);

// session_destroy(); 清除所有SESSION
header('Location: 0912-09.loinForm.php');