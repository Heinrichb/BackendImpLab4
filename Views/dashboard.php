<?php
include DIR_TMPL . '/header.php';
include DIR_TMPL . '/navbar.php';
?>
<div class="container main-Content">
    <h3>Dashboard</h3>

    <div>
        <?php
        foreach ($cursor as $post) {
            echo "<p>" . $post["content"] . "<br/>" . $post["poster_id"] . "</p>" ;
        }
        ?>
    </div>
</div>

<?php include DIR_TMPL . '/footer.php'; ?>