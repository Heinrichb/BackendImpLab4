<?php

$head['title'] = 'Registration';
$scripts = [];
$styles = [];
$navPage = 'register';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Assigns variables
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($userCol -> find(array('username' => $username)) -> count() > 0) include DIR_VIEW.'/register.php';
    else {
        $salt = hash("sha512", time());
        $saltedPass = $password . $salt;
        $password = hash("sha512", $saltedPass);

        $userCol->insert(array('username' => $username,
            'password' => $password,
            'salt' => $salt));
        header("Location: /login");
    }
} else include DIR_VIEW.'/register.php';