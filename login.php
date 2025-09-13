<?php
session_start();

// Database connection
$servername = "localhost";
$database = "e_ration";

$conn = new mysqli($servername,"root","", $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to validate user login
function validate_login($username, $password, $conn) {
    $sql = "SELECT * FROM user WHERE card_no = '$username' AND pass = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['card_no'] = $row['card_no']; // Store username in session
        return true;
    } else {
        return false;
    }
}

// Check if login form is submitted
if (isset($_POST['submit'])) {
    $username = $_POST['cardnumber'];
    $password = $_POST['password'];

    // Validate user login
    if (validate_login($username, $password, $conn)) {
        header("Location: dash.php");
        exit();
    } else {
        $error_message = "Invalid username or password";
    }
}
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 15px 15px 0 0;
            text-align: center;
            padding: 20px;
        }

        .card-body {
            padding: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            border-radius: 8px;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            width: 100%;
            background-color: #f5f5f5;
            color: #333;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        button[type="submit"] {
            border-radius: 8px;
            padding: 12px;
            margin-top: 20px;
            width: 100%;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .text-center a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .text-center a:hover {
            color: #0056b3;
        }

        .alert {
            background-color: #dc3545;
            color: #fff;
            border-radius: 8px;
            padding: 10px;
            margin-top: 10px;
        }

        /* Additional Styles for Enhancement */
        .card {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 30px;
        }

        button[type="submit"] {
            font-weight: bold;
            letter-spacing: 1px;
        }

        .text-muted {
            color: #6c757d;
        }

        .forgot-password {
            margin-top: 15px;
            text-align: right;
        }

        .forgot-password a {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Login</h4>
            </div>
            <div class="card-body">
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="cardnumber">Card Number</label>
                        <input type="text" id="cardnumber" name="cardnumber" class="form-control" placeholder="Enter your card number" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
                <div class="text-muted forgot-password">
                    <a href="forgot_password.php"><center>Forgot Password?</center></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>