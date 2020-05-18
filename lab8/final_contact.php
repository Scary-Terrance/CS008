<?php include "top.php"; ?>
<?php include "nav.php"; ?>
<?php
	// Database info
	$databaseName = 'BVENTURA_cs008-final';
	$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
	$dbUserName = "bventura_writer"; 
	$dbPassword = "0owdQGWyHD0x";
	//$pdo = new PDO($dsn, $dbUserName, $dbPassword);

	// Clean data from the form
	function clean($name) {
		if(isset($_POST[$name])) {
			// Remove html and trim whitespace
			$clean = trim($_POST[$name]);;
			$clean = htmlspecialchars($clean);
			$clean = preg_replace("/;/", "", $clean);
			$clean = preg_replace("/\"/", "", $clean);
		}
		else {
			$clean = "";
		}
		return $clean;
	}

	function verifyPhone($testString) {
	    // Check for usa phone number 
	    //  see: http://www.php.net/manual/en/function.preg-match.php
	    // NOTE: An area code cannot begin with the number 1, often when you type 
	    // a number for testing you type 123 ... and it will not pass validation :)
	    $regex = '/^(?:1(?:[. -])?)?(?:\((?=\d{3}\)))?([2-9]\d{2})(?:(?<=\(\d{3})\))? ?(?:(?<=\d{3})[.-])?([2-9]\d{2})[. -]?(\d{4})(?: (?i:ext)\.? ?(\d{1,5}))?$/';
	    return (preg_match($regex, $testString));
	}
?>
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
					try {
	                    // Upload data to the database
	                    $sql = 'INSERT INTO contact (email, phone, message, subject, helpful, contact, affil, pledge) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
	                    $statement = $pdo->prepare($sql);
	                    $params = [$email, $phone, $message, $subject, $helpful, $contact, $affil, $pledge];
	                    $statement->execute($params);
	                    print '<p>Message Succesfully Recieved</p>';
	                } catch (PDOException $e) {
	                    print '<p>Error: Unable to contact database.</p>';
	                }
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
				<input type="checkbox" name="contact" value="contact" checked>
				<label for="affil">Allow affiliated groups to contact me.</label>
				<input type="checkbox" name="affil" value="affil" checked>
				<label for="pledge">Contact me during pledge drives for donations.</label>
				<input type="checkbox" name="pledge" value="pledge" checked>
				<input id="sub" type="submit" value="Submit">
			</div>
		</form>
	</article>
</main>
<?php include "footer.php"; ?>