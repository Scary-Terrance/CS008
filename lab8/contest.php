<!--CS008 Lab 7 - contest.php-->
<?php include "top.php"; ?>
<?php include "nav.php"; ?>
<main>
	<article>
	<?php
		$winners = array(
			array(2015, 'Mary Numa', 'West Haven CT', '4/29/15', '6:14 p.m.'),
			array(2016, 'Pamela Swift', 'Barre VT', '4/12/16', '5:04 p.m.'),
			array(2017, 'Emily Wiggett', 'North Danville VT', '4/23/17', '4:32 p.m.'),
			array(2018, 'Michael S. Cody', 'Barre VT', '5/4/18', '11:27 a.m.'),
			array(2019, 'Robynn L. Albert', 'Essex Jct VT', '4/25/19', '5:39 a.m.')
		);
		$num_wins = count($winners);
		print '<ol>';
		for ($i = 0; $i < $num_wins; $i++) {
			$num_winner = count($winners[$i]);
			print '<li>';
			for ($x = 0; $x < count($winners[$i]) - 1; $x++) {
				echo $winners[$i][$x] . ", ";
			}
			echo $winners[$i][$num_winner - 1];
			print '</li>';
		}
		print '</ol>';
	?>
	</article>
</main>
<?php include "footer.php"; ?>