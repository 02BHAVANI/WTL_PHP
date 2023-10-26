<!DOCTYPE html>
<html>
<head>
    <title>Add Employee Record</title>
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

        input[type="number"], input[type="text"], input[type="submit"] {
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
    <h1>Add Employee Record</h1>
    <form method="post" action="">
        EMP No: <input type="number" name="emp_no" required><br><br>
        Name: <input type="text" name="name" required><br><br>
        Department: <input type="text" name="department" required><br><br>
        Salary (Rs): <input type="number" name="salary" required><br><br>
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
        $empNo = $_POST['emp_no'];
        $name = $_POST['name'];
        $department = $_POST['department'];
        $salary = $_POST['salary'];

        // Insert the data into the Employee Table
        $sql = "INSERT INTO Employee (EmpNo, Name, Department, Salary) VALUES ('$empNo', '$name', '$department', '$salary')";

        if (mysqli_query($conn, $sql)) {
            echo "<p>Record added successfully.</p>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    // Display records with a salary greater than 50,000 Rs per month
    $result = mysqli_query($conn, "SELECT * FROM Employee WHERE Salary > 50000");
    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Employees with Salary > 50,000 Rs per month</h2>";
        echo "<table>";
        echo "<tr><th>EMP No</th><th>Name</th><th>Department</th><th>Salary (Rs)</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['EmpNo']."</td>";
            echo "<td>".$row['Name']."</td>";
            echo "<td>".$row['Department']."</td>";
            echo "<td>".$row['Salary']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No records found with a salary greater than 50,000 Rs per month.</p>";
    }

    // Close the database connection
    mysqli_close($conn);
    ?>
</body>
</html>
