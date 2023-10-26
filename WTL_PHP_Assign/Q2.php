
<!DOCTYPE html>
<html>
<head>
    <title>Student Grade Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        input {
            padding: 5px;
            font-size: 16px;
        }

        button {
            padding: 8px 20px;
            font-size: 16px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        #result {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Student Grade Checker</h1>
    <label for="marks">Enter your marks: </label>
    <input type="number" id="marks" min="0" max="100">
    <button onclick="checkGrade()">Check Grade</button>

    <div id="result"></div>

    <script>
        function checkGrade() {
            var marks = parseFloat(document.getElementById("marks").value);

            if (marks >= 60) {
                document.getElementById("result").textContent = "Grade: First Division";
            } else if (marks >= 45 && marks <= 59) {
                document.getElementById("result").textContent = "Grade: Second Division";
            } else if (marks >= 33 && marks <= 44) {
                document.getElementById("result").textContent = "Grade: Third Division";
            } else if (marks < 33) {
                document.getElementById("result").textContent = "Grade: Fail";
            } else {
                document.getElementById("result").textContent = "Invalid input. Please enter a valid percentage.";
            }
        }
    </script>
</body>
</html>
