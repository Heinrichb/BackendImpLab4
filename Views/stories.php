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
    ?>
</section>


<?php include DIR_TMPL.'/footer.php'; ?>