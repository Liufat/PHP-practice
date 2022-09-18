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
</head>

<body>
<?php
if($age < 18) {
    echo "長大點再來";
} else {
    echo "歡迎光臨";
};
?>
</body>

</html>