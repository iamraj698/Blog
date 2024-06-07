<?php
include 'header.php';
include 'connection.php';
$query = "SELECT u.name, b.* from  users u , blogs b where u.id=b.posted_by ";
$result = mysqli_query($con, $query);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>
<div class="container">
    <?php if ($rows) {
        foreach ($rows as $blog) {
            ?>
            <div class="parent_container">
                <div class="title text-center">
                    <h2><?php echo $blog['title']; ?></h2>
                </div>
                <div class="description text-center">
                    <p class="text-justify"><?php echo substr($blog['description'], 0, 200); ?> <a
                            href="view_blog.php?id=<?php echo $blog['id']; ?>">read more</a></p>
                </div>
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