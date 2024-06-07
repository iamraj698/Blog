<?php
include 'connection.php';
$id = $_GET['id'];


if (isset($_POST['submit'])) {

    $file = $_FILES['photo'];
    if ($file) {



        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];
        if ($fileerror === 0) {
            $destination = 'profile/' . $filename;
            move_uploaded_file($filepath, $destination);
        }

        $query = "UPDATE users set profile_pic='$destination' where id='$id' ";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo "Image added successfully";
            header("Location:user_profile.php");
        } else {
            echo "not inserted";
        }



    } else {
        echo "please select the image";
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
    <title>Add Image</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100 bg-dark">
        <div class="parent bg-secondary p-4 ">
            <form action="" method="POST" enctype="multipart/form-data">
                <h3 class="text-center text-dark">Add Image</h3>
                <div class="form-group">
                    <label for="photo" class="form-label">Profile</label>
                    <input type="file" name="photo" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Add" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</body>

</html>