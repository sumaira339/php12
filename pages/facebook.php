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
    $fullname = $_POST['fullname'];
    $sirname  = $_POST['sirname'];
    $gender   = $_POST['gender'];
    $dob      = $_POST['dob'];
    $mobile   = $_POST['mobile'];
    $password = $_POST['password'];

   
    $sql = "INSERT INTO `facebook`(`fullname`, `sirname`, `gender`, `dob`, `mobile`, `password`) 
            VALUES ('$fullname','$sirname','$gender','$dob','$mobile','$password')";

    if (mysqli_query($connect, $sql)) {
        header("Location: table-facebook.php");
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
  <title>Facebook Sign Up</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
  margin: 0;
  font-family: Arial, sans-serif;
  background-color: #f0f2f5;
}

.container {
  text-align: center;
  padding-top: 40px;
}

.logo {
  font-size: 48px;
  color: #1877f2;
  font-weight: bold;
  margin-bottom: 10px;
}

.signup-box {
  background-color: white;
  width: 400px;
  margin: 0 auto;
  padding: 25px 20px;
  border-radius: 8px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  text-align: left;
}

.signup-box h2 {
  margin: 0;
  font-size: 22px;
}

.signup-box p {
  font-size: 14px;
  margin: 5px 0 15px;
}

form .input-row {
  display: flex;
  gap: 10px;
  margin-bottom: 12px;
}

form input[type="text"],
form input[type="password"],
form select {
  width: 100%;
  padding: 8px;
  font-size: 14px;
  border: 1px solid #ccd0d5;
  border-radius: 5px;
}

.gender-row label {
  flex: 1;
  background-color: #f5f6f7;
  padding: 8px;
  border: 1px solid #ccd0d5;
  border-radius: 5px;
  font-size: 14px;
}

.gender-row input[type="radio"] {
  margin-right: 6px;
}

.info-text, .terms-text {
  font-size: 11px;
  color: #777;
  margin: 10px 0;
}

.signup-btn {
  width: 100%;
  background-color: #42b72a;
  color: white;
  font-size: 16px;
  padding: 10px 0;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  margin-top: 10px;
}

.signup-btn:hover {
  background-color: #36a420;
}

.login-link {
  text-align: center;
  margin-top: 12px;
  font-size: 14px;
}

  </style>
</head>
<body>
  <div class="container">
    <h1 class="logo">facebook</h1>
    <div class="signup-box">
      <h2>Create a new account</h2>
      <p>It's quick and easy.</p>
      <form method="POST" action="">
  <div class="input-row">
    <input type="text" name="fullname" placeholder="fullname" required>
    <input type="text" name="sirname" placeholder="Sirname" required>
  </div>

  <label>dob</label>
  <input type="date" name="dob" required>

  <label>Gender</label>
  <div class="input-row gender-row">
    <label><input type="radio" name="gender" value="Female" required> Female</label>
    <label><input type="radio" name="gender" value="Male" required> Male</label>
    <label><input type="radio" name="gender" value="Custom" required> Custom</label>
  </div>

  <input type="text" name="mobile" placeholder="Mobile" required>
  <input type="password" name="password" placeholder="New password" required>

  <button type="submit" class="signup-btn">Submit</button>
</form>

    </div>
  </div>
</body>
</html>
