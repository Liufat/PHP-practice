<?php

setcookie("mycookies" , "ABC" , time()+10);//設定時間

echo $_COOKIE['mycookies'];