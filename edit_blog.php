<?php include 'header.php';
include 'connection.php';
$id = $_GET['id'];
if (isset($_POST['submit'])) {
    // $title = $_POST['title'];
    $description = $_POST['editor'];
    // $id = $_SESSION['user_id'];
    $query = "UPDATE blogs set title='$title', description='$description' where id=$id";
    $result = mysqli_query($con, $query);
    if ($result) {
        echo "Blog Updated";
        header("Location:my_blogs.php");
        exit();
    } else {
        echo "Error Not updated";
    }

}

$query = "SELECT * from blogs where id=$id";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
// echo "<pre>";
// print_r($row['description']);
?>
<!-- 
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="parent bg-dark p-3 w-100 text-light">
        <h1 class="text-center">Add Post</h1>
        <form method="POST" class="p-3">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" class="form-control" placeholder="Title"
                            value="<?php echo $row['title'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" rows="6"
                            class="form-control"><?php echo $row['description'] ?></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="form-group">
                        <input type="submit" name="submit" value="Add" class="btn btn-primary">
                    </div>
                </div>
            </div>

        </form>
    </div>
</div> -->
<form method="POST">
    <textarea class="editor" name="editor"><?php echo $row['description']; ?></textarea>
    <input type="submit" name="submit" class="btn btn-primary">
</form>

<?php include 'footer.php'; ?>