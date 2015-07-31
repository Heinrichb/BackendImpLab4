<?php
/**
 * Created by PhpStorm.
 * User: Brennen
 * Date: 7/28/2015
 * Time: 9:38 AM
 */
    include DIR_TMPL . '/header.php';
    include DIR_TMPL . '/navbar.php'; ?>

    <h3>Edit Story</h3>
    
    <form method="post">
        <div class="form-group">
            <label for="addedText">Story Start: </label>
            <br>
            <textarea class="storyText form-control" cols="60" rows="10" name="storyText"></textarea>
        </div>
        <div class="form-group btnHolder">
            <input type="submit" value="Start Story" class="btn btn-default"/>
        </div>
    </form>
    </div>

<?php include DIR_TMPL . '/footer.php'; ?>