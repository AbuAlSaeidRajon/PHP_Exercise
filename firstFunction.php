<?php

function firstFunction() {
    print "Hello World!\n";
}

firstFunction();

function helloPerson ($name) {
    print "Hello $name!\n";
}

helloPerson("Joonas");



$foo = "bar";

function firstFunction() {
    print "Hello Universe!\n";
}

firstFunction();

function helloPerson ($name) {
    global $foo;
    print "Hello $name! ($foo)\n";
}

helloPerson("Hales");
helloPerson("Alex");

// Write a function called checkAge, which will return true if age is equal or over 18. otherwise it returns false. 
// examples: 

checkAge(25); //this should return true
checkAge(-2); //this shouldn return false
checkAge(12); // -"- false 
checkAge(12345678); // -"- true 