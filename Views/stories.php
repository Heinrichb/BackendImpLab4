<?php

$head['title'] = 'View All Stories';
$scripts = [];
$styles = [];
$navPage = 'stories';

if(isset($_SESSION['user'])) {

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $content = $_POST['storyText'];
        $poster_id = $_SESSION['userID'];
        $post = array("content" => $content, "poster_id" => $poster_id);
        $postCol -> insert($post);


        header("Location: /dashboard");
    } else include DIR_VIEW . '/storyCreate.php';
} else {
    header("Location: /login");
}
