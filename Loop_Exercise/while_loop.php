<?php
$i = 1;
while($i <=10) {
    print $i;
    $i++;
}

$j = 10;
while($j >= 1) {
    print $j;
    $j--;
}

$i = 1;
while($i <=10) {
    if($i == 5) {
        $i++;
        continue;
    }
    print $i;
    $i++;
}