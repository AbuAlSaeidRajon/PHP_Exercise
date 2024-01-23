<?php
function checkAge($age) {
    return $age >= 18;
}


var_dump(checkAge(25));       
var_dump(checkAge(-2));       
var_dump(checkAge(12));       
var_dump(checkAge(12345678)); 
?>

