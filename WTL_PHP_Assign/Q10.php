<!DOCTYPE html>
<html>
<head>
    <title>Square Root Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        form {
            margin: 20px;
        }

        input[type="text"], input[type="submit"] {
            padding: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
            padding: 8px 20px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        p {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Square Root Calculator</h1>
    <form method="post" action="">
        Enter a number: <input type="text" name="number">
        <input type="submit" name="calculate" value="Calculate Square Root">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $number = isset($_POST['number']) ? floatval($_POST['number']) : 0;

        $squareRoot = sqrt($number);

        echo "<p>Square root of $number is: " . number_format($squareRoot, 2) . "</p>";
    }
    ?>
</body>
</html>


