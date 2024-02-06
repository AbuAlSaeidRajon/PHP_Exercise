<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <?php
        $name = $email = $password1 = $password2 = $gender = $other_gender = '';

        // Handle the form submit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password1 = $_POST['password1'];
            $password2 = $_POST['password2'];
            $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
            $other_gender = isset($_POST['other_gender']) ? $_POST['other_gender'] : '';

            if ($name == '' || $email == '' || $password1 == '' || $password2 == '' || $gender == '') {
                echo "Please fill all the fields.";
            } elseif ($password1 != $password2) {
                echo "Passwords don't match.";
            } else {
                // Save the values to the database...
                echo "Welcome ", $name, ". Gender: ", ($gender == 'other' ? $other_gender : $gender);
            }
        }
    ?>

    <form action="task3.php" method="post">
        Name:
        <input name="name" value="<?php echo $name; ?>" /><br>

        Email:
        <input name="email" type="email" value="<?php echo $email; ?>" /><br>

        Gender:
        <input type="radio" name="gender" value="male" <?php if ($gender == 'male') echo 'checked'; ?>> Male
        <input type="radio" name="gender" value="female" <?php if ($gender == 'female') echo 'checked'; ?>> Female
        <input type="radio" name="gender" value="other" <?php if ($gender == 'other') echo 'checked'; ?>> Other
        <input type="text" name="other_gender" value="<?php echo $other_gender; ?>" placeholder="Specify other gender"><br>

        Password:
        <input name="password1" type="password" value="<?php echo $password1; ?>" /><br>

        Repeat password:
        <input name="password2" type="password" value="<?php echo $password2; ?>" /><br>

        <button type="submit">Register</button>
    </form>
</body>

</html>
