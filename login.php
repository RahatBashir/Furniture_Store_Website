<?php
session_start();
include('connection.php');

if (isset($_POST['btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($result);
        $userid  = $userdata['id'];
        $username = $userdata['name'];
        $usermail = $userdata['email'];
        $role_as = $userdata['role_as'];

        $_SESSION['auth_user'] = [
            'user_id' => $userid,
            'name' => $username,
            'email' => $usermail
        ];

        $_SESSION['role_as'] =  $role_as;

        if ($role_as == 1) {
            $_SESSION['message'] = "Welcome to DASHBOARD!";
            header("Location: admin/index.php");
        } else {
            $_SESSION['message'] = "Logged in Successfully!";
            header("Location: index.php");
        }
        exit(); // Ensure script stops after redirect
    } else {
        $_SESSION['message'] = "Invalid Email or Password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body>
    <form action="login.php" method="post">
        <div class="login-container">
            <h2>Login</h2>
            <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password" required>
            </div>
            <input type="submit" name="btn" value="Login" class="btn btn-primary">
            <p>Don't have an account? <button type="button" class="btn btn-secondary" onclick="redirectToRegister()">Register</button></p>
        </div>
    </form>
    <script>
        function redirectToRegister() {
            window.location.href = "register.php";
        }
    </script>
</body>
</html>
