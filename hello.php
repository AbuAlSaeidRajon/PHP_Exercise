<?php
print "Hello World";
// echo "Hello World";
// we can also use echo instead of print 
// PHP doesn't have any ending tag

$foo = "bar";
print var_dump($foo);

$x = "world";
print "Hello $x!\n";
print 'Hello $x\n';
print("Hello \"$x\"!\n");
// \n this means a new line like <br> tag.


$x = "Business";
$y = "College";
//print $x . $y; there are no space in the middle that's why the output is showing without any space. 
print $x . " " . $y;

$firstName = "Osmo";
$lastName = "Pasila";
print($firstName . " " . $lastName . "\n");
