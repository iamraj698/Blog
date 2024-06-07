<?php
include 'connection.php';
$id = $_GET['id'];

$error = "";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $file = $_FILES['photo'];
    if ($name && $email && $password && $cpassword && $file) {
        if ($password === $cpassword) {
            $hashPass = password_hash($password, PASSWORD_BCRYPT);
            $hashCpass = password_hash($cpassword, PASSWORD_BCRYPT);

            $filename = $file['name'];
            $filepath = $file['tmp_name'];
            $fileerror = $file['error'];
            if ($fileerror === 0) {
                $destination = 'profile/' . $filename;
                move_uploaded_file($filepath, $destination);
            }

            $query = "UPDATE users set name='$name',email='$email', password='$hashPass', cpassword='$hashCpass', profile_pic='$destination' where id='$id' ";
            $result = mysqli_query($con, $query);

            if ($result) {
                echo "data inserted successfully";
                header("Location:user_profile.php");
            } else {
                echo "not inserted";
            }


        } else {
            echo "passwords are not matching";
        }
    } else {
        $error = "Enter all the filelds";
    }


}

$query = "SELECT * from users where id=$id";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);


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
                        <div class="col-lg-5 d-flex justify-content-center align-items-center">
                            <h3>Update Profile</h3>
                        </div>
                        <div class="col-lg-7 bg-secondary p-4">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control"
                                            value="<?php echo $row['name'] ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control"
                                            value="<?php echo $row['email'] ?>">
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
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="photo" class="form-label">Profile</label>
                                        <input type="file" name="photo" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" value="submit" class="btn btn-primary">
                            </div>

                            <?php if ($error != null) {
                                echo $error;
                            } ?>
                        </div>

                    </div>



                </form>
            </div>
        </div>
    </div>


    <!-- <div class="container">
        <div class="login d-flex justify-content-center align-items-center flex-column vh-100 text-light">
            <form action="" class=" w-50 p-5 bg-secondary" method="POST" enctype="multipart/form-data">
                <div class="form-group text-center">
                    <h2>Sign Up</h2>
                </div>

                <div class="form-group">
                    <label for="photo" class="form-label">Profile</label>
                    <input type="file" name="photo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $row['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="cpassword" class="form-label">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" required>
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