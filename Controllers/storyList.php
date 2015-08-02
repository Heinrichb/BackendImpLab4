<?php

$head['title'] = 'List Stories';
$scripts = [];
$styles = [];
$navPage = 'storyList';

$post = array("title" => "", "content" => "", "poster_id" => 0, "additions" => [] );
$cursor = $postCol -> find();
    
include DIR_VIEW . '/stories.php';