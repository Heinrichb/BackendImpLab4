<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <header class="navbar-header">
                <button type="button" class="navbar-toggle" data-target="#navbar-collapse" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand">NAVBAR HEADER</a>
            </header>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li <?php if($navPage === "index") echo 'class="active"'; ?>><a href="/">Home</a></li>
                    <li <?php if($navPage === "storyList") echo 'class="active"'; ?>><a href="/storyList">Stories</a></li>
                    <?php if(isset($_SESSION['user'])) {
                        echo '<li';
                        if ($navPage === "storyCreate") echo 'class="active"';
                        echo '><a href="/create">Create Story</a></li>';
                    } ?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if(isset($_SESSION['user'])) {
                        echo '<li><a>Welcome, '.$_SESSION['user'].'</a></li>';
                        echo '<li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
                    } else {
                        echo '<li';
                        // Register active check
                        if($navPage === "register") echo ' class="active"';
                        echo '><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						      <li';
                        // Login active check
                        if($navPage === "login") echo ' class="active"';
                        echo '><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</div>
<main>