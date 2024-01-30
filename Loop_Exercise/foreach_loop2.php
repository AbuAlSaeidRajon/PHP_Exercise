<?php
$stuent_grades = array(
    "Alice" => 85,
    "Bob" => 90,
    "Charlie" =>75,
    "David" => 88
);

foreach($stuent_grades as $student => $grade) {
    print "$student: $grade\n";
}