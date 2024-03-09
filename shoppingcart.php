<?php
    // this is the associative array for our shopping cart 
    $cart = [];

    // check if the cookie for shopping cart has been set (you can choose the name)
    // if it's been set, overwrite $cart variable with it. The easiest way to switch between array and string is to use JSON.
    // so e.g. $cart = json_decode($_COOKIE["cart"], true);

    // check if the add form has been sent
    // if yes, add the new product to the $cart array and send the updated cookie
    // let's use JSON again, so e.g. $json = json_encode($cart);

    // check if the empty cart button has been pressed (key "emptycart" - the button's name attribute - exists in $_POST array)
    // if yes, empty the $cart array and set a new cookie that's set to expire in the past
?>

<?php
    session_start();

    // this is the associative array for our shopping cart
    $cart = [];

    // check if the cookie for shopping cart has been set (you can choose the name)
    if (isset($_COOKIE["cart"])) {
        // if it's been set, overwrite $cart variable with it
        $cart = json_decode($_COOKIE["cart"], true);
    }

    // check if the add form has been sent
    if (isset($_POST["addproduct"])) {
        // if yes, add the new product to the $cart array
        $productname = $_POST["productname"];
        $productamount = $_POST["productamount"];
        $cart[$productname] = $productamount;

        // send the updated cookie
        setcookie("cart", json_encode($cart), time() + 86400, "/");
    }

    // check if the empty cart button has been pressed (key "emptycart" - the button's name attribute - exists in $_POST array)
    if (isset($_POST["emptycart"])) {
        // if yes, empty the $cart array and set a new cookie that's set to expire in the past
        $cart = [];
        setcookie("cart", json_encode($cart), time() - 3600, "/");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>
    <form action="shoppingcart.php" method="post">
        <p>Choose product (choosing the same product will overwrite old entry):</p>
        <p><label for="productname">Product name:</label><br>
            <select id="productname" name="productname">
                <option value="Book">Book</option>
                <option value="Computer">Computer</option>
                <option value="Phone">Phone</option>
            </select>
        </p>
        <p><label for="productamount">Amount:</label><br>
            <input type="text" id="productamount" name="productamount">
        </p>
        <p><input type="submit" name="addproduct" value="Add to cart"></p>
    </form>

    <h3>Current shopping cart</h3>
    <div id="cart">
    <?php
        // print the contents of the cart here (loop through the $cart array's key - value pairs)
        foreach ($cart as $product => $amount) {
            echo "$amount x $product<br>";
        }

        // if you check for emptiness before looping, then you could print e.g. "No items." if there's nothing in the cart
        if (empty($cart)) {
            echo "No items.";
        }
    ?>

    <form action="shoppingcart.php" method="post">
        <input type="submit" name="emptycart" value="Empty cart">
    </form>
    </div>
</body>
</html>