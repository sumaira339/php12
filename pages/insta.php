<?php

$host = "localhost";
$username = "root";
$pass = "";
$dbname = "project";
$connect = mysqli_connect($host, $username, $pass, $dbname);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = $_POST['email'];
    $fullname = $_POST['fullname'];
    $gender   = $_POST['gender'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `insta`(`email`, `fullname`, `gender`, `password`) 
            VALUES ('$email', '$fullname', '$gender', '$password')";

    if (mysqli_query($connect, $sql)) {
        header("Location: insta.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}

?>












<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instagram Sign Up</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #fafafa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .signup-box {
      background: #fff;
      border: 1px solid #dbdbdb;
      padding: 40px;
      width: 320px;
      text-align: center;
    }
    .signup-box h1 {
      font-family: 'Arial Black', sans-serif;
      font-size: 28px;
      margin-bottom: 10px;
    }
    .signup-box p {
      font-size: 14px;
      color: #8e8e8e;
      margin-bottom: 20px;
    }
    .signup-box input {
      width: 100%;
      padding: 10px;
      margin: 6px 0;
      border: 1px solid #dbdbdb;
      border-radius: 4px;
      background: #fafafa;
    }
    .gender-row {
      display: flex;
      justify-content: space-around;
      margin: 10px 0;
      font-size: 14px;
      color: #555;
    }
    .signup-box button {
      width: 100%;
      padding: 10px;
      background: #0095f6;
      border: none;
      color: white;
      font-weight: bold;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 10px;
    }
    .signup-box button:hover {
      background: #0077cc;
    }
    .signup-box .or {
      margin: 15px 0;
      color: #999;
      font-size: 13px;
    }
    .signup-box a {
      text-decoration: none;
      color: #00376b;
      font-size: 13px;
    }
    .login-link {
      margin-top: 15px;
      background: #fff;
      border: 1px solid #dbdbdb;
      padding: 20px;
      font-size: 14px;
      text-align: center;
    }
    .login-link a {
      color: #0095f6;
      font-weight: bold;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div>
    <div class="signup-box">
      <h1>Instagram</h1>
      <p>Sign up to see photos and videos from your friends.</p>
      <form method="POST" action="">
  <input type="text" name="email" placeholder="Mobile Number or Email" required>
  <input type="text" name="fullname" placeholder="fullname" required>
  <input type="password" name="password" placeholder="Password" required>

  <div class="gender-row">
    <label><input type="radio" name="gender" value="male" required> Male</label>
    <label><input type="radio" name="gender" value="female"> Female</label>
    <label><input type="radio" name="gender" value="custom"> Custom</label>
  </div>

  <button type="submit">Sign Up</button>
</form>

      <div class="or">OR</div>
      <a href="#">Already have an account? Log in</a>
    </div>
    <div class="login-link">
      Have an account? <a href="#">Log in</a>
    </div>
  </div>
</body>
</html>
