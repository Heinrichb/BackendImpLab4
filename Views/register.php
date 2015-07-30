<?php
/**
 * Created by PhpStorm.
 * User: Brennen
 * Date: 7/28/2015
 * Time: 9:38 AM
 */
    include DIR_TMPL . '/header.php';
    include DIR_TMPL . '/navbar.php'; ?>

<div class="container">
    <div class="row">
    <div class="col-xs-6 col-sm-4"></div>
    <div class="col-xs-6 col-sm-4">

        <h3>Register</h3>
    
<!--    action='<?php echo DIR_CTRL.'/register.php' ?>'-->
    
        <form method="post">

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
            <div class="col-xs-6 col-sm-4"></div>
            <div class="col-xs-6 col-sm-4">
                <input type="submit" value="Register" class="btn btn-default"/>
            </div>
            <div class="col-xs-6 col-sm-4"></div>
        </form>

    </div>
    <div class="col-xs-6 col-sm-4"></div>
    </div>
</div>

<?php include DIR_TMPL . '/footer.php'; ?>