<?php

$age = 17;
$nationality = 'Finnish';

if ($age < 18) {
    print "Can not Vote \n";
    print " ";

} else {
    if ($nationality !== 'Finnish') {
    print "Can not Vote\n";
    } else {
     print "Can Vote\n";
    } 
}

if (age < 18) {
    print "Child\n";
} elseif ($age < 35) {
    print "Young adult\n";
} elseif ($age < 65) {
    print "Middle age\n";
} else {
    print "Old";
}


/* TRUE && TRUE == TRUE
TRUE && FALSE == FALSE
FALSE && TRUE == FALSE
FALSE && FALSE == FALSE

TRUE || TRUE == FALSE
TRUE || FALSE == TRUE
FALSE || TRUE == TRUE
FALSE || FALSE == FALSE

TRUE && TRUE && FALSE == FALSE

$a != null && $b != null && $c != null

!TRUE == FALSE
TRUE !== FALSE */
