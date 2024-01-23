<?php
$a = [1, 2, 3, 4];
$b = $a;
$b[0] = 100;
$a[1] = 1;
print var_dump($a);
print var_dump($b);
