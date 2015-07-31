<?php include DIR_TMPL . '/header.php';
      include DIR_TMPL . '/navbar.php'; ?>
<!-- Main Content -->
<section class="container">
    <h1 class="text-center">Lab 4 Login</h1>
    <div class="col-sm-2 hidden-xs"></div>
    <div class="col-sm-8">
        <form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars("/login");?>">
            <div class="form-group">
                <label class="control-label col-sm-3" for="username">Username:</label>
                <div class="col-sm-7">
                    <input class="form-control" type="text" name="username" placeholder="Enter Username" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="password">Password:</label>
                <div class="col-sm-7">
                    <input class="form-control" type="password" name="password" placeholder="Enter Password" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <input class="btn btn-primary loginBtn hidden-xs" type="submit" name="submit" value="Login" />
                    <input class="btn btn-primary loginBtn hidden-md hidden-lg hidden-sm btn-block" type="submit" name="submit" value="Login" />
                </div>
            </div>
        </form>
    </div>
    <div class="col-sm-2 hidden-xs"></div>
</section>
<?php include DIR_TMPL . '/footer.php'; ?>