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
            <h3>Login</h3>

            <form method="post">

                <div class="form-group">
                    <label for="username">Username: </label>
                    <input type="text" name="username" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="password">Password: </label>
                    <input type="password" name="password" class="form-control"/>
                </div>
                <div class="col-xs-6 col-sm-4"></div>
                <div class="col-xs-6 col-sm-4">
                    <input type="submit" value="Login" class="btn btn-default"/>
                </div>
                <div class="col-xs-6 col-sm-4"></div>
            </form>
        </div>
        <div class="col-xs-6 col-sm-4"></div>
    </div>
</div>

<?php include DIR_TMPL . '/footer.php'; ?>