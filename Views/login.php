<?php include DIR_TMPL . '/header.php';
include DIR_TMPL . '/navbar.php'; ?>
    <!-- Main Content -->
    <section class="container">
        <h3>Existing User Login</h3>
        <form method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Submit</button>
        </form>
    </section>
<?php include DIR_TMPL . '/footer.php'; ?>