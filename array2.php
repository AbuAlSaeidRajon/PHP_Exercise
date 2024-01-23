<?php
$sales = [
    "Jan" => 123,
    "Feb" => 234,
    "Mar" => 345,
];

$sales2024 = [
    "Jan" => 12,
    "Feb" => 0,
    "Mar" => null,
];

$sales2024 = [
    "Jan" => 10,
    "Feb" => null,
    "Mar" => null,
];

$sales = [2023 => $sales2023, 2024 => $sales204];
var_dump($sales);

print $sales[2023]["Jan"];
print "\n";
$sales[2024]["Jan"] = $sales[2024]["Jan"] + 42;
print $sales[2024]["Jan"];
