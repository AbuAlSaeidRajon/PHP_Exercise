<?php
    session_start();

    $error_msg = "";

    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $valid_usernames = ["student" => "bc-college", "teacher" => "react"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (isset($valid_usernames[$username]) && $valid_usernames[$username] === $password) {
            $_SESSION["username"] = $username;
            header("Location: memberpage.php");
            exit;
        } else {
            $error_msg = "Wrong username or password.";
        }
    }

    if (isset($_GET["logout"])) {
        session_destroy();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login task</title>
</head>
<body>
    <form action="login.php" method="post">
        <p><label for="username">User name: </label><input type="text" id="username" name="username"></p>
        <p><label for="password">Password: </label><input type="password" id="password" name="password"></p>
        <p><?php print $error_msg; ?></p>
        <p><input type="submit" id="login-button" value="Log in"></p>
    </form>
</body>
</html>