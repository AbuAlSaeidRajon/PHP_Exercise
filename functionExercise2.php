<?php
function boolToString($bool) {
    if ($bool) {
        return 'true';
    }
    return 'false';
}

$age1 = 25;
$result1 = boolToString($age1);
print "checkAge($age1) returns " . ($result1 ? 'true' : 'false') . "\n";

$age2 = -2;
$result2 = boolToString($age2);
print "checkAge($age2) returns " . ($result2 ? 'true' : 'false') . "\n";

$age3 = 12;
$result3 = boolToString($age3);
print "checkAge($age3) returns " . ($result3 ? 'true' : 'false') . "\n";

$age4 = 12345678;
$result4 = boolToString($age4);
print "checkAge($age4) returns " . ($result4 ? 'true' : 'false') . "\n";
