<?php include DIR_TMPL . '/header.php';
include DIR_TMPL . '/navbar.php'; ?>
    <!-- Main Content -->
    <section class="container">
        <h2>Register New User</h2>
        <form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars('/register');?>">
            <div class="form-group">
                <label class="control-label col-sm-3" for="username">Username:</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="username" placeholder="Username" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="password">Password:</label>
                <div class="col-sm-9">
                    <input class="form-control" type="password" name="password" placeholder="Password" />
                </div>
            </div>
            <input class="btn btn-info pull-right submitBtn" type="submit" name="submit" value="Submit Registration" />
        </form>
    </section>

<?php include DIR_TMPL . '/footer.php'; ?>