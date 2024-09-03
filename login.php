<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location:index.php");
}

include 'connection.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($email && $password) {


        $query = "SELECT * FROM users
    WHERE email='$email';";

        $result = mysqli_query($con, $query);
        $rows = mysqli_fetch_array($result);


        echo $rows['email'];
        if ($rows > 0) {
            $verify = password_verify($password, $rows['password']);
            if ($verify) {
                echo "login success <br>";
                $_SESSION['username'] = $rows['name'];
                $_SESSION['role'] = "user";
                $_SESSION['user_id'] = $rows['id'];
                header("Location:index.php");
            } else {
                echo "wrong password";
            }
        } else {
            echo "Incorrect Email";
        }

        // if ($_SESSION['username']) {
        //     echo $_SESSION['username'];
        // }
    } else {
        echo "enter all fields ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <?php

    ?>
    <div class="container">
        <div class="login d-flex justify-content-center align-items-center flex-column vh-100 text-light">
            <form action="" class=" w-50 p-5 bg-secondary" method="POST">
                <div class="form-group text-center">
                    <h2>Login</h2>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
                <div class="text-center">
                    <a href="signup.php">Don't have an account sign up here</a>
                </div>
            </form>

        </div>
    </div>


</body>

</html>