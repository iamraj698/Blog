<?php

include 'header.php'; ?>

<div class="welcome-div d-flex justify-content-center align-items-center flex-column vh-100">
    <h1>Welcome <?php if (isset($_SESSION['username'])) {
        echo $_SESSION['username'];
    }
    ?></h1>
    <?php

    if (isset($_SESSION['role'])) {
        if ($_SESSION['role'] === "user") {

            ?>
            <h2><a href="create_blog.php">Create Blog</a></h2>
            <?php
        }
    } ?>
</div>

<?php include 'footer.php'; ?>