<?php
include DIR_TMPL . '/header.php';
include DIR_TMPL . '/navbar.php';
?>
<div class="container main-Content">
    <h3>Dashboard</h3>

    <div>
        <?php
        foreach ($cursor as $post) {
            echo '<a href="/story/' . $post["_id"] . '"><div class="col-sm-6 storyContainer">';
                echo '<h2>' . $post["title"] . '</h2>';
            echo '</div></a>';
        }
        ?>
    </div>
</div>

<?php include DIR_TMPL . '/footer.php'; ?>