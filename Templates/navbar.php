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
                </ul>
            </div>
        </div>
    </nav>
</div>
<main>