<?php
include "header.php";
if ($_SESSION['role'] != "admin") {
    header("Location:index.php");

}
include "connection.php";

$query = "SELECT * from users";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<div class="table">
    <table class="table text-center">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>

            </tr>
        </thead>

        <?php foreach ($row as $user) {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td> <a href="edit_user.php?id=<?php echo $user['id']; ?>" class="btn btn-primary">Edit</a> <a
                            href="delete_user.php?id=<?php echo $user['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
            <?php
        } ?>
    </table>
</div>

<?php include "footer.php"; ?>