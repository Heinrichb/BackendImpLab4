<?php

$head['title'] = 'Dashboard';
$scripts = [];
$styles = [];
$navPage = 'dashboard';

$post = array("content" => "", "poster_id" => 0101);
$cursor = $postCol -> find();

include DIR_VIEW . '/dashboard.php';