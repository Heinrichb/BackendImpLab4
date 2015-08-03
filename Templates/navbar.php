<nav class="navbar navbar-default">
    <div class="nav-container">
        <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#navbar-main" class="navbar-toggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a href="/" class="navbar-brand">Have I Got A Story For You</a>
        </div>
        <ul class="nav navbar-nav">
            <?php
            if(isset($_SESSION['user'])) {
                echo '<li';
                if ($navPage === "dashboard")  echo ' class="active"';
                echo '><a href="/dashboard">Dashboard</a></li>';

                echo '<li';
                if ($navPage === "storyCreate")  echo ' class="active"';
                echo '><a href="/create">Create Story</a></li>';

                echo '<li';
                if ($navPage === "stories")  echo ' class="active"';
                echo '><a href="/stories">Stories</a></li>';
            }
            ?>
        </ul>
        <div id="navbar-main" class="navbar-collapse collapse">
            <!--            <ul class="nav navbar-nav navbar-right">-->
            <?php
            if(isset($_SESSION['user'])) {
                echo '<a href="/logout" class="navbar-text pull-right"><span class="glyphicon glyphicon-log-out"></span> Logout</a>';
                echo '<p class="navbar-text pull-right">Welcome, <a href="/dashboard" class="pull-right">' . $_SESSION['user'] . '</a></p>';

            } else {
                // Register active check
                echo '<a href="/register" class="navbar-text pull-right';
                if($navPage === "register")  echo ' active';
                echo '"><span class="glyphicon glyphicon-user"></span> Sign Up</a>';

                // Login active check
                echo '<a href="/login" class="navbar-text pull-right';
                if($navPage === "login") echo ' active';
                echo '"><span class="glyphicon glyphicon-log-in"></span> Log In</a>';
            }
            ?>
            <!--            </ul>-->
        </div>
    </div>
</nav>