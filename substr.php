<?php
//substr($target, $start, $length);
$foo = "This is a string";
print substr($foo, 5, 2); // is
print substr($foo, 5); // is a string
print "\n";
//print substr($foo, -5);
print substr($foo, 5, -5);
