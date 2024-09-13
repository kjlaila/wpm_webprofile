<?php
require 'connect.php';

if (isset($_POST["submit"])) {  
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_profile WHERE username = '$username' AND password = '$password'");
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {
            session_start();  
            $_SESSION["login"] = true;
            $_SESSION["username"] = $row["username"];
            header("Location: profile.php");
           exit;

        } else {
            echo "Wrong Password";  
        }
    } else {
        echo "User Not Registered";  
    }
    
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
        body {
            font-family: Arial, sans-serif;
            background-color: lightgoldenrodyellow;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background-color:whitesmoke;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            text-align: center;
        }

        .login-form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        .form-group button {
            background-color: red;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
	<div class="login-container">
	<h2>Login</h2>
	<form class="login-form" action="" method="post" autocomplete="off">
		<div class="form-group">
		<label for="username"> Username: </label>
		<input type="text" name="username" id="username" required value=""><br><br>
		</div>
		<div class="form-group">
		<label for="password"> Password: </label>
		<input type="password" name="password" id="password" required value=""><br><br>
		</div>
        <div class="form-group">
		<button type="submit" name="submit"> Login </button>
		<p> <a href="change_password.php">Change Password</a> </p>
		</div>
	</form>
	<br>

</body>
</div>
</html>