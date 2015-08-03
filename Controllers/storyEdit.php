<?php

$head['title'] = 'Editing';
$scripts = [];
$styles = [];
$navPage = 'storyEdit';

if(URI_PART_1) {
    $id = URI_PART_1;
    $mongoId = new MongoId($id);
    $story = $postCol -> findOne(array("_id" => $mongoId));
//    var_dump($story);
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_SESSION['user'])) {

        $content = $_POST['storyText'];
        $poster_id = $_SESSION["userID"];
        $oldContent = $story["content"];

        $postCol -> update(
            $story,
            array('$set' => array("content" => $oldContent . "<br/><br/>" . $content))
//            array("upsert" => true)
        );
        header("Location: /story/". $story["_id"]);
    }
    else {
        header("Location: /login");
    }
}
//

include DIR_VIEW.'/storyEdit.php';