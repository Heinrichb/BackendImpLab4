<?php include DIR_TMPL.'/header.php';
include DIR_TMPL.'/navbar.php'; ?>
   
<section class="container">
    <h1 class="text-center">Story List</h1>
    <?php
    foreach ($cursor as $post) {
        echo "<p>" . $post["title"] . "<br/>" . $post["content"] . '<br/>';

//        print_r($post["additions"]);

        echo '</p>';
    }
        foreach ($cursor as $post) {
            echo '<a href="/story/' . $post["_id"] . '"><div class="col-sm-6 storyContainer">';
                echo '<h2>' . $post["title"] . '</h2>';
            echo '</div></a>';
        }
    ?>
</section>


<?php include DIR_TMPL.'/footer.php'; ?>