<!--CS008 Lab 7 - nav.php-->
<nav>
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

			// better2
			print '<li class="';
			if ($path_parts['filename'] == "better2") {
				print 'active';
			}
			print '">';
			print '<a href="better2.php">Sewage Leaks</a>';
			print '</li>';

			// contact
			print '<li class="';
			if ($path_parts['filename'] == "contact") {
				print 'active';
			}
			print '">';
			print '<a href="contact.php">Contact</a>';
			print '</li>';

			// contest
			print '<li class="';
			if ($path_parts['filename'] == "contest") {
				print 'active';
			}
			print '">';
			print '<a href="contest.php">Contest</a>';
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