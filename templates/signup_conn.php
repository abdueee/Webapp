<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isSet($_POST['sentForm'])) {
		$conn = mysqli_connect('localhost', 'root', 'mohali2000','webapp') or die("Connection failed: " . mysqli_connect_error());
		if (isSet($_POST['user']) && isSet($_POST['email']) && isSet($_POST['pass'])) {
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$email = $_POST['email'];
 
			$sql = "INSERT INTO `users` (`username`,`password`,`email`) VALUES ('$user', '$pass', '$email')";
 
			$query = mysqli_query($conn,$sql);
			if ($query) {
				echo 'Data Successfullu Saved!';
			} else {
				echo "An error occured while save the data.";
			}
		}
	}
?>
