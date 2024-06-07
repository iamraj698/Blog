<?php include 'header.php';
include 'connection.php';

$id = $_GET['id'];
$query = "SELECT * from blogs where id='$id'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    $fetch_like_type = "SELECT * from like_dislike WHERE post_id='$id'  AND user_id='$user_id ' ";
    $like_type = mysqli_query($con, $fetch_like_type);
    $liked = mysqli_fetch_array($like_type);
}


$fetch_likes = "SELECT COUNT(like_type), lk.* from like_dislike lk WHERE lk.like_type='like' AND lk.post_id='$id'";
$execute = mysqli_query($con, $fetch_likes);
$like = mysqli_fetch_array($execute);






// $executedis = mysqli_query($con, $fetch_dislikes);
// $dislike = mysqli_fetch_array($executedis);
// $count = count($like);
// echo "<pre>";
// print_r($dislike);

// echo $like[0];
// echo $dislike[0];
?>
<div class="container">
    <div class="content ">
        <div class="title text-center">
            <h1><?php echo $row['title']; ?></h1>
        </div>
        <div class="description">
            <p class="text-justify text-break"><?php echo $row['description']; ?></p>
        </div>
        <!-- <div class="like_dislike">

            <a href="like_dislike.php?id=<?php echo $id; ?>&type=like" class="btn"><?php
               if ($liked) {
                   if ($liked['like_type'] === 'like') { ?>
                        <i class="fa-solid fa-thumbs-up" style="color:red;"> </i>
                    <?php } else {
                       ?>
                        <i class="fa-regular fa-thumbs-up" style="color:red;"></i>
                        <?php
                   }
               } ?>Like
                <span><?php echo $like['COUNT(like_type)']; ?></span> </a>

        </div> -->
        <?php
        ?>

        <div class="like_dislike">
            <button id="like_button" class="btn">
                <?php if (isset($_SESSION['user_id'])) {
                    if ($liked && $liked['like_type'] === 'like') { ?>
                        <i class="fa-solid fa-thumbs-up " style="color:red;"></i>
                    <?php } else { ?>
                        <i class="fa-regular fa-thumbs-up " style="color:red;"></i>
                    <?php }
                } else {

                    ?><i class="fa-regular fa-thumbs-up " style="color:red;"></i><?php
                }
                ?>


                Like <span id="like_count"><?php echo $like['COUNT(like_type)']; ?></span>
            </button>
        </div>
        <?php

        ?>
    </div>
</div>


<?php include 'footer.php'; ?>
<script>
    $(document).ready(function () {
        $('#like_button').click(function () {
            $.ajax({
                url: 'like_dislike.php',
                type: 'GET',
                data: {
                    id: '<?php echo $id; ?>',
                    type: 'like'
                },
                success: function (response) {
                    console.log(response.type);
                    console.log(response.count);
                    if (response.type == 'like') {
                        $('i').removeClass('fa-regular');
                        $('i').addClass('fa-solid');

                    } else if (response.type == 'unlike') {
                        $('i').removeClass('fa-solid');
                        $('i').addClass('fa-regular');
                    }
                    else {
                        location = "./login.php";
                    }
                    $('#like_count').text(response.count);
                }
            });
        });
    });
</script>