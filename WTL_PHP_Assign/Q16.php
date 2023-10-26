<!DOCTYPE html>
<html>
<head>
    <title>Add and Update User Record</title>
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

        input[type="text"], input[type="password"], input[type="number"], input[type="submit"] {
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

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Add and Update User Record</h1>
    <form method="post" action="">
        User ID: <input type="number" name="user_id" required><br><br>
        User Name: <input type="text" name="user_name" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" name="add_record" value="Add Record">
    </form>

    <h2>Update Password</h2>
    <form method="post" action="">
        User ID: <input type="number" name="update_user_id" required><br><br>
        New Password: <input type="password" name="new_password" required><br><br>
        <input type="submit" name="update_password" value="Update Password">
    </form>

    <?php
    // Database connection configuration
    $host = "your_host";
    $username = "your_username";
    $password = "your_password";
    $database = "your_database";

    // Create a connection to the database
    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the "Add Record" button is clicked
    if (isset($_POST['add_record'])) {
        $user_id = $_POST['user_id'];
        $user_name = $_POST['user_name'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Insert the data into the Users Table
        $sql = "INSERT INTO Users (UserId, UserName, Password) VALUES ('$user_id', '$user_name', '$password')";

        if (mysqli_query($conn, $sql)) {
            echo "<p>Record added successfully.</p>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    // Check if the "Update Password" button is clicked
    if (isset($_POST['update_password'])) {
        $update_user_id = $_POST['update_user_id'];
        $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

        // Update the user's password
        $update_sql = "UPDATE Users SET Password = '$new_password' WHERE UserId = '$update_user_id'";

        if (mysqli_query($conn, $update_sql)) {
            echo "<p>Password updated successfully.</p>";
        } else {
            echo "Error: " . $update_sql . "<br>" . mysqli_error($conn);
        }
    }

    // Display all records in the Users Table
    $result = mysqli_query($conn, "SELECT * FROM Users");
    if (mysqli_num_rows($result) > 0) {
        echo "<h2>User Records</h2>";
        echo "<table>";
        echo "<tr><th>User ID</th><th>User Name</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['UserId']."</td>";
            echo "<td>".$row['UserName']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No records found in the Users Table.</p>";
    }

    // Close the database connection
    mysqli_close($conn);
    ?>
</body>
</html>
