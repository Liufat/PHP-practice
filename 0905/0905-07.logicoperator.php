<pre>
<?php

$a = 5 || 7;//結果為布林值

var_dump($a);

$b = 5 or 7;// or, and的優先權比 = 低

var_dump($b);//5

$c = 5 and 7;// or, and的優先權比 = 低

var_dump($c);//5


$d = (5 and 7);

var_dump($d);

?>
</pre>
