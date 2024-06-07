<?php
include 'header.php';
include 'connection.php';



$id = $_SESSION['user_id'];

$query = "SELECT * FROM users where id=$id";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
// echo "<pre>";
// print_r($row);


?>

<div class="container-fluid">
    <div class="user d-flex justify-content-center mt-5 ">
        <div class="row w-100  p-5" style="border:1px solid black">
            <div class="col-6 d-flex justify-content-center flex-column">
                <h4>Name: <?php echo $row['name']; ?> </h4>
                <h4>Email: <?php echo $row['email']; ?> </h4>
                <h5><a href="create_blog.php" class="text-decoration-none  ">Add New Post</a></h5>
                <h5><a href="my_blogs.php" class="text-decoration-none text-dark ">My Blogs</a></h5>
            </div>

            <div class="col-6 d-flex justify-content-center  flex-column">

                <div class="profile_pic">
                    <img src="<?php echo $row['profile_pic']; ?>" alt="No Image" height="150" width="170"
                        style="border:1px solid black">
                    <?php if ($row['profile_pic'] === null) {
                        ?>
                        <p>Add Image to complete your profile</p> <?php
                    } ?>
                </div>
                <div class="edit_profile mt-2">
                    <a href="edit_profile.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary">Edit Profile</a>
                    <a href="add_image.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary">Add Image</a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include 'footer.php' ?>