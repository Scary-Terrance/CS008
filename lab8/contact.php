<!--CS008 Lab 7 - contact.php-->
<?php include "top.php"; ?>
<?php include "nav.php"; ?>
<?php
	print '<p>Post Array:</p><pre>';
	print_r($_POST);
	print '</pre>';
?>
<main>
	<article>
		<form action="" method="post">
			<figure class="portrait">
				<img width="100" height="100" alt="Ben Ventura circa 2017" src="img/me.jpg">
				<figcaption>Standing next to the Jägala Waterfall in Estonia's Lahemaa National Park.</figcaption>
			</figure> <br>
			<fieldset>
				<legend>Contact Us</legend>
				Email: <input type="email" name="email" placeholder="example@email.com"> <br>
				Telephone: <input type="tel" name="phone" placeholder="(000)000-0000"> <br>
				Message: <textarea name="message" placeholder="Your Message Here" rows="15" cols="60"></textarea> <br>
			</fieldset>
			<div class="form-inputs">
				<label for="spam1">Send me more information about this.</label>
				<input type="checkbox" name="spam1" value="c1" checked> <br>
				<label for="spam2">Allow affiliated groups to contact me.</label>
				<input type="checkbox" name="spam2" value="c2" checked> <br>
				<label for="spam3">Contact me during pledge drives for donations.</label>
				<input type="checkbox" name="spam3" value="c3" checked> <br>
				<h2>How much information should we send you?</h2>
				<label for="some">Some</label>
				<input type="radio" name="amount" id="some" value="r1"> <br>
				<label for="bit">A Bit</label>
				<input type="radio" name="amount" id="bit" value="r2"> <br>
				<label for="lot">A Lot</label>
				<input type="radio" name="amount" id="lot" value="r3"> <br>
				<h3>How often should we contact you?</h3>
				<select name="regularity">
					<option value="Sometimes">Sometimes</option>
					<option value="Regularly">Regularly</option>
					<option value="Often">Often</option>
				</select> <br>
				<br>
				<input id="sub" type="submit" value="Submit">
			</div>
		</form>
	</article>
</main>
<?php include "footer.php"; ?>