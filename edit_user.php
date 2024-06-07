<?php
session_start();

include 'connection.php';
$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    // $password = $_POST['password'];
    // $cpassword = $_POST['cpassword'];
    if ($name && $email) {

        // $hashPass = password_hash($password, PASSWORD_BCRYPT);
        // $hashCpass = password_hash($cpassword, PASSWORD_BCRYPT);

        $query = "UPDATE users set name='$name',email='$email' where id='$id' ";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo "data updated successfully";
            header("Location:view_users.php");
        } else {
            echo "not inserted";
        }

    } else {
        echo "enter all fields";
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

    <div class="container">
        <div class="login d-flex justify-content-center align-items-center flex-column vh-100 text-light">
            <form action="" class=" w-50 p-5 bg-secondary" method="POST">
                <div class="form-group text-center">
                    <h2>Edit user</h2>
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>">
                </div>
                <!-- <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="cpassword" class="form-label">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control">
                </div> -->
                <div class="form-group">
                    <input type="submit" name="submit" value="submit" class="btn btn-primary">
                </div>
                <div class="text-center">
                    <a href="login.php">Already have an account</a>
                </div>
            </form>
        </div>
    </div>


</body>

</html>