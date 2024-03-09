<?php
    // If the user is not logged in, redirect them back to login.php.
    session_start();
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("location: login.php");
        exit;
    }

    // Check the POST parameter "bookid". If it's set, delete the corresponding book from the data file.
    if (isset($_POST['bookid'])) {
        $bookId = (int)$_POST['bookid'];
        $json = file_get_contents("books.json");
        $books = json_decode($json, true);

        // Find the index of the book to remove
        foreach ($books as $index => $book) {
            if ($book['id'] === $bookId) {
                array_splice($books, $index, 1);
                break;
            }
        }

        // Once you have removed the book from the variable $books write it into the file.
        file_put_contents("books.json", json_encode($books));
    }

    // Redirect back to admin.php.
    header("location: admin.php");
    exit;
?>