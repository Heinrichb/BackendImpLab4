<?php

$head['title'] = 'Story Creation';
$scripts = [];
$styles = [];
$navPage = 'storyCreate';

//$postCol -> remove();
if(isset($_SESSION['user'])) {

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = $_POST['title'];
        $content = $_POST['storyText'];
        $poster_id = $_SESSION['userID'];
        $post = array("title" => $title, "content" => $content, "poster_id" => $poster_id, "additions" => [] );
        $postCol -> insert($post);


        header("Location: /dashboard");
    } else include DIR_VIEW . '/storyCreate.php';
} else {
    header("Location: /login");
}
