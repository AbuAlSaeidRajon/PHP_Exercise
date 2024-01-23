<!-- Write a function called checkAge, which will return true if age is equal or over 18. otherwise it returns false.  -->
<!-- examples:  -->
<!-- checkAge(25); //this should return true -->
<!-- checkAge(-2); //this should return false -->
<!-- checkAge(12); // -"- false  -->
<!-- checkAge(12345678); // -"- true  -->


<?php
function checkAge($age) {
    if ($age >= 18) {
        return true;
    } else {
        return false;
    }
}

$age1 = 25;
$result1 = checkAge($age1);
print "checkAge($age1) returns " . ($result1 ? 'true' : 'false') . "\n";

$age2 = -2;
$result2 = checkAge($age2);
print "checkAge($age2) returns " . ($result2 ? 'true' : 'false') . "\n";

$age3 = 12;
$result3 = checkAge($age3);
print "checkAge($age3) returns " . ($result3 ? 'true' : 'false') . "\n";

$age4 = 12345678;
$result4 = checkAge($age4);
print "checkAge($age4) returns " . ($result4 ? 'true' : 'false') . "\n";



