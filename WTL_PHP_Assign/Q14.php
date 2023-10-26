<!DOCTYPE html>
<html>
<head>
    <title>Add Student Record</title>
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

        input[type="text"], input[type="number"], input[type="submit"] {
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
    <h1>Add Student Record</h1>
    <form method="post" action="">
        Roll Number: <input type="number" name="roll_number" required><br><br>
        Name: <input type="text" name="name" required><br><br>
        City: <input type="text" name="city" required><br><br>
        Pin Code: <input type="number" name="pin_code" required><br><br>
        <input type="submit" name="add_record" value="Add Record">
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
        $rollNumber = $_POST['roll_number'];
        $name = $_POST['name'];
        $city = $_POST['city'];
        $pinCode = $_POST['pin_code'];

        // Insert the data into the Student Table
        $sql = "INSERT INTO Student (RollNumber, Name, City, PinCode) VALUES ('$rollNumber', '$name', '$city', '$pinCode')";

        if (mysqli_query($conn, $sql)) {
            echo "<p>Record added successfully.</p>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    // Display all records in the Student Table
    $result = mysqli_query($conn, "SELECT * FROM Student");
    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Student Records</h2>";
        echo "<table>";
        echo "<tr><th>Roll Number</th><th>Name</th><th>City</th><th>Pin Code</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['RollNumber']."</td>";
            echo "<td>".$row['Name']."</td>";
            echo "<td>".$row['City']."</td>";
            echo "<td>".$row['PinCode']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No records found in the Student Table.</p>";
    }

    // Close the database connection
    mysqli_close($conn);
    ?>
</body>
</html>

