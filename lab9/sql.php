<?php
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

	// Verify a phone number
	function verifyPhone($testString) {
	    // Check for usa phone number 
	    //  see: http://www.php.net/manual/en/function.preg-match.php
	    // NOTE: An area code cannot begin with the number 1, often when you type 
	    // a number for testing you type 123 ... and it will not pass validation :)
	    $regex = '/^(?:1(?:[. -])?)?(?:\((?=\d{3}\)))?([2-9]\d{2})(?:(?<=\(\d{3})\))? ?(?:(?<=\d{3})[.-])?([2-9]\d{2})[. -]?(\d{4})(?: (?i:ext)\.? ?(\d{1,5}))?$/';
	    return (preg_match($regex, $testString));
	}

	// Code to upload the form to the database
	function uploadForm($email, $phone, $message, $subject, $helpful, $contact, $affil, $pledge) {
		global $pdo;
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

	// Load date from the table
	function loadContacts() {
		global $pdo;
		$contacs = "";
		try {
			$sql = "SELECT * FROM `contact`";
			$contacts = $pdo->query($sql);
		} catch (PDOException $e) {
            print '<p>Error: Unable to contact database.</p>';
        }
        return $contacts;
	}
?>