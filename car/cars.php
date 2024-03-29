<?php
    $cars = json_decode(file_get_contents("cars.json"), true);

    if (isset($_POST["add-car"])) {
        $new_car = [
            "Number" => $_POST["number"],
            "Make" => $_POST["make"],
            "Model" => $_POST["model"],
            "Color" => $_POST["color"]
        ];

        $cars[] = $new_car;
        file_put_contents("cars.json", json_encode($cars));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
    <style>
        #cars {
            border: 1px solid #000000;    
        }
        #cars th, #cars td {
            border: 1px solid #000000;
            padding: 5px;
        }

        label {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>
<body>
    <h3>Current cars</h3>

    <table id="cars">
        <tr>
            <th>License number</th>
            <th>Make</th>
            <th>Model</th>
            <th>Color</th>
        </tr>
        <?php
            foreach ($cars as $car) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($car["Number"]) . "</td>";
                echo "<td>" . htmlspecialchars($car["Make"]) . "</td>";
                echo "<td>" . htmlspecialchars($car["Model"]) . "</td>";
                echo "<td>" . htmlspecialchars($car["Color"]) . "</td>";
                echo "</tr>";
            }
        ?>
    </table>

    <h3>Add a new car</h3>
    <form action="cars.php" method="post">
        <p><label for="number">Number:</label><input type="text" id="number" name="number"></p>
        <p><label for="make">Make:</label><input type="text" id="make" name="make"></p>
        <p><label for="model">Model:</label><input type="text" id="model" name="model"></p>
        <p><label for="Color">Color:</label><input type="text" id="color" name="color"></p>
        <p><input type="submit" name="add-car" value="Add new car"></p>
    </form>
    
</body>
</html>