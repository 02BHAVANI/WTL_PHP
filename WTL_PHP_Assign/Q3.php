<!DOCTYPE html>
<html>
<head>
    <title>Day of the Week</title>
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
    <h1>Day of the Week</h1>
    <label for="dayNumber">Enter a number (1 to 7): </label>
    <input type="number" id="dayNumber" min="1" max="7">
    <button onclick="findDay()">Find Day</button>

    <div id="result"></div>

    <script>
        function findDay() {
            var dayNumber = parseInt(document.getElementById("dayNumber").value);
            var day;

            switch (dayNumber) {
                case 1:
                    day = "Monday";
                    break;
                case 2:
                    day = "Tuesday";
                    break;
                case 3:
                    day = "Wednesday";
                    break;
                case 4:
                    day = "Thursday";
                    break;
                case 5:
                    day = "Friday";
                    break;
                case 6:
                    day = "Saturday";
                    break;
                case 7:
                    day = "Sunday";
                    break;
                default:
                    day = "Invalid number";
                    break;
            }

            document.getElementById("result").innerHTML = "Day of the week: " + day;
        }
    </script>
</body>
</html>

