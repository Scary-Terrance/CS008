<!--CS008 Lab 7 - index.php-->
<?php include "top.php"; ?>
<?php include "nav.php"; ?>
<?php include "sql.php"; ?>
<main>
	<article>
		<table>
			<tr>
				<th>Email</th>
				<th>Phone</th>
				<th>Message</th>
				<th>Subject</th>
				<th>Helpful</th>
				<th>Contact</th>
				<th>Affiliates</th>
				<th>Pledge Drive</th>
			</tr>
			<?php
				$contacts = loadContacts();
				if($contacts) {
					foreach($contacts as $row) {
						print '<tr>';

						// email
						print '<td>';
						print $row['email'];
						print '</td>';

						// phone
						print '<td>';
						print $row['phone'];
						print '</td>';

						// message
						print '<td>';
						print $row['message'];
						print '</td>';

						// subject
						print '<td>';
						print $row['subject'];
						print '</td>';

						// helpful
						print '<td>';
						print $row['helpful'];
						print '</td>';

						// contact
						print '<td>';
						print $row['contact'];
						print '</td>';

						// affil
						print '<td>';
						print $row['affil'];
						print '</td>';

						// pledge
						print '<td>';
						print $row['pledge'];
						print '</td>';

						print '</tr>';
					}
				}
			?>
		</table>
		<h1>A Case for Safe Injection Sites</h1>
		<div class="flex-content">
			<div class="flex-left">
				<p>Vermont could benefit from more safe injection sites.  The opioid epidemic is deeply entrenched in Vermont.  Cities throughout the state are struggling with the impacts of severe drug addiction.  Among these consequences is an increase of infectious bloodborne illnesses like HIV as a result of needle sharing.  Safe injection sites are in the best interest of everyone simply for the purpose of public health.  By providing clean needles, which will be properly disposed of and not left to potentially expose others to illness, the shelters can reduce the number of infections in a community.</p> <br>
				<p>The other major function of a safe injection site is to save lives.  Many people view drug use as a moral failing, and hold little sympathy for addicts.  However, regardless of personal opinions on the matter, overdose deaths have ripple effects which reach out to everyone in a community.  The best outcome is that a person is able to find the help needed to overcome their addiction.  For many that chance never comes because an overdose takes away the opportunity for recovery.  People trained in the use of Narcan are often able to save people who overdose.  Safe Injection sites offer trained staff equipped with Narcan who can save users who overdose, offer training in the use of Narcan, and distribute clean needles and Narcan to the community.</p> <br>
			</div>
			<div class="flex-right">
				<h2>Narcan can save lives - Data from a 2014 CDC Study</h2>
				<ul>
					<li>Narcan is an opiod antagonist, meaning it reverses the impacts of opiods.</li>
					<li>As of 2014, there were nearly 24,000 overdose reversals using Narcan.</li>
					<li>There are no major side-effects to Narcan</li>
				</ul> <br>
				<h3 id="table-cap">Who Provided Narcan according to the Study</h3>
				<table>
					<tr>
						<th>Administer of Narcan</th>
						<th>Proportion of Use</th>
					</tr>
					<tr>
						<td>Other Opiod Users</td>
						<td>82.8%</td>
					</tr>
					<tr>
						<td>Loved Ones</td>
						<td>9.6%</td>
					</tr>
					<tr>
						<td>Service Providers</td>
						<td>0.2%</td>
					</tr>
				</table> <br>
			</div>
		</div>
		<figure id="box-shadow">
			<img src="http://images.huffingtonpost.com/2015-06-22-1434997127-3023677-m6423a2f1.gif" alt="The number of Narcan providers nearly doubled between 2010 and 2014."> <br>
			<figcaption>The CDC Study found the number of Narcan Providers Doubled Between 2010 and 2014</figcaption>
		</figure> <br>
		<h4>Sources Cited</h4>
		<p>Castillo, T. (2017, December 07). Top 3 Highlights From the New CDC Report on Naloxone Programs. Retrieved May 25, 2019, from <a href="https://www.huffpost.com/entry/top-3-highlights-from-the_b_7638796">https://www.huffpost.com/entry/top-3-highlights-from-the_b_7638796</a></p>
		<p>Narcan Statistics and Facts. (2018, December 11). Retrieved May 25, 2019, from <a href="https://www.therecoveryvillage.com/narcan-addiction/narcan-statistics-and-facts/">https://www.therecoveryvillage.com/narcan-addiction/narcan-statistics-and-facts/</a></p>
	</article>
</main>
<?php include "footer.php"; ?>