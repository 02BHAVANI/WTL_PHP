<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
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
    <h1>Palindrome Checker</h1>
    <form method="post" action="">
        Enter a string: <input type="text" name="inputString">
        <input type="submit" name="check" value="Check Palindrome">
    </form>

    <?php
    function isPalindrome($str) {
        $str = str_replace(' ', '', $str); // Remove spaces
        $str = strtolower($str); // Convert to lowercase
        $strReversed = strrev($str); // Reverse the string

        return $str === $strReversed;
    }

    if (isset($_POST['check'])) {
        $inputString = isset($_POST['inputString']) ? $_POST['inputString'] : '';
        
        if (isPalindrome($inputString)) {
            echo "<p>'$inputString' is a palindrome.</p>";
        } else {
            echo "<p>'$inputString' is not a palindrome.</p>";
        }
    }
    ?>
</body>
</html>



