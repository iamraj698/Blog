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

            // echo "<pre>";
            // print_r($blog);
            // echo "</pre>";
            // if (preg_match('/<h1\b[^>]*>(.*?)<\/h1>/is', $blog['description'], $match)) {
            //     $first_h1 = $match[0]; // Full <h1>...</h1>
            //     $h1_text = $match[1];  // Just the text inside <h1>
    
            //     echo "Full H1: " . $first_h1 . "\n";
            //     echo "H1 Text: " . $h1_text . "\n";
            // }
            ?>
            <div class="parent_container">


                <div class="description mt-4">

                    <?php
                    if (preg_match('/<h1\b[^>]*>(.*?)<\/h1>/is', $blog['description'], $match)) {
                        $first_h1 = $match[0]; // Full <h1>...</h1>
                        // $h1_text = $match[1];  // Just the text inside <h1>
                        echo $first_h1 . "\n";
                        $description = preg_replace('/<h1\b[^>]*>.*?<\/h1>/is', '', $blog['description'], 1);


                    }
                    ?>
                    <div class="des-text  font-weight-normal d-flex flex-column justify-content-between"
                        style="font-size:16; font-weight: normal;">
                        <?php echo substr($description, 0, 200); ?>
                    </div>


                    <div class="readmore font-weight-normal">
                        <a href="view_blog.php?id=<?php echo $blog['id']; ?>" class="font-weight-normal">read more</a>
                    </div>
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