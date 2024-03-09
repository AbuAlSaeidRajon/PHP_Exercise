<?php
    // You will receive a GET parameter "id", which contains the book id.
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

    // Check the cookie (with the name of your choice). It's recommended to save the favorite'd book ids as an array turned into string.
    $cookie_name = "favorites";
    if (isset($_COOKIE[$cookie_name])) {
        $favorites_string = $_COOKIE[$cookie_name];
        $favorites = explode(",", $favorites_string);
    } else {
        $favorites = [];
    }

    // If the cookie's not set or this id is not part of the cookie, add this id and send the cookie to the user.
    if (!in_array($id, $favorites)) {
        $favorites[] = $id;
    } else {
        // If it's part of the cookie, remove it and send the new cookie to the user.
        $favorites = array_diff($favorites, array($id));
    }

    // By far the easiest way to save the array as a string is to use json_encode
    $favorites_string = implode(",", $favorites);
    setcookie($cookie_name, $favorites_string, time()+86400*30);

    // Redirect back to booksite.php or the exact page user came from
    header("Location: " . (isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : "booksite.php"));
    exit;
?>