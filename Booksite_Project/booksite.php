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
                <li><a href="booksite.php?genre=adventure">Adventure</a></li>
                <li><a href="booksite.php?genre=classic">Classic Literature</a></li>
                <li><a href="booksite.php?genre=coming-of-age">Coming-of-age</a></li>
                <li><a href="booksite.php?genre=fantasy">Fantasy</a></li>
                <li><a href="booksite.php?genre=historical">Historical Fiction</a></li>
                <li><a href="booksite.php?genre=horror">Horror</a></li>
                <li><a href="booksite.php?genre=mystery">Mystery</a></li>
                <li><a href="booksite.php?genre=romance">Romance</a></li>
                <li><a href="booksite.php?genre=scifi">Science Fiction</a></li>
            </ul>
        </nav>
        <main>
            <?php
                // Here you should display the books of the given genre (GET parameter "genre"). Check the links above for parameter values.
                // If the parameter is not set, display all books.

                $genre = isset($_GET['genre']) ? $_GET['genre'] : '';
                $books = json_decode(file_get_contents("books.json"), true);

                if ($genre) {
                    $filteredBooks = [];
                    foreach ($books as $book) {
                        if (in_array($genre, $book['genres'])) {
                            $filteredBooks[] = $book;
                        }
                    }
                    $books = $filteredBooks;
                }

                // Use the HTML template below and a loop (+ conditional if the genre was given) to go through the books in file  

                foreach ($books as $book) {
                    $favorite = isset($_COOKIE["favorites"]) && in_array($book['id'], json_decode($_COOKIE["favorites"], true));
                    $bookmarkClass = $favorite ? 'fa-star' : 'fa-star-o';
                    echo '
            <section class="book">
                <a class="bookmark fa fa-' . $bookmarkClass . '" href="setfavorite.php?id=' . $book["id"] . '"></a>
                <h3>' . htmlspecialchars($book["title"]) . '</h3>
                <p class="publishing-info">
                    <span class="author">' . htmlspecialchars($book["author"]) . '</span>,
                    <span class="year">' . htmlspecialchars($book["year"]) . '</span>
                </p>
                <p class="description">
                    ' . htmlspecialchars($book["description"]) . '
                </p>
            </section>
            ';
                }
            ?>
        </main>
    </div>    
</body>
</html>