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
                    <li <?php if($navPage === "login") echo 'class="active"'; ?>><a href="/login">Log In</a></li>
                    <li <?php if($navPage === "register") echo 'class="active"'; ?>><a href="/register">Register</a></li>
                    <li <?php if($navPage === "storyCreate") echo 'class="active"'; ?>><a href="/create">Create Story</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<main>