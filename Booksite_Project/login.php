<?php
    // Check if the GET parameter "logout" is set. If so, log the user out.
    if (isset($_GET['logout'])) {
        session_start();
        session_destroy();
    }

    // Check if the user is already logged in. If so, redirect to admin.php.
    if (isset($_SESSION['username'])) {
        header("Location: admin.php");
        exit;
    }

    // Check if the form has been sent. If so, check the username and password and if correct, log the user in and redirect to admin.php.
    // If not correct, show the error message near the form.
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Sample user data (replace it with your own user data storage)
        $users = [
            ['username' => 'admin', 'password' => 'password'],
            // Add more users as needed
        ];

        foreach ($users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                session_start();
                $_SESSION['username'] = $username;
                header("Location: admin.php");
                exit;
            }
        }

        // Display an error message if the username or password is incorrect
        echo '<style>#error-message { color: red; }</style>';
        echo '<p id="error-message">Invalid username or password</p>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Favorite Books</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="booksite.css">
</head>
<body>
    <div id="container">
        <header>
            <h1>Your Favorite Books</h1>
        </header>
        <nav id="main-navi">
            <ul>
                <li><a href="booksite.php">Home</a></li>
                <li><a href="booksite.php?category=adventure">Adventure</a></li>
                <li><a href="booksite.php?category=classic">Classic Literature</a></li>
                <li><a href="booksite.php?category=coming-of-age">Coming-of-age</a></li>
                <li><a href="booksite.php?category=fantasy">Fantasy</a></li>
                <li><a href="booksite.php?category=historical">Historical Fiction</a></li>
                <li><a href="booksite.php?category=horror">Horror</a></li>
                <li><a href="booksite.php?category=mystery">Mystery</a></li>
                <li><a href="booksite.php?category=romance">Romance</a></li>
                <li><a href="booksite.php?category=scifi">Science Fiction</a></li>
            </ul>
        </nav>
        <main>
            <form action="login.php" method="post">
                <p>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username">
                </p>
                <p>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                </p>
                <p><input type="submit" name="login" value="Log in"></p>
            </form>
        </main>
    </div>    
</body>
</html>