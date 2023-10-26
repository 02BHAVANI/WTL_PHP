<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
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

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Factorial Calculator</h1>
    <form method="post" action="">
        Enter a number: <input type="text" name="number">
        <input type="submit" name="submit" value="Calculate Factorial">
    </form>

    <?php
    function factorial($n) {
        if ($n === 0) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    if (isset($_POST['submit'])) {
        $number = isset($_POST['number']) ? intval($_POST['number']) : 0;

        if ($number >= 0) {
            $result = factorial($number);
            echo "<p>Factorial of $number is: $result</p>";
        } else {
            echo "<p class='error'>Please enter a non-negative integer.</p>";
        }
    }
    ?>
</body>
</html>
