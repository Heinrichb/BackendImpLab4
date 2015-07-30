<?php
/**
 * Created by PhpStorm.
 * User: Brennen
 * Date: 7/28/2015
 * Time: 9:38 AM
 */
    include DIR_TMPL . '/header.php';
    include DIR_TMPL . '/navbar.php'; ?>

    <h3>Login</h3>

    <form method="post">
        <label for="username">Username: </label>
        <input type="text" name="username"/>
        <br>
        <label for="password">Password: </label>
        <input type="password" name="password"/>
        <br>
        <input type="submit" value="register"/>
    </form>

<?php include DIR_TMPL . '/footer.php'; ?>