<?php

$head['title'] = 'Stories';
$scripts = [];
$styles = [];
$navPage = 'stories';

$post = array("title" => "", "content" => "", "poster_id" => 0101, "additions" => []);
$cursor = $postCol -> find();

include DIR_VIEW . '/stories.php';