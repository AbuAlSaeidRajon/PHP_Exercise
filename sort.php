<?php
$a = [5, 6, 3, 4, 3, 7, 9, 9, 12];
$b = $a;
$c = sort($b);
//$c is always true..........
print var_dump($a);
print var_dump($b);
print var_dump($c);



$customerAges = [5, 6, 3, 4, 3, 7, 9, 9, 12];
$customers_sorted = $customer_Ages;
sort($customers_sorted);
print var_dump($customers_sorted);


$customer = [5, 6, 3, 4, 3, 7, 9, 9, 12];
$customers_sorted = $customer_Ages;
sort($customers_sorted);
$last = count($customers_sorted) -1;

print "Youngest customer is $customers_sorted[0] years old";
print "Oldest customer is $customers_sorted[$last] years old";

