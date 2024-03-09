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
