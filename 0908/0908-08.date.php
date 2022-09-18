<pre>
<?php
// date_default_timezone_set('Asia/Taipei');
echo date("Y-m-d H:i:s") ."<br>";
echo date("Y-m-d H:i:s", time()) ."<br>";
echo date("Y-m-d H:i:s", time()+30*24*60*60) ."<br>";//PHP是秒，JS是毫秒

$t1 = strtotime('2022-09-08 14:00:00');//timestamp
$t2 = strtotime('2022/09/08 14:00:00');//timestamp
echo date("Y-m-d H:i:s", $t1). "<br>";
echo date("Y/m/d H:i:s", $t1). "<br>";
?>
</pre>