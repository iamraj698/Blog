<?php

$con = mysqli_connect("localhost", "root", "", "blogdb");
if ($con) {
    ?>
    <script>
        console.log("connection successful");
    </script>
    <?php
} else {
    echo "connection unsuccessful";
}
?>