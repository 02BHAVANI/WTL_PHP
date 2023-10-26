<!DOCTYPE html>
<html>
<head>
    <title>Integer Digit Reversal</title>
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

        input[type="number"], input[type="submit"] {
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
    <h1>Integer Digit Reversal</h1>
    <form method="post" action="">
        Enter an integer: <input type="number" name="integer">
        <input type="submit" name="reverse" value="Reverse Digits">
    </form>

    <?php
    if (isset($_POST['reverse'])) {
        $integer = isset($_POST['integer']) ? intval($_POST['integer']) : 0;

        $reversedInteger = intval(strrev(strval($integer)));

        echo "<p>Original integer: $integer</p>";
        echo "<p>Reversed integer: $reversedInteger</p>";
    }
    ?>
</body>
</html>
