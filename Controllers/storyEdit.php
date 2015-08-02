<?php

$head['title'] = 'Editing';
$scripts = [];
$styles = [];
$navPage = 'storyEdit';

if(preg_match("(^/story/([A-Za-z0-9]+))", $_SERVER['REQUEST_URI'], $match)) {
    $id = $match[1];
    $mongoId = new MongoId($id);
    $story = $postCol -> findOne(array("_id" => $mongoId));
    var_dump($story);
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_SESSION['user'])) {

        $content = $_POST['storyText'];
        $poster_id = $_SESSION["userID"];
        $oldContent = $story["content"];

        $postCol -> update(
            $story,
            array('$set' => array("content" => $oldContent . $content))
//            array("upsert" => true)
        );
        header("Location: /story/55be99f39102a220a200002a");
    }
    else {
        header("Location: /login");
    }
}
//

include DIR_VIEW.'/storyEdit.php';