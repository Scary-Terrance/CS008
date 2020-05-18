<!--CS008 Final - Ben Ventura index.php-->
<?php include "top.php"; ?>
<article>
    <div class="server-msg">
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $validate = true;
            $name = clean("name");
            if(strlen($name) > 30) {
                print '<p class="error">Please enter a name 30 characters or shorter.</p>';
                $validate = false;
            }
            $title = clean("title");
            if(strlen($title) > 100) {
                print '<p class="error">Please enter a title 30 characters or shorter.</p>';
                $validate = false;
            }
            $content = clean("content");
            if(strlen($content) > 2000) {
                print '<p class="error">Please enter content no longer than 2,000 characters.</p>';
                $validate = false;
            }
            $post_time = date("Y-m-d H:i:s");
            if($validate) {
                uploadPost($name, $title, $content, $post_time);
                die();
            }
            else {
                print '<p class="error">Error uploading form please try again</p>';
            }
        }
    ?>
    </div>
    <form action="<?php print $phpSelf; ?>" method="post">
        <fieldset>
            <legend>Make a Post</legend>
            <div class="field-content">
                Your Name: <input type="text" name="name" placeholder="Your Name" maxlenght="30" required>
                Title: <input type="text" name="title" placeholder="Post Title" maxlenght="100" required>
                Post Content: <textarea name="content" placeholder="Your Content Here" rows="15" cols="60" maxlength="2000" required></textarea>
            </div>
        </fieldset>
        <input id="sub" type="submit" value="Submit">
    </form>
</article>
<?php include "footer.php"; ?>