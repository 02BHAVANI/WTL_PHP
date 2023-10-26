<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
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
    <h1>Temperature Converter</h1>
    <form method="post" action="">
        Enter temperature in Fahrenheit: <input type="text" name="fahrenheit">
        <input type="submit" name="convert" value="Convert">
    </form>

    <?php
    function fahrenheitToCelsius($fahrenheit) {
        return ($fahrenheit - 32) * 5/9;
    }

    function celsiusToFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }

    if (isset($_POST['convert'])) {
        $fahrenheit = isset($_POST['fahrenheit']) ? floatval($_POST['fahrenheit']) : 0;

        $celsius = fahrenheitToCelsius($fahrenheit);
        $fahrenheitConverted = celsiusToFahrenheit($celsius);

        echo "<p>$fahrenheit&deg;F is equal to $celsius&deg;C.</p>";
        echo "<p>$celsius&deg;C is equal to $fahrenheitConverted&deg;F.</p>";
    }
    ?>
</body>
</html>

