<?php

 $ar1 = [
    "name" => "野原 新之助",
    "age" => 5,
 ];

 echo json_encode($ar1);
 echo "<br>".json_encode($ar1, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
 ?>