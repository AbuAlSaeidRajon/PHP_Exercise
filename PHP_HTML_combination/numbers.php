<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positive Numbers</title>
</head>
<body>
<?php
    for ($i = 0; $i < $_POST["number"]; $i = $i + 2) {
        echo $i, '<br>';
    }
?>
</body>
</html>