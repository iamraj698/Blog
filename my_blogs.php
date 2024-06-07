<?php
include 'header.php';

if ($_SESSION['role'] != 'user') {
    header("Location:index.php");
    exit();
}


include 'connection.php';
$id = $_SESSION['user_id'];
$query = "SELECT u.name, b.* from  users u , blogs b where u.id=b.posted_by AND u.id=$id";
$result = mysqli_query($con, $query);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
// echo "<pre>";
// print_r($rows);
?>
<div class="container">
    <h1>My Posts</h1>
    <?php if ($rows) {
        foreach ($rows as $blog) {
            ?>
            <div class="parent_container">
                <div class="title text-center">

                    <h2><?php echo $blog['title']; ?></h2>
                </div>
                <div class="description text-center">
                    <p class="text-justify"><?php echo $blog['description']; ?></p>
                </div>
                <?php if ($_SESSION['user_id']) {
                    ?>

                    <div class="edit">
                        <a href="edit_blog.php?id=<?php echo $blog['id']; ?>"
                            class="btn btn-primary text-decoration-none text-light">Edit</a>
                        <a href="delete_blog.php?id=<?php echo $blog['id']; ?>"
                            class="btn btn-danger text-decoration-none text-light">Delete</a>
                    </div><?php } ?>
                <div class="posted_by  d-flex justify-content-end">
                    <h5 class="">Posted By: <?php echo $blog['name']; ?></h5>
                </div>
            </div>
            <?php
        }

    } else {
        echo "There is nothing to show ";
    } ?>
</div>

<?php include 'footer.php'; ?>