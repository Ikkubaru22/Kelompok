<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post">
        <label for="number1">Number 1:</label>
        <input type="number" id="number1" name="number1" required><br><br>
        
        <label for="number2">Number 2:</label>
        <input type="number" id="number2" name="number2" required><br><br>

        <input type="submit" name="operation" value="Add">
        <input type="submit" name="operation" value="Subtract">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $operation = $_POST['operation'];

        if ($operation == "Add") {
            $result = $number1 + $number2;
            echo "<h3>Result: $number1 + $number2 = $result</h3>";
        } elseif ($operation == "Subtract") {
            $result = $number1 - $number2;
            echo "<h3>Result: $number1 - $number2 = $result</h3>";
        }
    }
    ?>
</body>
</html>
