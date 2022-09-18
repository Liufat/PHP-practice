<pre>
    <?php
     $ar1 = [1,2,3];
     print_r($ar1);

     $ar2 = &$ar1;

     array_pop($ar2);
     print_r($ar1);

     $a = 10;
     echo $a;
     $b = &$a;
     $b = 100;
     echo "<br>" .$a;
    ?>
</pre>