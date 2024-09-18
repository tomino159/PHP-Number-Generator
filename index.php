<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Number Generator</title>
</head>
<body>
    <form action="" method="post">
        <label for="min">Minimum: </label>
        <input type="number" name="min" id="min" required>
        <label for="max">Maximum: </label>
        <input type="number" name="max" id="max" required>
        <br><br>
        <button type="submit" name="generate">Generate number</button>
    </form>
    <?php 
        if(isset($_POST["generate"])) {
            $min = $_POST["min"];
            $max = $_POST["max"];

            if($min >= $max) {
                echo "<h3>Error: The minimum value must be less than the maximum!</h3>";
            } else {
                $randomNumber = rand($min, $max);
                echo "<h3>Random number between $min and $max is: $randomNumber</h3>";
            }
        }
    ?>
</body>
</html>