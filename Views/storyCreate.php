<?php include DIR_TMPL . '/header.php';
include DIR_TMPL . '/navbar.php'; ?>

<div class="container main-Content">

<h3>Create a Story</h3>

<form method="post">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Story Title" required autofocus>
    </div>
    <div class="form-group">
        <label for="storyText">Story Start: </label>
        <br>
        <textarea class="storyText form-control" cols="60" rows="10" name="storyText"></textarea>
    </div>
    <div class="form-group btnHolder">
        <input type="submit" value="Start Story" class="btn btn-primary pull-right"/>
    </div>
</form>
</div>

<?php include DIR_TMPL . '/footer.php'; ?>