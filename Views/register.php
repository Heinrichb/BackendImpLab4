<?php
/**
 * Created by PhpStorm.
 * User: Brennen
 * Date: 7/28/2015
 * Time: 9:38 AM
 */
    include DIR_TMPL . '/header.php';
    include DIR_TMPL . '/navbar.php'; ?>

    <h3>Register</h3>
    
<!--    action='<?php echo DIR_CTRL.'/register.php' ?>'-->
    
    <form method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" />
        <br>
        <label for="email">E-mail Address: </label>
        <input type="text" name="email"/>
        <br>
        <label for="password">Password: </label>
        <input type="password" name="password"/>
        <br>
        <label for="passwordConfirm">Confirm Password: </label>
        <input type="password" name="passwordConfirm"/>
        <br>
        <input type="submit" value="register"/>
    </form>

<?php include DIR_TMPL . '/footer.php'; ?>