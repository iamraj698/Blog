<?php include 'header.php';
include 'connection.php';

if (isset($_POST['submit'])) {
    // $title = $_POST['title'];
    $description = $_POST['editor'];
    $id = $_SESSION['user_id'];
    $query = "INSERT into blogs (description,posted_by) values ('$description',$id)";

    $result = mysqli_query($con, $query);

    if ($result) {
        echo "Blog Posted";
    } else {
        echo "Error Not Posted";
    }

}
?>

<form method="POST">
    <textarea class="editor" name="editor"></textarea>
    <input type="submit" name="submit" class="btn btn-primary">
</form>


<!-- 
// if (isset($_POST['submit'])) {
// $title = $_POST['title'];
// $description = $_POST['description'];
// $id = $_SESSION['user_id'];
// $query = "INSERT into blogs (title,description,posted_by) values ('$title','$description',$id)";

// $result = mysqli_query($con, $query);

// if ($result) {
// echo "Blog Posted";
// } else {
// echo "Error Not Posted";
// }

// }
// ?> -->
<!-- 
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="parent bg-dark p-3 w-100 text-light">
        <h1 class="text-center">Add Post</h1>
        <form method="POST" class="p-3">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" class="form-control" placeholder="Title">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" rows="6" class="form-control">Description</textarea>
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


<?php include 'footer.php'; ?>