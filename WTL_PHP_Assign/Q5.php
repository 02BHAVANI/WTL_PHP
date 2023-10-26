<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Calculator</title>
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
    <h1>Electricity Bill Calculator</h1>
    <form method="post" action="">
        Enter the total units consumed: <input type="text" name="units">
        <input type="submit" name="calculate" value="Calculate Bill">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $units = isset($_POST['units']) ? intval($_POST['units']) : 0;
        $totalBill = 0;

        if ($units <= 50) {
            $totalBill = $units * 3.50;
        } elseif ($units <= 150) {
            $totalBill = (50 * 3.50) + (($units - 50) * 4.00);
        } elseif ($units <= 250) {
            $totalBill = (50 * 3.50) + (100 * 4.00) + (($units - 150) * 5.20);
        } else {
            $totalBill = (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + (($units - 250) * 6.50);
        }

        echo "<p>Total units consumed: $units</p>";
        echo "<p>Electricity bill: Rs. $totalBill</p>";
    }
    ?>
</body>
</html>
