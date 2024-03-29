// If we just want to loop through numbers, a for loop is a natural choice instead of a while loop. A much more common real-world example in PHP would be looping through input from a file or a database. Download the PHP file and data file below to your PHP folder and see if you can complete the program. (Don’t worry, it’s just one line you need to write.)

<?php
$file = fopen("input.txt", "r");

if ($file) {
    for (; ($i = fgets($file)) !== false;) {
        print $i;
    }

    fclose($file);
} else {
    print "Unable to open the file.";
}
