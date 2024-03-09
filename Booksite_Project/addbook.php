<?php
    // If the user is not logged in, redirect them back to login.php.
    session_start();
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("location: login.php");
        exit;
    }

    // If the form has been sent, add the book to the data file
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // In order to protect against cross-site scripting attacks (i.e. basic PHP security), remove HTML tags from all input.
        $title = strip_tags($_POST["title"]);
        $author = strip_tags($_POST["author"]);
        $year = strip_tags($_POST["year"]);
        $genre = strip_tags($_POST["genre"]);
        $description = strip_tags($_POST["description"]);

        // Read the file into array variable $books
        $json = file_get_contents("books.json");
        $books = json_decode($json, true);

         // Add the new book to the array
         $newBook = [
            "bookid" => $_POST["bookid"],
            "title" => $title,
            "author" => $author,
            "year" => $year,
            "genre" => $genre,
            "description" => $description
        ];

        $books[] = $newBook;

        // Once you have added the new book to the variable $books write it into the file.
        file_put_contents("books.json", json_encode($books));

        // Redirect the user back to the admin page
        header("location: admin.php");
        exit;
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
