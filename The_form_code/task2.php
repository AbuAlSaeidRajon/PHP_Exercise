<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


    if ($_POST['name'] == ''
       OR $_POST['email'] == ''
       OR $_POST['password1'] == ''
       OR $_POST['password2'] == ''
    ) {
        echo "Please fill all the fields.";
        echo '<a href="task2.html">Back to the form</a>';
    } elseif ($_POST['password1'] != $_POST['password2']) {
        echo "Passwords don't match.";
        echo '<a href="task2.html">Back to the form</a>';
    } else {
        echo "Welcome ", ($_POST['name']) . '!';
    }
    ?>
</body>
</html>