<pre>
<?php

$ar5 = [
    "name" =>"Nunu",
    "dog",
    "age" => 30,
    "cat",
];

foreach($ar5 as $v){ // 沒給key，就會是value
    echo "<p>$v</p>";
};

foreach($ar5 as $k => $v){ //名字可以自己取，但一定會是as key => value
    echo "<p>$k : $v</p>";
};
?>
</pre>