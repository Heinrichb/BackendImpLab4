<?php
/**
 * Created by PhpStorm.
 * User: Brennen
 * Date: 7/28/2015
 * Time: 9:38 AM
 */
include DIR_TMPL . '/header.php';
include DIR_TMPL . '/navbar.php';

//$postCol -> remove();
?>


    <div class="container main-Content">
        <section class="storyContainer">
            <?php echo '<h3>' . $story["title"] . '</h3>'?>

            <!-- Author -->
            <p>
                by <a href="#"> <?php
                    $user = $userCol -> findOne(array(("_id") => $story["poster_id"]));
                    echo $user["username"];
                    ?>
                </a>
            </p>

            <div>
                <?php echo $story["content"]; ?>
            </div>

        </section>

        <hr/>

        <form method="post">
            <div class="form-group">
                <label for="addedText">Contribute To the Story</label>
                <br>
                <textarea class="storyText form-control" cols="60" rows="4" name="storyText"></textarea>
            </div>
            <div class="form-group btnHolder">
                <input type="submit" value="Submit" class="btn btn-primary pull-right"/>
            </div>
        </form>
    </div>

<?php include DIR_TMPL . '/footer.php'; ?>