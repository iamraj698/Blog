<?php include "connection.php";
$id = $_GET['id'];
$query = "DELETE from users where id=$id";
$result = mysqli_query($con, $query);
if ($result) {
    echo "delete successful";
    header("Location:view_users.php");
} else {
    echo "not deleted";
}
?>