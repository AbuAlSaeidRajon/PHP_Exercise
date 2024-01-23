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

function firstFunction1() {
    print "Hello Universe!\n";
}

firstFunction1();

function helloPerson ($name) {
    global $foo;
    print "Hello $name! ($foo)\n";
}

helloPerson("Hales");
helloPerson("Alex");