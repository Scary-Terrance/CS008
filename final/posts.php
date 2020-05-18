<!--CS008 Final - Ben Ventura posts.php-->
<?php include "top.php"; ?>
<article>
    <?php 
        $posts = loadPosts();
        if($posts) {
            foreach($posts as $post) {
                print '<div class="post">';

                print '<h1 class="post_content">';
                print $post["title"];
                print '</h1>';

                print '<p class="post_content">';
                print $post["name"];
                print '</p>';

                print '<p class="post_content">';
                print $post["post_time"];
                print '</p>';

                print '<p class="post_content">';
                print $post["content"];
                print '</p>';

                print '</div>';
            }
        }
    ?>
</article>
<?php include "footer.php"; ?>