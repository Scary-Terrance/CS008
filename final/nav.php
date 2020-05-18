<!--CS008 Final - Ben Ventura nav.php-->
<nav>
	<img id="logo-img" src="img/logo.png" alt="Self Portrait">
	<div id="logo">
		<h1 class="logo-text">Ben Ventura</h1>
		<h1 class="logo-text">Web Developer</h1>
	</div>
	<ul>
		<?php
			// index
			print '<li class="';
			if ($path_parts['filename'] == "index") {
				print 'active';
			}
			print '">';
			print '<a href="index.php">Home</a>';
			print '</li>';

			// contact
			print '<li class="';
			if ($path_parts['filename'] == "contact") {
				print 'active';
			}
			print '">';
			print '<a href="contact.php">Contact</a>';
			print '</li>';

			// post
			print '<li class="';
			if ($path_parts['filename'] == "post") {
				print 'active';
			}
			print '">';
			print '<a href="post.php">Post</a>';
			print '</li>';

			// posts
			print '<li class="';
			if ($path_parts['filename'] == "posts") {
				print 'active';
			}
			print '">';
			print '<a href="posts.php">View Posts</a>';
			print '</li>';

			// sewage bot
			print '<li class="';
			if ($path_parts['filename'] == "sewage") {
				print 'active';
			}
			print '">';
			print '<a href="sewage.php">Sewage Bot</a>';
			print '</li>';

			// about
			print '<li class="';
			if ($path_parts['filename'] == "about") {
				print 'active';
			}
			print '">';
			print '<a href="about.php">About</a>';
			print '</li>';
		?>
	</ul>
</nav>