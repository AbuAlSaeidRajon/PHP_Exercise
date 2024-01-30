// Make a program that prints all positive numbers that are smaller than 100 and even, in this order: 2 98 4 96 6 94... Print result in one line.

<?php
$i = '';

for ($counter = 2; $counter < 100; $counter += 2) {
    $i .= $counter . ' ' . (100 - $counter) . ' ';
}

print $i;


