<?php
    // If the user is not logged in, redirect them back to login.php.
    session_start();
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("location: login.php");
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
                <li><a href="admin.php">Admin Home</a></li>
                <li><a href="addbook.php">Add a New Book</a></li>
                <li><a href="login.php?logout">Log Out</a></li>
            </ul>
        </nav>
        <main>
            <h2>All Books</h2>
            <?php
                // This is almost identical to booksite.php (minus the genres). Make sure to print the correct id to the delete form.
                $books = json_decode(file_get_contents("books.json"), true);

                foreach ($books as $book) {
                    echo '
                    <section class="book">
                        <form class="deleteform" action="deletebook.php" method="post">
                            <input type="hidden" name="bookid" value="' . $book["id"] . '">
                            <input type="submit" name="deletebook" value="Delete">
                        </form>
                        <h3>' . $book["title"] . '</h3>
                        <p class="publishing-info">
                            <span class="author">' . $book["author"] . '</span>,
                            <span class="year">' . $book["year"] . '</span>
                        </p>
                        <p class="description">
                            ' . $book["description"] . '
                        </p>
                    </section>
                    ';
                }
            ?>
        </main>
    </div>    
</body>
</html>