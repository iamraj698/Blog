<?php
session_start();
include 'connection.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <title>My Blog</title>

    <style>
        .navbar .navbar-brand {
            color: white;
        }

        .navbar .nav-link {
            color: white;
        }

        .ck-editor__editable_inline {
            min-height: 500px;
            /* Set your desired height here */
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark text-light  bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="create_blog.php">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blogs.php">Blogs</a>
                    </li>
                    <?php if (isset($_SESSION['role'])) {
                        if ($_SESSION['role'] === "user") { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="user_profile.php">Profile</a>
                            </li>
                        <?php }
                    }
                    ?>
                    <?php if (isset($_SESSION['role'])) {
                        if ($_SESSION['role'] === "admin") { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="view_users.php">Users</a>
                            </li>
                        <?php }
                    }
                    ?>

                </ul>
            </div>
            <?php if (isset($_SESSION['username'])) { ?>
                <a href="logout.php" class="btn btn-danger mx-auto text-light">Logout</a><?php } else { ?>
                <a href="login.php" class="btn btn-primary mx-auto text-light">Login</a><?php
            } ?>
        </div>
    </nav>