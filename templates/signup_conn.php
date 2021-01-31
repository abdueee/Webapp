<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isSet($_POST['sentForm'])) {
		$conn = mysqli_connect('localhost', 'root', 'mohali2000','webapp') or die("Connection failed: " . mysqli_connect_error());
		if (isSet($_POST['firstName']) && isSet($_POST['lastName']) && isSet($_POST['email']) && isSet($_POST['pass']) && isSet($_POST['dob']) ) {
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $dob = $_POST['dob'];
 
			$sql = "INSERT INTO `user` (`first name`,`last name`, `email`, `password`, `date of birth`) VALUES ('$firstName', '$lastName', '$email', '$pass', '$dob')";
 
			$query = mysqli_query($conn,$sql);
			if ($query) {
				echo 'Data Successfullu Saved!';
			} else {
				echo "An error occured while save the data.";
			}
		}
	}
?>
