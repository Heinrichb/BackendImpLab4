<?php

$head['title'] = 'Login';
$scripts = [];
$styles = [];
$navPage = 'login';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = $userCol -> findOne(array('username' => $username));

    // Salts the password
    $password = hash("sha512", $password.$user['salt']);

    // Compares passwords
    if($password !== $user['password']) header("Location: /login");
    else {
        $_SESSION["user"] = $user['username'];
        $_SESSION["userID"] = $user['_ID'];
        header("Location: /dashboard");
    }
} else include DIR_VIEW.'/login.php';