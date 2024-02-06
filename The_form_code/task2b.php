<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registration</title>

</head>

<body>

    <?php

        $name = $email = $password1 = $password2 = '';

 
        // Handle the form submit

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $name = $_POST['name'];

            $email = $_POST['email'];

            $password1 = $_POST['password1'];

            $password2 = $_POST['password2'];

 
            if ($name == '' OR $email == '' OR $password1 == '' OR $password2 == '') {

                echo "Please fill all the fields.";

            } elseif ($_POST['password1'] != $_POST['password2']) {

                echo "Passwords don't match.";

            } else {

                // Save the values to the database...

                echo "Welcome ", $_POST['name'];

            }

        } 

    ?>

    <form action="task2b.php" method="post">

        Name:

        <input name="name" value="<?php echo $name;?>" /><br>

        Email:

        <input name="email" type="email" value="<?php echo $email;?>"/><br>

        Password:

        <input name="password1" type="password" value="<?php echo $password1;?>"/><br>

        Repeat password:

        <input name="password2" type="password" value="<?php echo $password2;?>"/><br>

        <button type="submit">Register</button>

    </form>

</body>

</html>
