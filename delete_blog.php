<?php
session_start();
include 'connection.php';

$id = $_GET['id'];

$query = "DELETE from blogs where id =$id";
$result = mysqli_query($con, $query);
if ($result) {
    ?>
    <script>
        alert("Deleted successfully");
        location = "my_blogs.php";
    </script>

    <?php
}

?>