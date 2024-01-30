<?php

$colors = array("red", "blue", "green", "yellow");

/*for($i = 0; i < count($colors); $i++) {
    print $colors[$i] . "\n";
} */

foreach($colors as $color) {
// for each item in "$colors", we know them as $color (one at a time)    
    print $color;
}