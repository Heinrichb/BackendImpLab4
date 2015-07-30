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
        <label for="addedText">Story Portion: </label>
        <textarea cols="40" rows="5" name="addedText"></textarea>
        <br>
        <input type="submit" value="Add to Story"/>
    </form>

<?php include DIR_TMPL . '/footer.php'; ?>