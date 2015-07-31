<?php include DIR_TMPL . '/header.php';
include DIR_TMPL . '/navbar.php'; ?>

<div class="container">

<h3>Create Story</h3>

<form method="post">
    <div class="form-group">
        <label for="addedText">Story Start: </label>
        <br>
        <textarea cols="80" rows="10" name="storyText"></textarea>
    </div>
    <input type="submit" value="Start Story" />
</form>

</div>

<?php include DIR_TMPL . '/footer.php'; ?>