<?php
$minutes = 63;
$hours = (int)($minutes / 60);
$extra_minutes = $minutes % 60;
print "$hours h $extra_minutes mins";
