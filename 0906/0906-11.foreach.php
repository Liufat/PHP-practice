<pre>
<?php

$ar5 = [
    "a" => 10,
    "b" => 20,
    "c" => 30,
    "d" => 40,

];

foreach($ar5 as $v){ // 沒給key，就會是value
    echo "<p>$v</p>";
};

foreach($ar5 as $k => &$v){ //名字可以自己取，但一定會是as key => value
    $v++;
};

print_r($ar5)


?>
</pre>