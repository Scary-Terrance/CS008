<?php include "top.php"; ?>
<?php include "nav.php"; ?>
<?php include "sql.php"; ?>
<main>
	<article>
		<?php
			print '<p>Post Array:</p><pre>';
			print_r($_POST);
			print '</pre>';

			if($_SERVER["REQUEST_METHOD"] == "POST") {
				$validate = true;
				$email = clean("email");
				$email = filter_var($email, FILTER_SANITIZE_EMAIL);
				if($email == "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
					print '<p>Please enter a valid email address.</p>';
					$validate = false;
				}
				$phone = clean("phone");
				if($phone == "" || !verifyPhone($phone)) {
					print '<p>Please enter a valid phone number.</p>';
					$validate = false;
				}
				$message = clean("message");
				if($message == "") {
					print '<p>Please enter a message.</p>';
					$validate = false;
				}
				$subject = clean("subject");
				if($subject == "") {
					print '<p>Please select a purpose for the message.</p>';
					$validate = false;
				}
				$helpful = clean("helpful");
				$contact = clean("contact");
				$affil = clean("affil");
				$pledge = clean("pledge");
				if($validate) {
					uploadForm($email, $phone, $message, $subject, $helpful, $contact, $affil, $pledge);
	            }
			}
		?>
		<form action="<?php print $phpSelf; ?>" method="post">
			<fieldset>
				<legend>Contact Me</legend>
				Email: <input type="email" name="email" placeholder="example@email.com" required>
				Telephone: <input type="tel" name="phone" placeholder="(000)000-0000" required>
				Message: <textarea name="message" placeholder="Your Message Here" rows="15" cols="60" required></textarea>
			</fieldset>
			<div class="form-inputs">
				<h3>What is the purpose of this message?</h3>
				<select name="subject">
					<option value="webdev">Web Development</option>
					<option value="tech">Technical Questions</option>
					<option value="personal">Personal</option>
				</select>

				<h2>Was the information on this site helpful to you?</h2>
				<label for="no">No</label>
				<input type="radio" name="helpful" id="no" value="no">
				<label for="some">Somewhat</label>
				<input type="radio" name="helpful" id="some" value="some">
				<label for="yes">Yes</label>
				<input type="radio" name="helpful" id="yes" value="yes">

				<label for="contact">Contact me with special offers and information.</label>
				<input type="checkbox" id="contact" name="contact" value="contact" checked>
				<label for="affil">Allow affiliated groups to contact me.</label>
				<input type="checkbox" id="affil" name="affil" value="affil" checked>
				<label for="pledge">Contact me during pledge drives for donations.</label>
				<input type="checkbox" id="pledge" name="pledge" value="pledge" checked>
				<input id="sub" type="submit" value="Submit">
			</div>
		</form>
	</article>
</main>
<?php include "footer.php"; ?>