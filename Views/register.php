<?php
/**
 * Created by PhpStorm.
 * User: Brennen
 * Date: 7/28/2015
 * Time: 9:38 AM
 */
    include DIR_TMPL . '/header.php';
    include DIR_TMPL . '/navbar.php'; ?>

<div class="container main-Content">

        <h3>Register</h3>
    
<!--    action='<?php echo DIR_CTRL.'/register.php' ?>'-->
    
        <form method="post" class="register-form">

            <div class="form-group">
            <label for="username">Username: </label>
            <input type="text" name="username" class="form-control"/>
            </div>
            <div class="form-group">
            <label for="email">E-mail Address: </label>
            <input type="text" name="email" class="form-control"/>
            </div>
            <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" name="password" class="form-control"/>
            </div>
            <div class="form-group">
            <label for="passwordConfirm">Confirm Password: </label>
            <input type="password" name="passwordConfirm" class="form-control"/>
            </div>
            <div class="form-group btnHolder">
                <input type="submit" value="Register" class="btn btn-default"/>
            </div>
        </form>

</div>

<?php include DIR_TMPL . '/footer.php'; ?>