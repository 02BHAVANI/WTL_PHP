<!DOCTYPE html>
<html>
<head>
    <title>String Transformation</title>
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
    <h1>String Transformation</h1>
    <form method="post" action="">
        Enter a string: <input type="text" name="inputString">
        <input type="submit" name="transform" value="Transform String">
    </form>

    <?php
    if (isset($_POST['transform'])) {
        $inputString = isset($_POST['inputString']) ? $_POST['inputString'] : '';

        echo "<p>Original string: $inputString</p>";
        echo "<p>Uppercase: " . strtoupper($inputString) . "</p>";
        echo "<p>Lowercase: " . strtolower($inputString) . "</p>";
        echo "<p>First character uppercase: " . ucfirst($inputString) . "</p>";
        echo "<p>First character of words uppercase: " . ucwords($inputString) . "</p>";
    }
    ?>
</body>
</html>



