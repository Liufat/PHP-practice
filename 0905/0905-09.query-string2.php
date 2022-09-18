<?php

//isset 有沒有設定值(空字串也算有設定)
$a = isset($_GET["a"]) ? intval($_GET["a"]) : 0;

//empty 是不是空值(0, "", null, undefined, [])
$b = empty($_GET["b"]) ? 0 : intval($_GET["b"]);

echo $a + $b;
