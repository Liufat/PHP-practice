<?php
$p = '123456';
echo password_verify($p, '$2y$10$WkFHMhdL/PHIvfiwrzFv1e92rHaD97JA.siFmnwl5oWNd86CPicVO') ? 'yes' : 'no' ;