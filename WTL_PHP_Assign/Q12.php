<!DOCTYPE html>
<html>
<head>
    <title>Power of Four Checker</title>
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
    <h1>Power of Four Checker</h1>
    <form method="post" action="">
        Enter a positive integer: <input type="number" name="integer" min="1">
        <input type="submit" name="check" value="Check Power of Four">
    </form>

    <?php
    if (isset($_POST['check'])) {
        $integer = isset($_POST['integer']) ? intval($_POST['integer']) : 0;

        $result = $integer;
        while ($result > 1 && $result % 4 == 0) {
            $result /= 4;
        }

        if ($result == 1) {
            echo "<p>$integer is a power of four.</p>";
        } else {
            echo "<p>$integer is not a power of four.</p>";
        }
    }
    ?>
</body>
</html>
