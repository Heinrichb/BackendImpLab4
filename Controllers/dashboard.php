<?php

$head['title'] = 'Dashboard';
$scripts = [];
$styles = [];
$navPage = 'dashboard';

$post = array("content" => "", "poster_id" => 0101);
$mongo_id = new MongoId($_SESSION["userID"]);
$cursor = $postCol -> find(array("poster_id" => $mongo_id));

include DIR_VIEW . '/dashboard.php';