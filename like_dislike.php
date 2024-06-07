<?php
$con = mysqli_connect("localhost", "root", "", "blogdb");
session_start();

$postId = $_GET['id'];
$user_id = $_SESSION['user_id'];
$type = $_GET['type'];
$query = "SELECT * FROM like_dislike where user_id=$user_id AND post_id=$postId ";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

$fetch_likes = "SELECT COUNT(like_type), lk.* from like_dislike lk WHERE lk.like_type='like' AND lk.post_id='$postId'";

function returnJsonResponse($data)
{
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}


if ($row) {


    if ($type === "like") {
        if ($row['like_type'] === 'like' && $row['like_type'] != 'dislike') {

            $query = "UPDATE like_dislike set like_type=NULL WHERE user_id=$user_id AND  post_id=$postId ";
            $result = mysqli_query($con, $query);
            if ($result) {
                $execute = mysqli_query($con, $fetch_likes);
                $like = mysqli_fetch_array($execute);
                returnJsonResponse(['type' => 'unlike', 'count' => $count = $like['COUNT(like_type)']]);

            }

        } elseif ($row['like_type'] != 'like' && $row['like_type'] != 'dislike') {

            $query = "UPDATE like_dislike set like_type='$type' WHERE user_id=$user_id AND  post_id=$postId ";
            $result = mysqli_query($con, $query);
            if ($result) {
                $execute = mysqli_query($con, $fetch_likes);
                $like = mysqli_fetch_array($execute);
                returnJsonResponse(['type' => 'like', 'count' => $count = $like['COUNT(like_type)']]);
            }


        } elseif ($row['like_type'] != 'like' && $row['like_type'] === 'dislike') {
            echo "delete dislike and insert like ";
            $query = "UPDATE like_dislike set like_type='$type' WHERE user_id=$user_id AND  post_id=$postId ";
            $result = mysqli_query($con, $query);
            if ($result) {
                $execute = mysqli_query($con, $fetch_likes);
                $like = mysqli_fetch_array($execute);
                returnJsonResponse(['type' => 'unlike', 'count' => $count = $like['COUNT(like_type)']]);
            }
        }



    }
} else {
    $query = "INSERT into like_dislike (post_id, user_id, like_type) values ('$postId',$user_id,'$type')";
    $result = mysqli_query($con, $query);

    if ($result) {
        $execute = mysqli_query($con, $fetch_likes);
        $like = mysqli_fetch_array($execute);
        returnJsonResponse(['type' => $type, 'count' => $count = $like['COUNT(like_type)']]);
    }
}






?>