<?php

$age = empty($_GET["age"]) ? 0 : intval($_GET["age"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h1 {
            color: red;
            text-shadow: 2px 2px 5px gray;
        }
    </style>
</head>

<body>
    <?php
    if ($age < 18) :
    ?>
        <h1>屁孩，長大點再來吧！</h1>
        <img src="./image/little-girl-1894125_1920.jpg" alt="" width="300">
    <?php
    else :
    ?>
        <h1>歡迎光臨！</h1>
        <img src="./image/2215726_square.webp" alt="" width="300">
    <?php
    endif;

    ?>
</body>

</html>