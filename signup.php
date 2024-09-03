<?php

if (isset($_SESSION['username'])) {
    header("Location:index.php");
}
include 'connection.php';

$info = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if (!preg_match('/[A-Za-z0-9\._%+\-]+@[A-Za-z0-9\.\-]+\.[A-Za-z]{2,}/', $email)) {
        $info = "Enter an valid email";
    } else {



        $query = "SELECT * from users where email='$email'";
        $result = mysqli_query($con, $query);
        $user = mysqli_fetch_all($result, MYSQLI_ASSOC);
        // echo "<pre>";
        // print_r($user);
        $user_count = count($user);
        if ($user_count === 0) {
            if ($name && $email && $password && $cpassword) {
                if ($password === $cpassword) {
                    $hashPass = password_hash($password, PASSWORD_BCRYPT);
                    $hashCpass = password_hash($cpassword, PASSWORD_BCRYPT);

                    $query = "INSERT INTO users(name, email, password, cpassword) VALUES ('$name','$email','$hashPass','$hashCpass')";
                    $result = mysqli_query($con, $query);

                    if ($result) {
                        $info = "data inserted successfully login and complete your profile";
                        // echo "data inserted successfully login and complete your profile";

                    } else {
                        // echo "not inserted";
                        $info = "not inserted";
                    }


                } else {
                    $info = "passwords are not matching";
                    // echo "passwords are not matching";
                }
            } else {
                // echo "enter all fields";
                $info = "enter all fields";
            }
        } else {
            $info = "user already exists please try with different email";
            // echo "user already exists please try with different email";
        }
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

    <div class="container  d-flex justify-content-center align-items-center vh-100  ">

        <div class="w-100 ">


            <div class="bg-secondary">
                <form action="" class="p-5 " method="POST" enctype="multipart/form-data">
                    <div class="row bg-white p-3">
                        <div class="col-lg-5 d-flex justify-content-center align-items-center flex-column">
                            <h3>Sign up</h3>
                            <div class="text-center">
                                <a href="login.php">Already have an account</a>
                            </div>
                        </div>
                        <div class="col-lg-7 bg-secondary p-4">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="cpassword" class="form-label">Confirm Password</label>
                                        <input type="password" name="cpassword" class="form-control" required>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <input type="submit" name="submit" value="Sign up" class="btn btn-primary">
                            </div>
                            <?php if ($info != "") {
                                echo $info;
                            } ?>
                        </div>
                    </div>



                </form>
            </div>
        </div>
    </div>

    <!-- <div class="container">
        <div class="login d-flex justify-content-center align-items-center flex-column vh-100 text-light">
            <form action="" class=" w-50 p-5 bg-secondary" method="POST">
                <div class="form-group text-center">
                    <h2>Sign Up</h2>
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="cpassword" class="form-label">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="submit" class="btn btn-primary">
                </div>
                <div class="text-center">
                    <a href="login.php">Already have an account</a>
                </div>
            </form>
        </div>
    </div> -->


</body>

</html>